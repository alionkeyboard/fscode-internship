<?php

/*
 * Bu defe class yontemi ile izah edecem taski, eger taskin izahi zamani anlamaqda cetinlik cekseniz,
 * php class movzusunu arashdirib oyrenmeyiniz meslehetdir.
 */
class BookneticLib
{
	/*
	 * biz bir nece defe sehifeni CURL vasitesile cekmeli oluruq, her defe deyishen tekce URL olur
	 * bu halda her defe CURLi init etmekdense, bir defe init edib onu $c deyihseninde saxlayacagiq
	 */
	private $c;

	/*
	 * Burda da $data deyiskheninde son defe cekdiyimi sehifenin HTML kodlarini saxlayacagiq,
	 * bunun meqsedini daha sonra izah edecem
	 */
	private $data;

	// sehifelerin sayini burda saxlayiriq
	private $pages;

	// son olaraq neticeni bu deyishene elave edeceyik
	private $result = [];

	// class ishe dushende ilk cagirilacaq metodumuz __construct-dur
	public function __construct ()
	{
		/*
		 * bayaq qeyd etdiyimiz kimi, CURL-i bir defe yaradiriq ve deyishenimize menimsedirik
		 */
		$this->c = curl_init();
		curl_setopt( $this->c, CURLOPT_RETURNTRANSFER, TRUE );

		$this->get_blog_pages(); // sehifelerin sayini cekek ve $pages deyishenimize ataq
		$this->get_blog_items(); // elimizde $pages olduguna gore, bu saya esasen de bloqlari cekek
	}

	public function get_result ()
	{
		return $this->result;
	}

	private function get_blog_pages ()
	{
		/*
		 * Sehifenin sayini bloqun ilk sehifesinde alacagiq ve bu ilk sehifede hemcinin cekeceyimiz
		 * bloqlarin olmasi sebebile ele sehifeni cekmishken onu $data-mizda saxlayiriq. Bele etdiyimizde
		 * bloqlari cekerken ilk sehifeni yeniden cekmeye ehtiyac olmayacaq
		 */
		$this->data = $this->get_blog_html( 'https://www.booknetic.com/blog' );

		/*
		 * preg_match_all funksiyasinin 3-cu parametri isteye baglidir, eger, 3-cu parametr qeyd olunmazsa
		 * o zaman preg_match_all geriye array evezine, tapdigi neticelerin sayini donerecek
		 *
		 * yeni, array goturub sonra onu yeniden count etmeye ehtiyac yoxdur
		 *
		 * bir de burda ( int ) yazmagimizin sebebi preg_match_all-un false dondurduyu zaman false-u 0-a
		 * cevirmekdir
		 */
		$this->pages = ( int ) preg_match_all( '/class="page-link" href="/', $this->data );
	}

	private function get_blog_items ()
	{
		/*
		 * $pagesde sehifelerin sayi (hazirda 3) saxlandigi ucun, 1den bashlayaraq 3-e qeder loop edirik
		 */
		for ( $i = 1; $i <= $this->pages; $i++ )
		{
			/*
			 * burda bizim iki usulumuz movcuddur, birinci usul blog-item-leri cekmek evezine, ele bir basha
			 * title, desc ve date-lari cekmekdir. Lakin o halda, sehifede elave h2ler, p-ler oldugu ucun
			 * bir az qarishiqliq yaranacaqdi. Tebii ki, array_unshift ve s. ile bu problemi hell etmek olur,
			 * amma nezere almaq lazimdir ki, h2 ve p taqlari cox ishlenen taqlardi, sabah bir gun sehifeye
			 * coxlu sayda h2 ve ya p taqlari elave oluna biler, ele olan halda ise onlari ayirmaq cetin olur
			 *
			 * ona gore de men ikinci usulu secdim, can rahatligi ile blog-item ile butun bloqlar ehatelenib ve
			 * bize lazim olan butun datalar icindedir, ona gore de ele blog-item ile cekib, sonra onlarin
			 * icinde ozumuze lazim olanlari rahatliqla cekirik
			 */
			preg_match_all( '/class="blog-item">(.*?)<\/div>/s', $this->data, $items );


			/*
			 * eger sehife boshdursa, yaxud da her hansisa sebebden tapa bilmirse bloqlari, dongunun davamini
			 * iqnor edecek
			 */
			if ( empty( $items[ 1 ] ) )
			{
				continue;
			}

			/*
			 * sehifemize uygun arrayi yaradiriq
			 */
			$this->result[ 'page_' . $i ] = [];

			foreach ( $items[ 1 ] as $item )
			{
				// get title
				preg_match( '/<h2>(.*?)<\/h2>/', $item, $title );

				// get desc
				preg_match( '/<p>(.*?)<\/p>/', $item, $desc );

				// get date
				preg_match( '/class="bl-date">(.*?)<\/span>/', $item, $date );

				// get image
				preg_match( '/src="(.*?)"/', $item, $image );

				// get url
				preg_match( '/href="(.*?)"/', $item, $url );

				$this->result[ 'page_' . $i ][] = [
					'title' => ! empty( $title ) ? $title[ 1 ] : 'title not found',
					'desc'  => ! empty( $desc ) ? $desc[ 1 ] : 'desc not found',
					'date'  => ! empty( $date ) ? $date[ 1 ] : 'date not found',
					'image' => ! empty( $image ) ? $image[ 1 ] : 'image not found',
					'url'   => ! empty( $url ) ? $url[ 1 ] : 'url not found',
				];
			}

			/*
			 * birinci sehifenin datasi elimizde onceden oldugu ucun, umumi sehifelerin sayindan 1 cixiriq,
			 * bu halda loop-un son dongusunde novbeti sehifeni (olmayan sehifeni) cekmesine ehtiyacimiz yoxdur
			 *
			 * ona gore de eger son sehifedirse, yeni data cekmesini iqnor edirik, eks halda datani cekir ve
			 * $data deyishkenine atir
			 */
			if ( $i < $this->pages )
			{
				$this->data = $this->get_blog_html( 'https://www.booknetic.com/blog?page=' . ( $i + 1 ) );
			}
		}
	}

	private function get_blog_html ( $url )
	{
		curl_setopt( $this->c, CURLOPT_URL, $url );

		return curl_exec( $this->c );
	}
}

$booknetic_lib = new BookneticLib();

echo '<pre>';
print_r( $booknetic_lib->get_result() );
echo '</pre>';
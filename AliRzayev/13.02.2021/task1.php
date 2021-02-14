<?php
/*
	Cümlədəki sözləri sayan funksiya/kod yazmaq

	Bir çoxunuz düzgün məntiq qurmuşdu, boşluqların sayı + 1 hesablayıb sözlərin sayını tapırdı
	Lakin, problem sözlərin arasında çoxluq boşluq olanda və ya cümlənin başlanğıcında və sonunda boşluq olanda ortaya çıxırdı
	Bunu çoxunuza dedikdən sonra fix etdiz, əla.

	Mən də öz üsulumu göstərəcəm və izah etməyə çalışacam.
 */

function sozleri_say ( $cumle )
{
	// İlk öncə sayı özündə saxlayacaq dəyişkən yaradırıq
	$say = 0;

	// Bu $herf dəyişkəni, for-dakı $i-ni əvəzləyir. Döngünün hansı indexdə olduğunu göstərir.
	$herf = 0;

	/*
	 * Burda bir fərqli nüans var. Bir çoxunuz boşluq + hərf varsa, onu 1 söz kimi sayırdız, mən isə əksinə hərf + boşluqları
	 * bir söz kimi saydım. Boşluq + hərf kimi yoxlayanda əgər cümlənin əvvəlində boşluq varsa, onu yalnış hesablayır
	 * Əgər hərf + boşluğu bir söz kimi götürsək isə, əksinə cümlənin sonunda boşluq olarsa 1 söz artıq sayır
	 *
	 * Qısacası cümlənin əvvəlində olan problemi sonuna yerdəyişmə etdim
	 */
	$evvelinde_herf_olub = FALSE;

	/*
	 * Burda da bir bir bütün simvolları saxlayıram, beleləliklə də əgər cümlə boşluqla bitirsə, bu dəyişkənimizin qiyməti boşluq olacaq
	 * bunu daha sonra istifadə edəcəyik, yaddaşınızda saxlayın
	 */
	$sonuncu_simvol = '';

	/*
	 * normal şəkildə dədə-baba while-dan istifadə edərək bir bir bütün simvolları yoxlayacağıq
	 *
	 * for əvəzinə vhile istifadə etmək məqsədim indeksi blokdan çöldə də istifadə edə bilməyim idi
	 */
	while ( isset( $cumle[ $herf ] ) )
	{
		/*
		 * Cari simvol boshluqdursa bu shertin icini icra edeceyik
		 */
		if ( $cumle[ $herf ] === ' ' )
		{
			/*
			 * Okay, cari simvol boshluqdu, amma evvelinde eger herf olmayibsa niye soz olaraq sayaq ki, duzdu?
			 * ona gore de yoxlayiriq, eger evvelinde herf olubsa, yeni $cumle[ $herf - 1 ] !== ' ' olubsa
			 * o zaman sozu sayiriq
			 */
			if ( $evvelinde_herf_olub )
			{
				$say++;
			}

			/*
			 * Cari simvol boshluqdur, demeli bundan sonra gelecek simvola demeliyik ki, senden once herf yox boshluq olub
			 * $evvelinde_herf_olub-u false ederek bunu etmish oluruq
			 */
			$evvelinde_herf_olub = FALSE;
		}
		else
		{
			/*
			 * Eger cari simvol boshluq deyilse, onda bundan sonraki simvola mesaj oturek ki, senden once herf olub
			 * yeni $cumle[ $herf - 1 ] !== ' ' olub
			 *
			 * bayaqki shertin icinde bunu yoxlamishdiq, diqqetinden yayinibsa bir de bax
			 */
			$evvelinde_herf_olub = TRUE;
		}

		/*
		 * beli, bu da cox sade qaydada cumlenin son simvolunu daim yeniliyir
		 *
		 * eger cumlenin sonunda boshluq olarsa, bu deyishkenin qiymeti boshluq olacaq, eks halda sonuncu herf olacaq
		 */
		$sonuncu_simvol = $cumle[ $herf ];

		/*
		 * novbeti dongude novbeti simvolu yoxlasin deye +1leyirik.
		 */
		$herf++;
	}

	/*
	 * geldik en onemli yere
	 *
	 * normalda cumledeki sozlerin sayi cumledeki boshluqlarin sayi + 1 ile tapilir
	 * ona gore de coxunuz boshluqlari tapib, sonra ona 1 elave etmishdiz
	 *
	 * bes eger cumle umumiyyetle boshdursa? o zaman boshluqlarin sayi 0 olacaqdi, uzerinde 1 geldikde 1 verecekdi
	 * bosh cumlede 1 soz gostermesi duzgun deyil, ona gore de herflerin sayini yoxlayiram, eger $herf oz default qiymetini
	 * deyishmeyibse, yeni cumlede soz yoxdursa o zaman +1 etmesin
	 *
	 * burda ikinci bir shert de var, onemli bir shertdir
	 * yadinizdadirsa, cumlenin son simvolunu yadda saxlayirdiq
	 * indi onu yoxlayiriq, eger son simvol boshluqdursa, o zaman +1 elave etmesin, axi cumlenin sonunda ve ya evvelinde
	 * boshluq olanda 1 elave hesablayirdi, onun qarshisini almish oluruq belelikle
	 */
	if ( $herf > 0 && $sonuncu_simvol !== ' ' )
	{
		$say++;
	}

	return $say;
}

echo sozleri_say( 'Bu cumle tam-tamina alti sozden ibaretdir.' ) . '<br>';
echo sozleri_say( 'Bu cumle tam-tamina alti sozden ibaretdir.         ' ) . '<br>';
echo sozleri_say( '       Bu cumle tam-tamina alti sozden ibaretdir.' ) . '<br>';
echo sozleri_say( '       Bu cumle tam-tamina       alti sozden ibaretdir.' ) . '<br>';
echo sozleri_say( '         ' ) . '<br>';
echo sozleri_say( '' ) . '<br>';
<?php
/*
 * Metndeki cumlelerin ilk herflerini boyuden proqram yazmaq
 *
 * Bir coxunuz ic ice bir nece while istifade ederek, bezileriniz array-den istifade ederek bu tapshirigi hell
 * edib
 *
 * Lakin, coxunuzda bundan onceki taskda oldugu kimi coxlu boshluq olduqda problemler yashanirdi
 *
 * men tek for icinde hell etmeye + boshluq problemini de hell etmeye calishdim
 */

function ilk_herfleri_boyut ( $metn )
{
	/*
	 * bu defe eger cumlenin evvelinde noqte olubsa onu yaddashda saxlayiriq
	 * default deyerinin true olmasina sebeb metnin ilk herfinin boyuk olmasidi
	 *
	 * bir coxunuz $metn[0] ile ilk herfi boyutmushduz, amma nezere almaq lazimdir ki, o halda "  ilk herf"
	 * tipli metnde duzgun ishlemeyecekdi
	 */
	$evvelinde_noqte_olub = TRUE;

	/*
	 * bu defe herf deyishkeni for-dan qiraqda mene lazim deyil deye ele birbasha for istifade etdim
	 *
	 * burda da bir coxunuz metnin uzunlugunu olcmek ucun elave bir whiledan istifade edirdiz,
	 * amma buna ehtiyac yoxdur, cunki for-daki ortadaki shert bunu asanliqla hell edir
	*/
	for ( $herf = 0; isset( $metn[ $herf ] ); $herf++ )
	{
		/*
		 * eger cari simvolumuz noqtedirse o zaman $evvelinde_noqte_olub deyishkenini true edirik
		 */
		if ( $metn[ $herf ] === '.' )
		{
			$evvelinde_noqte_olub = TRUE;
		}

		/*
		 * eger cari simvol boshluqdursa ve en onemlisi, oncesinde noqte yoxdursa, yeni herf olubsa
		 * o zaman evvelindeki noqteni false etsin
		 *
		 * eger ele bir shert qoymasa idik, o zaman "meselen.   test." metninde test sozu kicik qalacaqdi
		 */
		else if ( $metn[ $herf ] === ' ' && ! $evvelinde_noqte_olub )
		{
			$evvelinde_noqte_olub = FALSE;
		}

		/*
		 * burda da eger cari simvol herfdirse ve evvelinde noqte olubsa
		 * o zaman herfi boyutsun
		 */
		else if ( $metn[ $herf ] !== ' ' && $evvelinde_noqte_olub )
		{
			$metn[ $herf ] = strtoupper( $metn[ $herf ] );

			$evvelinde_noqte_olub = FALSE;
		}
	}

	/*
	 * lakin, bu defeki izahda qeyd etdiyim "evvelindeki" ifadesi bir simvol evveli ifade etmir.
	 * bu defe qiymeti deyishene qeder eger $evvelinde_noqte_olub true qalmish olur
	 */

	return $metn;
}

echo ilk_herfleri_boyut( 'bu cumlede butun herfler kicikdir. amma cumlenin ilk sozundeki ilk herf boyuk olmalidir.' ) . '<br>';
echo ilk_herfleri_boyut( '   bu cumlede butun herfler kicikdir. amma cumlenin ilk sozundeki ilk herf boyuk olmalidir.' ) . '<br>';
echo ilk_herfleri_boyut( '.bu cumlede butun herfler kicikdir.    amma cumlenin ilk sozundeki ilk herf boyuk olmalidir.' ) . '<br>';
echo ilk_herfleri_boyut( 'bu cumlede butun herfler kicikdir.amma cumlenin ilk sozundeki ilk herf boyuk olmalidir.   ' ) . '<br>';
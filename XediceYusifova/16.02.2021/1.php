<?php

/**
 * 1) Bir funksiya hazırlayacaqsız.
 * Funksiyanın məqsədi verilmiş sözün bütün hərflərini öncə kiçiltmək, daha sonra isə ilk  hərfini böyütməkdir.
 * Hazır funksiya istifadə edə bilərsiniz.
 * İnternetdə aşağıdakı açar sözləri axtarıb kömək ala bilərsiz:
 * - strtolower
 * - ucfirst
 */

function ilk_herfi_boyut ( $soz )
{
	$soz = mb_strtolower( $soz );  //bütün hərfləri kiçiltmək üçün
	//ilk hərfi böyütmək üçün: ucfirst()
	//UTF8 stringin ilk hərfini böyütmək üçün:
	$encoding  = "utf8";
	$firstChar = mb_substr( $soz, 0, 1, $encoding );
	$then      = mb_substr( $soz, 1, NULL, $encoding );

	return mb_strtoupper( $firstChar, $encoding ) . $then;
}

echo ilk_herfi_boyut( 'BirLikdə Öyrənirik.' );
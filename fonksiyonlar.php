<?php

	/*
	*	Tema Class'ı
	*	2014
	*
	*/
$yakala = new Tema(ayar_degerleri('tema', 'dosya_yolu'));

function ayar_yukle($gelen) {		
	$ayaryap = array();

	if (!file_exists(dirname(__FILE__) . '/ayarlar/' . $gelen . '.php'))
		die( dirname(__FILE__) . '/ayarlar/' . $gelen . '.php dosyasını bulamadım');

	require(dirname(__FILE__) . '/ayarlar/' . $gelen . '.php');
		
	if (!isset($ayar) OR !is_array($ayar))
		die( dirname(__FILE__) . '/ayarlar/' . $gelen . '.php dosyasını bulamadım');

	if (isset($ayar) AND is_array($ayar))
		$ayaryap = array_merge($ayaryap, $ayar);
		
	return $ayaryap;
}


//ayar değerlerini kontrolden geçirelim
function ayar_degerleri($gelen, $deger) {

	static $ayar_degerleri = array();
	
	if (!isset($ayar_degerleri[$deger])) {
	
		$ayar = ayar_yukle($gelen);
		if (!isset($ayar[$deger]))
		
			return FALSE;
			
		$ayar_degerleri[$deger] = $ayar[$deger];	
		
	}
	return $ayar_degerleri[$deger];

}
//çağaracağımız sinifları adına göre çekelim
function __autoload($sinif_adi) {

	require_once('sinif/' . $sinif_adi . '.php');
}


?>

<?php

// Başlatalım
require_once('fonksiyonlar.php');


// Değer gönderelim
	//--> Bir fonksiyon çıktısı almış olalım
	//--> atayıp bastıralım

$verimiz = "Burası index sayfasıdır";	
$yakala->ata('anahtar', $verimiz);

// Anasayfa.tpl sayfamızı çağıralım
$yakala->ekran('anasayfa');

?>

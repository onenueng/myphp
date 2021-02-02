<?php

//array key & values

$product = [
	'iphon12' =>24000,
	'ipad' => 37000,
	'imac' => 45000,
	'PC' => 25000
	 ];
// print_r($product);
// echo '<hr>';
// var_dump($product);

foreach ($product as $key => $value) {
	echo 'ชื่อสินค้า '.$key. ' ราคา '.$value. ' บาท <br>';
}
echo '<hr>';

foreach ($product as $pname => $price) {
	echo '<font color ="blue">ชื่อสินค้า '.$pname. ' ราคา '.$price. ' บาท </font><br>';
}


?>
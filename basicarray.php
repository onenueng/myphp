<?php
	
	
	//BASIC ARRY IN PHP

	$colors = array('red','green','blue','yellow','pink');

	print_r($colors); //แสดงข้อมูล array โดยใช้ print_r
	echo '<br>';
	var_dump($colors); //แสดงรายละเอียดของข้อมูลในแต่ละลำดับ

	echo '<hr>';

	$colors2 = ['black','orange','gray'];
	print_r($colors2);
	echo '<br>';
	var_dump($colors2);

	echo '<hr>';
	$number = [0,1,2,3,4,5];
	print_r($number);
	echo '<br>';
	var_dump($number);
?>
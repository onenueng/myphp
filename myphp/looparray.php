<?php

$mybooks = ['PHP','AJAX','JAVA','HTML'];

foreach ($mybooks as $key) {
	//ใช้ foreach เพื่อวนซ้ำแสดงข้อมูลใน array
	echo '<font color ="blue">mybooks = '.$key .'</font><br>';
	echo '<hr>';

}
	print_r($mybooks);


?>
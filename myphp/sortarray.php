<?php

$mytext =['A','B','C','D'];
// $mytext2 = array ('A', 'B', 'C','D'); //ประกาศแบบนี้ก็ได้

sort($mytext); //เรียงจากน้อยไปหามาก 
foreach ($mytext as $key) {
	echo $key . "<hr>";
}
echo "<hr>";
 
$mynum = [11,32,43,14,55];

sort($mynum);
foreach ($mynum as $mynumber) {
	echo $mynumber . "<hr>";
}

echo "<hr>";

$mytxt = ['E','R','J','V'];
rsort($mytxt); //เรียงจากมากไปหาน้อย
foreach ($mytxt as $txt) {
	echo $txt . "<hr>";
}

echo "<hr>";

$myno = [7,8,5,3];
rsort($myno);
foreach ($myno as $myno2) {
	echo $myno2 . "<hr>";
}

//เรียนเพิ่มเติมที่ w3school เรื่อง sorting array
?>


<?php



$mynumber = 1;  //กำหนดค่าให้ตัวแปร


// if ($status == 1) {
// 	echo 'Show';
// }else{ 

// 	echo 'Hide';
// 3

 echo "<hr>";
 $status = 5;

 if ($status == 1) {
 	echo 'รอชำระเงิน';
 }elseif($status == 2){
 	echo 'รอตรวจสอบ รอชำระเงิน ';
 }elseif($status == 3){
 	echo 'รอเลข EMS';
 }elseif($status == 4){
 	echo 'ตรวจสอบเลข EMS';
 }else {
 	echo 'ยกเลิกออร์เดอร์';
 }

?>
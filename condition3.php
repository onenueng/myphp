<?php



//ใส่่สีตัวหนังสือ
//ค้นหาสีด้วยคำว่า color picker ใน google


 echo "<hr>";
 $status = 1; 
 $status = 1; 

 if ($status == 1) {
 	echo '<font color = "#ce42f5">';//echo ด้วย ''  attribute ข้างในต้องเป็น ""
 	echo 'รอชำระเงิน';
 	echo '<font>'; 
 }elseif($status == 2){
 	echo '<font color ="orange">รอตรวจสอบ รอชำระเงิน </font> ';
 }elseif($status == 3){
 	echo '<font color ="brown">รอเลข EMS </font>';
 }elseif($status == 4){
 	echo '<font color ="green">ตรวจสอบเลข EMS </font>';
 }else {
 	echo '<font color = "red">ยกเลิกออร์เดอร์ </font>';
 }





?>
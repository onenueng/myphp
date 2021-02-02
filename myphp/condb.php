<?php

//file เชื่อมต่อกับ database
$condb = mysqli_connect("localhost","root","","workshop_crud_member") or die("Error :" .mysqli_error ($condb));

//set utf8
mysqli_query($condb,"SET NAMES 'utf8' ");

// echo date('Y-m-d H:i:s');
// echo '<hr>';
//set time zone
date_default_timezone_set('Asia/Bangkok');
// echo date('Y-m-d H:i:s');
?>
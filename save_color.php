<?php


$mycolor = $_POST['mycolor']; //ประกาศตัวแปร mycolor = input ที่ส่งมาจาก form =$_post[mycolor]

echo $mycolor;

?>
<br>
<font color="<?php echo $mycolor;?>">สีที่เลือก </font>
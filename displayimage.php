<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Display image</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<img src="img/1.jpg" width="400px">
	<br>
	<?php

		echo '<img src="img/1.jpg" width="400px">'; //ถ้า echo ด้วย ' '  attribute ข้างในเช่น img ต้องเป็ฯ " "
		echo '<br>';
		echo "<img src='img/1.jpg' width='200px'>";
	?>
</body>
</html>
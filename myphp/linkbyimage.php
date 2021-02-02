<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Link by image</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<img src="img/1.jpg" width="400px"><hr>
	<a href="displayimage.php"> Link </a><hr>
	<a href="displayimage.php" target ="_blank" title="Link to my page" >
	 <img src="img/2.jpg" width="400px" >
	</a>
	<hr>

	<?php

	echo '<img src="img/1.jpg" width="400px"><hr>
	<a href="displayimage.php"> Link </a><hr>
	<a href="displayimage.php" target ="_blank" title="Link to my page" >
	 <img src="img/2.jpg" width="400px" >
	</a>';



	?>



</body>
</html>
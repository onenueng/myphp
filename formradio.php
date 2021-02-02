<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form radio</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save.php" method="post">
		<input type="radio" required name="pay" value="1" checked>เงินสด <br>	
		<input type="radio" name="pay" value="2" >บัตรเครดิตร <br>	
		<button type="submit">ชำระเงิน</button>
	</form>
</body>
</html>
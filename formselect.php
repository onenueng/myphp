<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form select option</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save.php" method="post" >
		ประเภทสินค้า
		<select name="type_id" required>
			<option value="">-กรุณาเลือก-</option>
			<option value="1">-Comput PC-</option>
			<option value="2">-Comput Notebook-</option>
			<option value="3">-Smart phone-</option>
		</select>
		<br>
		<button type="submit">save</button>
	</form>
</body>
</html>
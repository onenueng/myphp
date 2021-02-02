<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form add</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>ฟอร์มเพิ่มข้อมูลสมาชิก</h1>
	<form action="member_form_add_db.php" method="post">
		Username: 
		<input type="text" name="username" placeholder="username" required>
		<br>
		Passwor:
		<input type="password" name="password" placeholder="password" required="">
		<br>
		Name:
		<input type="text" name="name" placeholder="ชื่อ-สุกล" required>
		<br>
		Phone: 
		<input type="text" name="phone" placeholder="โทรศัพท์" required>
		<br>
		E-mail:
		<input type="email" name="email" placeholder="e-mail" required="">
		<br>
		<button type="submit">Save</button>



	</form>


</body>
</html>
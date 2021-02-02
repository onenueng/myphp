<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>register</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Form Register</h1>
	<form action="save.php" method="post">
		Username :
		<input type="text" name="username" required>
		<br>
		Password :
		<input type="password" name="password" required>
		<br>
		name :
		<input type="text" name="member_name" required>
		<br>
		phone :
		<input type="text" name="phone" required>
		<br>
		email :
		<input type="email" name="email" required>
		<br> 
		<button type="submit">Register</button>
	</form>
</body>
</html>
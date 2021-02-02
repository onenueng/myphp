<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form add</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php
		include 'condb.php';
		//id ที่ส่งมาแก้ไข
		$id = $_GET['id'];
		//echo $id;

		$query = "SELECT * FROM tbl_member WHERE id =$id";

		$result = mysqli_query($condb, $query) or die("Error in sql : $sql". mysqli_error($query));
		$row = mysqli_fetch_array($result);
		
		//print_r($row);


	?>


	<h1>ฟอร์มแก้ไข-ปรับปรุงข้อมูลสมาชิก</h1>
	<form action="member_form_edit_db.php" method="post">
		id: <input type="number" name="id" value="<?php echo $row['id'];?>" readonly>
		<br>

		Username: 
		<input type="text" name="username" placeholder="username" required value="<?php echo $row['username'];?>">
		<br>
		Passwor:
		<input type="password" name="password" placeholder="password" required value="<?php echo $row['password'];?>">
		<br>
		Name:
		<input type="text" name="name" placeholder="ชื่อ-สุกล" required value="<?php echo $row['name'];?>">
		<br>
		Phone: 
		<input type="text" name="phone" placeholder="โทรศัพท์" required value="<?php echo $row['phone'];?>">
		<br>
		E-mail:
		<input type="email" name="email" placeholder="e-mail" requied value="<?php echo $row['email'];?>">
		<br>
		<input type="hidden" name="id" value="<?php echo $row['id'];?>">
		<br>
		<button type="submit">Save</button>



	</form>


</body>
</html>
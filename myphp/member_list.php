<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>แสดงข้อมูลจากฐานข้อมูล member list</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
// include 'condb.php';
// $query ="SELECT * FROM tbl_member";
// $result = mysqli_query($condb, $query) or die("Error in sql : $sql". mysqli_error($query));
?>

<table border="1">
	<caption>List member <a href="member_form_add.php">เพิมข้อมูล</a> </caption>
	<thead>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>name</th>
			<th>phone</th>
			<th>email</th>
			<th>edit</th>
			<th>delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		include 'condb.php';
		$query ="SELECT * FROM tbl_member";
		$result = mysqli_query($condb, $query) or die("Error in sql : $sql". mysqli_error($query));


		foreach ($result as $row){ ?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['email'];?></td>
			<td>
				<a href="member_form_edit.php?id=<?php echo $row['id'];?>">edit</a>
			</td>
			<td>
				<a href="member_delete.php?id=<?php echo $row['id'];?>" onclick="return confrim('ยืนยันการลบข้อมูล');">del</a>
			</td>
		</tr>
		
		<?php } ?>
	</tbody>
</table>
<?php mysqli_close($condb); ?>
	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form upload file</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save.php" method="post" enctype="multipart/form-data">
		<input type="file" name="myfile" required accept="image/*">
		<!-- <input type="file" name="myfile" accept="application/pdf,application/vnd.ms-excel" /> -->
		<button type="submit">Upload</button>
		
	</form>

</body>
</html>
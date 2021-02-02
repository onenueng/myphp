<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>table</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

	echo '
		<table border="1px" width="400px">
		<caption>List member</caption>
		<thead>
			<tr bgcolor="green">
				<th>ID</th>
				<th>Mebmer Name</th>
				<th>Phone</th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td align="center">1.</td>
				<td>Nueng</td>
				<td align="right">95776</td>
			</tr>
			<tr>
				<td align="center">2.</td>
				<td>Nueng</td>
				<td>95776</td>
			</tr>
			<tr>
				<td align="center" colspan="2">2.Nueng</td>
				<td>95776</td>
			</tr>
			<tr bgcolor="pink">
				<td align="center" colspan="3">3. Nueng 95776</td>
				
			</tr>
		</tbody>
	</table>





	';


	?>
	
</body>
</html>
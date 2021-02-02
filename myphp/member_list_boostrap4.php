<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">
      <div class = "row">
        <div class ="col-md-12">

<table class ="table table-striped table-bordered table-hover table-sm">
  <h3>List member <a href="member_form_add_bt4.php" class="btn btn-primary btn-sm">เพิมข้อมูล</a> </h3>
  <thead>
    <tr class="table-primary">
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
    echo 'จำนวนที่เรา query ได้ ';echo mysqli_num_rows($result); //แสดงจำนวนที่เรา query ว่าได้กี่ rows
    
    

    foreach ($result as $row){ ?>
    <tr >
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['email'];?></td>
      <td>
        <a href="member_form_edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm">edit</a>
      </td>
      <td>
        <a href="member_delete.php?id=<?php echo $row['id'];?>" onclick="return confrim('ยืนยันการลบข้อมูล');" class="btn btn-danger btn-sm">del</a>
      </td>
    </tr>
    
    <?php } ?>
  </tbody>
</table> 
</div>
</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
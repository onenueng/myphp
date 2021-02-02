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
    <h1>Hello, world!</h1>
    <div class="container">
      <div class = "row">
        <div class ="col-md-12">

        <h3>ฟอร์มเพิ่มข้อมูลสมาชิก</h3>
        <form class="form-horizontal" action = "member_form_add_db.php" method="post">
  <div class="form-group row">
    <label for="inputusername" class="col-sm-1">Username</label>
    <div class="col-sm-5">
      <input type="text" name ="username" class="form-control" id="inputusername" placeholder="username">
    </div>
  </div> 
    <div class="form-group row">
    <label for="inputpassword" class="col-sm-1 control-label">Password</label>
    <div class="col-sm-5">
      <input type="password" name ="password" class="form-control" id="inputupassword" placeholder="password">
    </div>
  </div> 
  <div class="form-group row">
    <label for="inputname" class="col-sm-1 control-label">Name</label>
    <div class="col-sm-5">
      <input type="text" name ="name" class="form-control" id="inputname" placeholder="name">
    </div>
  </div>
<div class="form-group row">
    <label for="inputphone" class="col-sm-1 control-label">Phone</label>
    <div class="col-sm-5">
      <input type="text" name="phone" class="form-control" id="inputphone" placeholder="phone">
    </div>
  </div>

<div class="form-group row">
    <label for="inputemail" class="col-sm-1 control-label">email</label>
    <div class="col-sm-5">
      <input type="text" name="email" class="form-control" id="inputemail" placeholder="email">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputphone" class="col-sm-1"></label>
    <div class="col-sm-3">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputphone" class="col-sm-1"></label>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>

 
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
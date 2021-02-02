<?php

include 'condb.php';

// echo '<pre>';
// print_r($_POST); 
// echo '</pre>';

// echo '<hr>';
// echo '<pre>';
// var_dump($_POST); 
// echo '</pre>';

//ประกาศตัวแปรรับค่าจาก form (method Post)
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

//check ข้อมูลซ้ำ
    $query ="SELECT username FROM tbl_member where username='$username' ";
    $result = mysqli_query($condb, $query) or die("Error in sql : $sql". mysqli_error($query));
   // echo 'จำนวนที่พบ ';echo mysqli_num_rows($result); //แสดงจำนวนที่เรา query ว่าได้กี่ rows

//
    if(mysqli_num_rows($result) > 0){

       // echo 'Username นี้มีคนใช้แล้ว';
        echo "<script type='text'/javascript'>";
        echo "alert('username นี้มีคนใช้แล้ว');";
        echo "window.location ='member_form_add_bt4.php';";
        echo "</script>";
    }else{

        // echo 'สามารใช้ username นี้ได้';

//insert into table
    $sql = "INSERT INTO tbl_member
    (
    username,
    password,
    name,
    phone,
    email
    )
    VALUES (
    '$username',
    '$password',
    '$name',
    '$phone',
    '$email'
    )
    ";

    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));
    mysqli_close($condb);

    if ($result) {

        echo "<script type='text'/javascript'>";
        echo "alert('Update Successfully');";
        echo "window.location ='member_list_boostrap4.php';";
        echo "</script>";
        // echo 'Update Successfully';
    }else{
        echo "<script type='text'/javascript'>";
        echo "alert('ERROR !!');";
        echo "window.location ='member_list_boostrap4.php';";
        echo "</script>";
        
        // echo 'Error !!';
    }
        
    }  //}else{

exit();
    
    echo $sql;
    echo '<hr>';

    
?>
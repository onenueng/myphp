<?php
//file ต้นแบบ member_form_edit_db.php

include 'condb.php';

// echo '<pre>';
// print_r($_GET); 
// echo '</pre>';

// echo '<hr>';
// echo '<pre>';
// var_dump($_GET); 
// echo '</pre>';

// exit;


//ประกาศตัวแปรรับค่าจาก url $_GET

	$id = $_GET['id'];
    

//delete data 
    $sql = "DELETE FROM tbl_member WHERE id = $id";
        
    $result = mysqli_query($condb, $sql) or die("Error in sql : $sql". mysqli_error($sql));

    mysqli_close($condb); //คืนการเชื่อมต่อ db
    // echo $sql;
    // echo '<hr>';

    if ($result) {

    	echo "<script type='text'/javascript'>";
    	//echo "alert('Update Successfully');";
    	echo "window.location ='member_list.php';";
    	echo "</script>";
    	// echo 'Update Successfully';
    }else{
    	echo "<script type='text'/javascript'>";
    	echo "alert('ERROR !!');";
    	echo "window.location ='member_list.php';";
    	echo "</script>";
    	
    	// echo 'Error !!';
    }
?>
<?php
require_once 'db_connection.php';

if ( isset($_POST['submit'] ) ) {
    //   print_r($_POST);

    // $id=rand(1111,9999);
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query ="INSERT INTO `student`( `name`, `password`) VALUES ('$name','$password')";
    $result=mysqli_query($connection, $query);
    if($result){
        echo 'success';
    }
    else{
        echo 'faild';
    }

 }
?>
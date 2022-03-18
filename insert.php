<?php
require_once 'db_connection.php';
session_start();
if ( isset($_POST['submit'] ) ) {
    //   print_r($_POST);

    // $id=rand(1111,9999);
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query ="INSERT INTO `student`( `name`, `password`) VALUES ('$name','$password')";
    $result=mysqli_query($connection, $query);
    if($result){
       $_SESSION['message'] = '<p>Success</p>';
    }
    else{
         $_SESSION['message'] = '<p>Faild</p>';
    }

 }

 header('location:index.php');
?>

<?php
require_once 'db_connection.php';
$id= $_GET['id'];
// echo $id;

$sql="DELETE FROM `student` WHERE `id`='$id'";
mysqli_query($connection, $sql);

header('location:index.php');

?>
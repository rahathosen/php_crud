<?php
require_once 'db_connection.php';

$sql= "SELECT * FROM `student`";
$query_show = mysqli_query($connection,$sql);
// print_r($query_show);


?>
<?php
require_once 'db_connection.php';
$id= $_GET['id'];
// echo $id;
 $sql="SELECT * FROM `student` WHERE `id`='$id'";
 $result = mysqli_query($connection, $sql); 
 $row=mysqli_fetch_assoc($result);
if ( isset($_POST['submit'] ) ) {
    //   print_r($_POST);

    // $id=rand(1111,9999);
    $name=$_POST['name'];
    $password=$_POST['password'];
    $query ="UPDATE `student` SET `name`='$name',`password`='$password' WHERE `id`='$id'";
    $result=mysqli_query($connection, $query);
    if($result){
       $_SESSION['message'] = '<p>Success</p>';
    }
    else{
         $_SESSION['message'] = '<p>Faild</p>';
    }
   header('location:index.php');
 }
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
     <form action="" method="POST">
        Name :<input type="text" name='name' value="<?php echo $row['name'] ?>"><br />
        <br />
        Password:<input type="text" name='password' value="<?php echo $row['password'] ?>"><br />
        <!-- <button type="submit" name="btnSubmit">submit</button> -->
        <input type="submit" name="submit" value='update'>
    </form>

  

</body>
</html>
<?php
require_once 'db_connection.php';
require_once 'show.php';
session_start();

if ( isset($_POST['submit'])) {
    
  $name=$_POST['name'];
  $sql="SELECT * FROM `student` WHERE `name` LIKE '%$name%'";
  $result=mysqli_query($connection, $sql);




         if($row=mysqli_fetch_assoc($result)){ ?>
				<table>
                    <tr>
					<th>ID</th>
                    <th>Name</th>
					<th>PASSWORD</th>
					
				</tr>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['password']; ?></td>
				</tr>
                </table>
				<?php }
     
 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
#show-data{
    text-align:center;
}
.container{
    display:flex;
    justify-content:space-around;

}
</style>
</head>

<body>
   <div class='container'>
       <div class='from-data'>
            <form action="insert.php" method="POST">
        Name :<input type="text" name='name'><br />
        <br />
        Password:<input type="password" name='password'><br />
        <!-- <button type="submit" name="btnSubmit">submit</button> -->
        <input type="submit" name="submit" value='insert'>
    </form>

       </div>
       <div>
           <?php
           if($_SESSION['message']){
               echo $_SESSION['message'];
           }
           ?>
       </div>
   </div>
    <hr/>
    <h3 id='show-data'>Show Data</h3>
   

    
    <table >
        <tr>
            <td>Name</td>
            <td>Password</td>
            <td>action</td>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($query_show)){
            ?>
            <tr>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                 <td>
                    <?php echo $row['password'] ?>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id'] ?>">delete</a> |
                    <a href="update.php?id=<?php echo $row['id'] ?>">Edit</a>
                </td>

            </tr>
            <?php

        }
        ?>

    </table>
    <!-- <button >show data</button> -->

</body>

</html>
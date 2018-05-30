<?php
session_start();
$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);
$_SESSION['message'] = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['Delete'])){
                $id = $con->real_escape_string($_POST['id']);
                $result = $con->query("DELETE FROM product WHERE id ='$id'" ) or die($con->error());

                if($result === true){
                        $_SESSION['message'] = "product deleted successfully";
                }else{
                        $_SESSION['message'] = "Product has not been deleted";
                }
        }else{
                $_SESSION['message'] = "Failed to delete";
        }
}



?>





<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1 style="text-align:center">CMS</h1>
    <div class="topnav">
            <a href="Add.php">ADD</a>
        
            <a href="Edit.php">EDIT</a>
        
            <a href="View.php">VIEW</a>
        
            <a class="active" href="Delete.php">DELETE</a>

            <a style="background-color:red;float:right" href="Logout.php">LOGOUT</a>
    <div>

            <form class="inputCMS" method="POST">
                    <div><?= $_SESSION['message'] ?></div>
                    <input  type="text" name = "id" placeholder=" ID"><br/><br/><br/>
                    <button name="Delete">DELETE</button></form>
</body>

</html>
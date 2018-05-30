<?php
session_start();

$_SESSION['message'] = "";
$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['btn2'])){
        require 'addToDatabase.php';
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
            <a class="active" href="Add.php">ADD</a>
        
            <a href="Edit.php">EDIT</a>
        
            <a  href="View.php">VIEW</a>
        
            <a href="Delete.php">DELETE</a>

            <a style="background-color:red;float:right" href="Logout.php">LOGOUT</a>
    </div>

    <form class="inputCMS" method="POST" enctype="multipart/form-data">
            <div><?= $_SESSION['message']?></div>
            <input  type="text" name="name" placeholder=" Name" required /><br/><br/><br/>
            <input  type="text" name="description" placeholder=" Description" required/><br/><br/><br/>
            <input  type="text" name="price" placeholder=" Price" required/><br/><br/>
            <input  type="file" name="image" accept="image/*" required /><br/><br/><br/>
            <button name="btn2">SUBMIT</button></form>

</body>

</html>
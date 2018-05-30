<?php 

session_start();

$_SESSION['message'] = "";

$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['btn'])){
        require 'login.php';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="topnav">
            <a href="index.php">Home</a>
        
            <a href="food.php">Food</a>
        
            <a href="About.php">About us</a>
        
            <a class="active" href="CMS.php">CMS</a>
        <form class="input" method="post" action="SearchProduct.php">
            <input  class="search" name="search" type="text" placeholder=" search...." required /> 
            <button class="submit" name="btn5"><i class="fa fa-search" style="font-size:25px"> </i></button></form>
    </div>

    <h1 style="text-align:center">CMS</h1>
    <form class="inputCMS" method="POST">
        <div> <?= $_SESSION['message']?></div>
        <input  type="text" name="email" placeholder=" Email" required /><br/><br/><br/>
        <input  type="password" name="password" placeholder=" Password" required /><br/><br/>
        <button name="btn">SUBMIT</button>
    </form>

    
    <div class="bottomNav">
        <button><i class="fa fa-facebook"></i></button>
        <button><i class="fa fa-twitter"></i></button>
        <button><i class="fa fa-instagram"></i></button>
    </div>

</body>

</html>
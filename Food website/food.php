<?php 
session_start();
$_SESSION['message'] = "";
$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);

        $result = $con->query("SELECT * FROM product") or die($con->error);

        if($result->num_rows == 0){
            $_SESSION['message'] = "Product does not exist";
        }

?>

<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.product{
    float:left;
    margin:40px;
    margin-right: 100px;
    text-align:justify;
    width: 250px;
}

.product:nth-child(3n){
    clear: left;
}
</style>
<body>
    <div class="topnav">
            <a href="index.php">Home</a>
        
            <a class="active" href="food.php">Food</a>
        
            <a href="About.php">About us</a>
        
            <a href="CMS.php">CMS</a>
        <form class="input" method="post" action="SearchProduct.php">
            <input  class="search" name="search" type="text" placeholder=" search...." required /> 
            <button class="submit" name="btn5"><i class="fa fa-search" style="font-size:25px"> </i></button>
        </form>
    </div>

    <div><?= $_SESSION['message']?></div>
    <?php
       while($row = $result->fetch_assoc()){
           echo"<div class=product>";
           echo "<image style=text-align:center src=".$row['image']. " height=150><br/>";
           echo "<span>Name: ".$row['name']."</span><br />";
           echo "<span style=width:150px;word-wrap:break-word>Description: ".$row['description']."</span><br />";
           echo "<span>Price: ".$row['price']."£</span> <br />";
           echo "</div>";
       }
    ?> 
    
    <div class="bottomNav">
        <button><i class="fa fa-facebook"></i></button>
        <button><i class="fa fa-twitter"></i></button>
        <button><i class="fa fa-instagram"></i></button>
    </div>

</body>

</html>
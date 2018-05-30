<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
.searchPro{
    text-align:justufy;
    position:absolute; 
    top:30%; 
    right: 41%; 
    width:250px;
    margin-right: 100px;
}

.searchPro:nth-child(3n){
    clear: left;
}

</style>

<body>
    <div class="topnav">
            <a  href="index.php">Home</a>
        
            <a href="food.php">Food</a>
        
            <a href="About.php">About us</a>
        
            <a href="CMS.php">CMS</a>
        <form class="input" method="post" action="SearchProduct.php">
            <input  class="search" name="search" type="text" placeholder=" search...." required /> 
            <button class="submit" name="btn5"><i class="fa fa-search" style="font-size:25px"> </i></button></form>
    </div>

    <div class="searchPro">
    <div><?=$_SESSION['message']?></div>
    <image src="<?=$_SESSION['image']?>" height="150"><br/>
    <span>Name: <?= $_SESSION['name']?></span><br />
    <span>Description: <?= $_SESSION['description']?></span><br />
    <span>Price: <?= $_SESSION['price']?>£</span></div>
 
    <div class="bottomNav">
        <button><i class="fa fa-facebook"></i></button>
        <button><i class="fa fa-twitter"></i></button>
        <button><i class="fa fa-instagram"></i></button>
    </div>

</body>

</html>
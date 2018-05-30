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
        
            <a class="active" href="About.php">About us</a>
        
            <a href="CMS.php">CMS</a>
        <form class="input" method="post" action="SearchProduct.php">
            <input  class="search" name="search" type="text" placeholder=" search...." required /> 
            <button name="btn5" class="submit"><i class="fa fa-search" style="font-size:25px"> </i></button></form>
    </div>
    <h1 style="text-align:center">ABOUT US</h1>
    <p style="text-align:center">text</p>

    <div class="headObj">
    <h1>Objective</h1>
    <p>text</p>
    </div>

    <div class="headExp">
        <h1>Experience</h1>
        <p>text</p>
    </div>

    
    <div class="bottomNav">
        <button><i class="fa fa-facebook"></i></button>
        <button><i class="fa fa-twitter"></i></button>
        <button><i class="fa fa-instagram"></i></button>
    </div>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="topnav">
            <a class="active" href="index.php">Home</a>
        
            <a href="food.php">Food</a>
        
            <a href="About.php">About us</a>
        
            <a href="CMS.php">CMS</a>
        <form class="input" method="post" action="SearchProduct.php">
            <input  class="search" name="search" type="text" placeholder=" search...." required /> 
            <button class="submit" name="btn5"><i class="fa fa-search" style="font-size:25px"> </i></button></form>
    </div>

    <div class="container">
    <image src="http://alexalaurenpatisserie.co.uk/wp-content/uploads/2016/08/4554414390_042b8560ff_z.jpg"  width="1349" height="500" style="cursor:default">
    <image src="http://alexalaurenpatisserie.co.uk/wp-content/uploads/2016/08/historypat1.jpg"  width="1349" height="500" style="cursor:default">
    <div class="h1text">Come take a look to our new delicious patisserie, more than 100 000 people love it</div>
    <div class="h2text">Our new menu are to kill for it</div>
    <button class="buttonFood" onclick="location.href = 'food.php';">FOOD <i class="fa fa-angle-double-right"></i> </button>
    </div>

    <div class="bottomNav">
        <button><i class="fa fa-facebook"></i></button>
        <button><i class="fa fa-twitter"></i></button>
        <button><i class="fa fa-instagram"></i></button>
    </div>

</body>

</html>
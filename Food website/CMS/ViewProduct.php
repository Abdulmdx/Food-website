<?php session_start(); ?>
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
            <a href="#"></a>
        
            <a href="#"></a>
        
            <a href="#"></a>
        
            <a href="#"></a>
    </div>

    <div style="text-align:center; position:absolute; top:30%; right: 41%"> 
    <image src="<?=$_SESSION['image']?>" height="150"><br/>
    <span><?= $_SESSION['name']?></span><br />
    <span><?= $_SESSION['description']?></span><br />
    <span><?= $_SESSION['price']?></span></div>
 

</body>

</html>
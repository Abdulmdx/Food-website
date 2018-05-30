<?php
session_start();
$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);

$_SESSION['message'] = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['View'])){
        $id = $con->real_escape_string($_POST['id']);

        $result = $con->query("SELECT * FROM product WHERE id = '$id'") or die($con->error);

        if($result->num_rows == 0){
            $_SESSION['message'] = "Product does not exist";
        }else{
            $product = $result->fetch_assoc();

            $_SESSION['name'] = $product['name'];
            $_SESSION['description'] = $product['description'];
            $_SESSION['price'] = $product['price'];
            $_SESSION['image'] = $product['image'];

            header("location: ViewProduct.php");
        }
    }else{
        $_SESSION['message'] = "Faild to view the product";
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
        
            <a class="active" href="View.php">VIEW</a>
        
            <a href="Delete.php">DELETE</a>

            <a style="background-color:red;float:right" href="Logout.php">LOGOUT</a>
    </div>

    <form class="inputCMS" method="POST">
            <div><?= $_SESSION['message']?></div>
            <input  type="text" name ="id" placeholder=" ID"><br/><br/><br/>
            <button name="View">VIEW</button>
            </form>
 

</body>

</html>
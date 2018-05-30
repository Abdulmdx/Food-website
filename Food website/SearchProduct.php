<?php
session_start();
$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);
$_SESSION['name'] = "";
$_SESSION['description'] = "";
$_SESSION['price'] = "";
$_SESSION['image'] = "";
$_SESSION['message'] = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['btn5'])){
        $search = $con->real_escape_string($_POST['search']);

        $result = $con->query("SELECT * FROM product WHERE name LIKE '$search'") or die($con->error);

        if($result === true){
            $_SESSION['message'] = "Product does not exist";
        }else{
            $product = $result->fetch_assoc();

            $_SESSION['name'] = $product['name'];
            $_SESSION['description'] = $product['description'];
            $_SESSION['price'] = $product['price'];
            $_SESSION['image'] = $product['image'];

            header("location: Search.php");
        }
    }else{
        $_SESSION['message'] = "Faild to view the product";
    }
}



?>
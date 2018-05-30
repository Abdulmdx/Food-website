<?php
session_start();
$_SESSION['message'] = "";
$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);
$id = $_SESSION['id'];
$name = $con->real_escape_string($_POST['name']);
$description = $con->real_escape_string($_POST['description']);
$price = $con->real_escape_string($_POST['price']);
$image = $con->real_escape_string($_POST['image']);

$sql = "UPDATE product 
        SET 
        name='$name', 
        description='$description',
        price=$price,
        image='$image' 
        WHERE id=$id";

        if($con->query($sql) === TRUE){
            $_SESSION['message'] = "Product updated to the database successfully";
        }else{
            $_SESSION['message'] = "Product could not be updated <br/>" . $con->error;
        }



?>

<div><?=$_SESSION['message']?></div>
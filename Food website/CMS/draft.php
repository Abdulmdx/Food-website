<?php
session_start();

$_SESSION['message'] = "";
$_SESSION['id'] = "";
$_SESSION['name'] = "";
$_SESSION['description'] = "";
$_SESSION['price'] = "";
$_SESSION['image'] = "";

$con = new mysqli("localhost", "root", "M00495457aug", "user") or die($con->error);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['btn3'])){
        $id = $con->real_escape_string($_POST['id']);

        $result = $con->query("SELECT * FROM product WHERE id ='$id'" ) or die($con->error());

        if($result->num_rows == 0){
                $_SESSION['message'] = "product does not exist";
            }else{
                $product = $result->fetch_assoc();

                if($id == $product['id']){
                     $_SESSION['id'] = $product['id'];   
                     $_SESSION['name'] = $product['name'];
                     $_SESSION['description'] = $product['description'];
                     $_SESSION['price'] = $product['price'];
                     $_SESSION['image'] = $product['image'];

                     if($_SERVER['REQUEST_METHOD'] == 'POST'){
                         if(isset($_POST['btnUpdate'])){
                             require 'EditItem.php';
                         }
                     }
                }else{
                        $_SESSION['message'] = "PLease try again";
                }
            }
    }
}

?>
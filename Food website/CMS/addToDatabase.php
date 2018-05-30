<?php

$name = $con->real_escape_string($_POST['name']);
$description = $con->real_escape_string($_POST['description']);
$price = $con->real_escape_string($_POST['price']);
$image = $con->real_escape_string('../image/' .$_FILES['image']['name']);

if(preg_match("!image!", $_FILES['image']['type'])){

    if(copy($_FILES['image']['tmp_name'], $image)){
        $_SESSION['name'] = $name;
        $_SESSION['description'] = $description;
        $_SESSION['price'] = $price;
        $_SESSION['image'] = $image;

        $sql = "INSERT INTO product ( name, description, price, image)".
        "VALUES ('$name','$description',$price,'$image')";

        if($con->query($sql) === TRUE){
            $_SESSION['message'] = "Product added to the database successfully";
        }else{
            $_SESSION['message'] = "Product could not be added " . $con->error;
        }
    }else{
        $_SESSION['message'] = "Failed to uplaod file";
    }
}else{
    $_SESSION['message'] = "Not an image please uplaod a PNG, JPEG or Gif ";
}



?>
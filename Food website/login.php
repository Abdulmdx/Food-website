<?php

$email = $con->escape_string($_POST['email']);
$password = $con->escape_string(md5($_POST['password']));

$result = $con->query("SELECT * FROM admin WHERE email ='$email'" ) or die($con->error());

if($result->num_rows == 0){
    $_SESSION['message'] = "user does not exist";
}else{
    $user = $result->fetch_assoc();

    if($password == $user['password']){
        header("location: CMS/Add.php");
    }else{
        $_SESSION['message'] = "password is incorrect please try again";
    }
}
?>
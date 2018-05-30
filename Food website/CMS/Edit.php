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

                     $_SESSION['id'] = $product['id'];   
                     $_SESSION['name'] = $product['name'];
                     $_SESSION['description'] = $product['description'];
                     $_SESSION['price'] = $product['price'];
                     $_SESSION['image'] = $product['image'];

                     }
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
        
            <a class="active" href="Edit.php">EDIT</a>
        
            <a href="View.php">VIEW</a>
        
            <a href="Delete.php">DELETE</a>

            <a style="background-color:red;float:right" href="Logout.php">LOGOUT</a>
    </div>

            <form class="inputCMS" method="POST">
                    <div><?=$_SESSION['message'] ?></div>
                    <input  type="text" name="id"placeholder=" ID"  required/><br/><br/><br/>
                    <button name="btn3">SUBMIT</button><br/><br/><br/>
            </form>

            <form class="inputUpdate" method="post" action="EditItem.php">
                   <div><?=$_SESSION['message'] ?></div>
                    <input  type="text" name="name" placeholder=" Name"  value="<?=$_SESSION['name']?>" required/><br/><br/><br/>
                    <input  type="text" name="description" placeholder=" Description"  value="<?=$_SESSION['description']?>" required/><br/><br/><br/>
                    <input  type="text" name="price" placeholder=" Price"  value="<?=$_SESSION['price']?>" required/><br/><br/><br/>
                    <input  type="text" name="image" placeholder=" Image" value="<?=$_SESSION['image']?>" required/><br/><br/><br/>
                    <button name="btnUpdate">UPDATE</button>
            </form>
 

</body>

</html>
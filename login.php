<?php
require 'config.php';
if(isset($_POST["submit"])){
    $nameemail = $_POST["nameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM `users` WHERE 'name' = '$nameemail' OR email = '$nameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
        }
        else{
            echo 
            "<script> alert('Wrong password'); </script>";
        }
    }
    else{
        echo 
        "<script> alert('User not registered'); </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<article>
    
<form action="" class="" method="post" autocomplete="off">

<div class="inputs">
<label for="nameemail">Username or Email : </label>
<input type="text" name="nameemail" id="nameemail" required value=""><br>
</div>
<div class="inputs">
<label for="email">Password : </label>
<input type="password" name="password" id="password" required value=""><br>
</div>
<button type="submit" name="submit">Login</button>
</form>
<div class="login">Want register? Register <a href="./registration.php">here</a> </div>
</body>
</html>
<?php 
require 'config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $confirmpassword = $_POST["confirmpassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE `name` = '$name' OR `email` = '$email'");
    if(mysqli_num_rows($duplicate)> 0){
        echo 
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO users VALUES( '0','$name','$email','$password')";
           mysqli_query($conn,$query);
            echo 
            "<script> alert ('registration successful') </script>";
        }
        else{
            echo
            "<script> alert ('passwords doesnt match') </script>";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <article>
<form action="" class="" method="post" autocomplete="off">

<div class="inputs">
<label for="name">Name : </label>
<input type="text" name="name" id="name" required value=""><br>
</div>
<div class="inputs">
<label for="email">Email : </label>
<input type="text" name="email" id="email" required value=""><br>
</div>
<div class="inputs">
<label for="password">Password : </label>
<input type="password" name="password" id="password" required value=""><br>
</div>
<div class="inputs">
<label for="confirmpassword">Confirm Password : </label>
<input type="password" name="confirmpassword" id="confirmpassword" required value=""><br>
<button type="submit" name="submit">Register</button>
</div>


</form>
<div class="login">
    Already registered? Login <a href="login.php">here</a> 
</div>

</article>

</body>
</html>
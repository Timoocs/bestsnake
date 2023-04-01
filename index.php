<?php 

require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION[
        "id"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id ");
        $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snake</title>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/general.css?v=<?php echo time(); ?>">
    <style>
        <?php 
       

        ?>
    </style>
</head>
<body>
    <header>
        <a href="logout.php">
            <div class="logout">logout</div>
        </a>
    </header>
    <canvas width="600px" height="600px">

    </canvas>
    <h1 class="score">0</h1>
    
    </h1>
    
    <h2 class="Play again"></h2>
    <script src="app.js"></script>

</body>
</html>
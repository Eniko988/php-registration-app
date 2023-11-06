<?php
require './connection.php';
if(isset($_POST['btn-submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    if(!empty($_POST['name'])&&!empty($_POST['password'])){
        $insert = loginlogout::login($name,$password);
    }else{
        echo "<script>
        alert('Please fill all the fields!');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login form</title>
</head>
<style>
form{
    height:230px;
}
</style>
<body>
    <div class="main">
        <div class="form">
            <div class="content">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type = "submit" value = "Login" name="btn-submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
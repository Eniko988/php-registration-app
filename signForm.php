<?php
require './connection.php';
if(isset($_POST['btn-submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['password'])){
        $insert = loginlogout::inserting($name,$email,$password);
        echo "<script>
        alert('User registered successfully!');
        </script>
        ";
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
    <title>Sign up form</title>
</head>
<body>
    <div class="main">
        <div class="form">
            <div class="content">
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type = "submit" value = "Sign up" name="btn-submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
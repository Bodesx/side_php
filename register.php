<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'header.php'
    ?>
<h2>Register</h2>
<form action="process.php" method= "post">
<label for="">Name:</label>
<input type="text" name = "user_name"><br><br>

<label for="">Email:</label>
<input type="email" name = "email"><br><br>

<label for="">Password:</label>
<input type="password" name = "password"><br><br>

<label for="">Confirm password:</label>
<input type="password" name = "confirm_pass"><br><br>

<input type="submit" value="register" name="save_user">
</form>





</body>
</html>
<?php session_start()  ?>


<?php
require "header.php";
//Create student
if(isset($_POST["save_student"])){
    $name = $_POST["student_name"];
     $age = $_POST["student_age"];
      $gender = $_POST["student_gender"];

$insert_data = mysqli_query($connect, "INSERT INTO student(name,age,gender) VALUES('$name','$age','$gender')");

    if ($insert_data) {
        header("location: all-student.php");
}
}

//Update student

if(isset($_POST['edit_student'])){
$id =$_POST['student_id'];
$name =$_POST['student_name'];
$age =$_POST['student_age'];
$gender=$_POST['student_gender'];
$update_student = mysqli_query($connect, "UPDATE student SET name = '$name', age = '$age', gender ='$gender' WHERE id ='$id'");
if($update_student){
    header ("location: all-student.php");
}
}

//register user 
if(isset($_POST['save_user'])){
    $name =$_POST['user_name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirm_pass =$_POST['confirm_pass'];

    if($password !== $confirm_pass){
        exit ("<p>password do not match </p> <a href='register.php'>Back </a>");
    }
    $user_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($user_exist) > 0){
        exit ("<P>user already exist</P><a href = 'index.php'>Login</a>");
    }
    $cryptic_pass = md5($password);

    $insert_user = mysqli_query($connect, "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$cryptic_pass')");
    if($insert_user){
        header("location: all-student.php");
    }
}

//login user 
if(isset($_POST['login_user'])){
    $email=$_POST['email'];
     $password=$_POST['password'];

     $user_exist=mysqli_query($connect,  "SELECT * FROM users WHERE email='$email'");

     if(!mysqli_num_rows($user_exist)){
        exit ("<p>user not found </p><p> <a href ='register.php'></a> </p><a href = 'login.php>Back</a>");
     }
$user_details = mysqli_fetch_assoc($user_exist);

$cryptic_pass=md5($password);
if($cryptic_pass !==$user_details['password']){
    exit("<p>incorrect password</p><P><a href = login.php>Back</a> </P>");
}
$_SESSION['login'] =true;
$_SESSION['id'] = $user_details['id'];

header("location:all-student.php");


}





?>
<?php require('sessionstart.php')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/all-student.php">All Student</a>
    <?php

include 'header.php';

$id = $_GET['id'];
$view_student = mysqli_query($connect, "SELECT * FROM student WHERE id = '$id'");
$student_details =mysqli_fetch_assoc($view_student);

if(!$student_details){
    exit('student not found');
}
    ?>

<h2>View Student</h2>

<p>Name: <?= $student_details['name'] ?></p>
<p>Age: <?= $student_details['age'] ?></p>
<p>Gender: <?= $student_details['gender'] ?></p>






</body>
</html>
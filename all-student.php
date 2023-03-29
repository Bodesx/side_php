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
   <?php
require "header.php";
$students = mysqli_query($connect, 'SELECT * FROM student')
   ?> 
<a href="/all-student.php">Add New Students</a>
<a href="/logout.php">logout</a>
<h2>All students</h2>
<table>
    <thead>
<td>S/N</td>
<td>Name</td>
<td>Age</td>
<td>Gender</td>
<td>Action</td>
    </thead>
    <tbody>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name']?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td>
                    <a href="view-student.php?id=<?= $student['id'] ?>">View</a>
                    <a href="edit-student.php?id=<?= $student['id'] ?>">Edit</a>
                    <a href="delete-student.php?id=<?= $student['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>






</body>
</html>
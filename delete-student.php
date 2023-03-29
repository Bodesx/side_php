<?php

require 'header.php';
$id = $_GET['id'];
$delete =mysqli_query($connect, "DELETE FROM student WHERE id ='$id'");
if($delete){
    header("location: all-student.php");
}



?>
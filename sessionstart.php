<?php
session_start();
if($_SESSION['login']!=true && !isset($_SESSION['id'])){
    header("location:login.php");
}
$currentuser_session=$_SESSION['id'];

?>
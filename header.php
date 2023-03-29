<?php
$connect = mysqli_connect("localhost", "root", "", "test");

 if ($connect){
    echo "connected";
}else {
    echo "connection failed";
}


?>


<?php
$age=18;
$pvc=true;
$ward=020;

if($age>=18 && $pvc && $ward==020     ){
    echo "can vote";
}else{
    echo "<li>cant vote cos does not meet Requirments </li>";
}



$age=15;
$pvc=true;
$ward=020;

if($age>=18 && $pvc && $ward==020     ){
    echo "can vote";
}else{
    echo " <li> cant vote cos does not meet Requirments </li>";
}


$age=18;
$pvc=false;
$ward=020;

if($age>=18 && $pvc && $ward==020     ){
    echo "can vote";
}else{
    echo " <li> cant vote cos does not meet Requirments </li>";
}


$age=18;
$pvc=false;
$ward=0234;

if($age>=18 && $pvc && $ward==020     ){
    echo "can vote";
}else{
    echo " <li> cant vote cos does not meet Requirments </li>";
}




?>
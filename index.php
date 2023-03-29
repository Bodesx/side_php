<?php require'sessionstart.php';  ?>
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
include "header.php"

?>


<h2>Students</h2>
<form action="process.php" method="post">
<label for="">Name:</label>
<input type="text" name="student_name"><br><br>

<label for="">Age:</label>
<input type="text" name="student_age"><br><br>

<label for="">Gender</label>
<select name="student_gender" id="">
<option value="">Select gender</option>
<option value="">Male</option>
<option value="">Female</option>
</select><br><br>
<input type="Submit" value="save" name="save_student">
</form>

























<P>matrix</P>

<?php
function multiply($num1, $num2, $num3=5){
$ans = $num1 * $num2*$num3;
echo $ans;
}
 multiply(4,5);

?>



<?php
//$insert_data=mysqli_query($connect, "INSERT INTO student(name,age,gender) VALUES('tunrayo','15','female')");
//if($insert_data){
 //   echo 'data save ';
//}
?>
</body>
</html>
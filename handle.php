<?php
$connection=mysqli_connect('localhost','root','','student');
$name=$_POST['name'];
$age=$_POST['age'];
$ex=$_POST['ex'];
$insert="INSERT INTO student_data(name,age,experience) VALUES ('{$name}','{$age}','{$ex}')";
$result=mysqli_query($connection,$insert);
header("Location:..\student\student.php")
?>
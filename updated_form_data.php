<?php
$conect=mysqli_connect('localhost','root','','student');
$name=$_POST['name'];
$id=$_POST['id'];
$age=$_POST['age'];
$ex=$_POST['ex'];
$update = "UPDATE `student_data` SET `name`='$name', `age`='$age', `experience`='$ex' WHERE id=$id" ;
$result=mysqli_query($conect,$update);
header("Location:http://localhost/php/student/student.php");
?>

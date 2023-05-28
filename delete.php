<?php
$connect=mysqli_connect('localhost','root','','student');
$id=$_GET['id'];
$delete="DELETE FROM student_data where id=$id";
$result=mysqli_query($connect,$delete);

header("Location:http://localhost/php/student/student.php");
echo $id;
?>
<?php
$connect=mysqli_connect('localhost','root','','student');
$id=$_GET['id'];
$select="SELECT * FROM student_data WHERE id=$id";
$result=mysqli_query($connect,$select);
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include './asset/boot.php';
    ?>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center" >UPDATE FORM</h2>
    <form class="m-auto  d-flex flex-column justify-content-center align-items-center" style="gap: 5px;" action="./updated_form_data.php" method="POST">
    <?php
    if(mysqli_num_rows($result) >0){
        while($row=mysqli_fetch_assoc($result)){
            ?>
            <input  class=" form-control w-25" name='id' type="hidden" value="<?php  echo $row['id'] ?>">

            <input class="form-control w-25" name='name' type="text" value="<?php echo $row['name']; ?>">
           
            <input class="form-control w-25" name='age' type="text" value="<?php echo $row['age']; ?>">
            
            <input class="form-control w-25" name='ex' type="text" value="<?php echo $row['experience']; ?>">
            <input class="form-control w-25 btn btn-danger" type="submit" value="submit">
            <?php
        }
    }
    ?>
    </form>
    </div>
</body>
</html>

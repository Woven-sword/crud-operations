<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include './asset/boot.php';
    ?>
    <title>fbise</title>
</head>
<body>
    <?php
    include './asset/nav.php';
    if(isset($_SESSION['data-added'])){
    ?>
    <div class="container m-auto w-25 text-center p-3 text-danger bg-dark pos " style="position:absolute;  left:35%;  transform:translateY(-200%)" >
        <?php 
        echo $_SESSION['data-added'];
        ?>
    </div>
    <?php 
    }
    ?>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>experience</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $connection = mysqli_connect('localhost', 'root', '', 'student');
        $select = "SELECT * FROM student_data";
        $result = mysqli_query($connection, $select);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
     ?>
     <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['experience']; ?></td>
        <td><a href="./updated.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
        <td><a href="./delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
     </tr>
     <?php
            }
        }
        ?>        
        </tbody>
    </table>
    <script>
        let pos=document.querySelector('.pos');
        setTimeout(()=>{
            pos.style.transform="translateY(1%)";
            pos.style.transition="all 1s";
        },100)
      
        setTimeout(()=>{
            pos.style.transform="translateY(-200%)";
            pos.style.transition="all 1s";
        },1500)
    </script>
    <?php
    unset($_SESSION['data-added'])
    ?>
</body>
</html>

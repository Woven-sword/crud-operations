<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>get user</title>
    <?php
    session_start();
    $connect=mysqli_connect('localhost','root','','student');
    $_SESSION['data-added']='data-inserted';
    ?>
</head>
<body>
    
    <div class="container col-sm-5">
    <h1>form</h1>
    <form action="./handle.php" method="POST">
        <label for="">name</label>
        <input class="form-control" type="text" name="name">
        <label for="">age</label>
        <input class="form-control"  type="number" name="age">
        <label for="">experience</label>
        <input class="form-control"  type="text" name="ex">
        <input class="form-control btn btn-dark my-3 " type="submit" value="add record">
    </form>
    </div>
</body>
</html>
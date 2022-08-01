<?php
require('connection.php');
require('login_script.php');
require('logic.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        .main
        {
            margin-left: 80px;
            margin-top: 50px;
        }
        .back
        {
            margin-left: 80px;
            margin-top: 50px;
        }
        .back a
        {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<button class="back btn btn-dark"><a href="./blog.php">Go Back</a></button>
<?php 
$email =  $_SESSION['email'];
$query = "SELECT * FROM project WHERE email = '$email'";
$execute  = mysqli_query($conn, $query);
$rows = $execute -> fetch_assoc()
?>
<h1 class="main"><?php echo $rows['firstname'] ?>'s Blogs</h1>

<div class="row">
    <?php 
    $email =  $_SESSION['email'];
    $query = "SELECT * FROM data WHERE email = '$email'";
    $execute  = mysqli_query($conn, $query);
    while($rows = $execute -> fetch_assoc())
    {  ?>
        <p></p>
    <div class="col-12 col-lg-4 d-flex justify-content-center">
        <div class="card text-white bg-dark mt-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-author"><?php echo $rows['author']?></h5>
                <h5 class="card-title"><?php echo $rows['title']?></h5>
                <p class="card-text"><?php echo $rows['content']?>...</p>
                <a href="view.php?id=<?php echo $rows['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
            </div>
        </div>
    </div>
    <?php }?>
</div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>




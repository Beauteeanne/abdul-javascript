<?php
require_once('connection.php');


if(isset($_POST['submit']))
{

   $email = mysqli_escape_string($conn,$_POST['email']);
   $password = md5(mysqli_escape_string($conn,$_POST['password']));

    //query
    $sql = "SELECT * FROM project WHERE EMAIL ='$email' AND PASSWORD = '$password'";
    $execute = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($execute);
    

    if($count > 0) {

        session_start();
        $_SESSION['email'] = $_POST['email'];
        header('location:blog.php');
    }
    else{
        echo 'Invalid username and password';
    }


}



?>
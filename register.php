<?php

include "connection.php";

if (isset($_POST["submit"])){
    $firstname = mysqli_escape_string($conn,$_POST['firstname']);
    $lastname = mysqli_escape_string($conn,$_POST['lastname']);
    $email = mysqli_escape_string($conn,$_POST['email']);
    $password = md5(mysqli_escape_string($conn,$_POST['password']));

    $sql = "INSERT INTO project(firstname, lastname, email, password)VALUES('$firstname', '$lastname', '$email', '$password')";
    $execute = mysqli_query($conn, $sql);

    if ($execute){
        echo "Record success";
        header('location:login.php');
    }
    else{
        echo "Record failed";
    }

}

?>
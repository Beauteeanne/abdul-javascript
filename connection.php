<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($host,$user,$password);
if (!$conn){
    echo "failed connection";

}
else{
   // echo "Connected successfully";
}

mysqli_select_db($conn, $database);

?>

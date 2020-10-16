<?php
$server = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
//     echo "Connected";
// }else{
    die("Error". mysqli_connect_error());
}

?>
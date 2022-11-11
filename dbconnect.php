<?php

$server_name = "localhost";
$user_name = "root";
$user_pass = "";
$databse_name = "music_user2";

$conn = mysqli_connect($server_name, $user_name, $user_pass, $databse_name);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
else{
    echo "Connection Successful";
}
?>
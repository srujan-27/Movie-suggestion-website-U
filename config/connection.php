<?php


$conn = mysqli_connect("localhost", "root", "root", "login_db");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

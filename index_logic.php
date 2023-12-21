<?php
session_start();
require 'helper.php';

$username = $_POST['username'];
$password = $_POST['password'];


/** @var mysqli $connection */
$found_user = attempt_login($username, $password, $connection);

if ($found_user){
    $_SESSION['username'] = $username;
    if ($username == "Melchor" or $username == "Gaspar" or $username == "Baltasar") {
        header("Location:" . "reyesVista.php");
    }else{
            header("Location:" . "askLetter.php");
        }
}

mysqli_close($connection);

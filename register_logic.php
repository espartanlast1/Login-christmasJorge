<?php

require 'helper.php';

$username = $_POST['username'];
$name = $_POST['name'];
$last_name = $_POST['last-name'];
$full_name = $name ." ". $last_name;
$age = $_POST['age'];
$address = $_POST['address'];
$password = $_POST['password'];

$tablename = "data_users";
$pass_s = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO `$tablename` (`username`, `password`, `address`, `name`, `edad`) VALUES ('$username', '$pass_s', '$address', '$full_name', '$age')";
/** @var mysqli $connection database connection used in helper.php */
$result = mysqli_query($connection, $query);
header("Location:" . "index.php");
mysqli_close($connection);

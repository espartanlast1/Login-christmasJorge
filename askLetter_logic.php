<?php
session_start();
require 'helper.php';

$letter = $_POST['letter'];
$gift1 = $_POST['gift1'];
$gift2 = $_POST['gift2'];
$gift3 = $_POST['gift3'];

$_SESSION['letter'] = $letter;
$_SESSION['gift1'] = $gift1;
$_SESSION['gift2'] = $gift2;
$_SESSION['gift3'] = $gift3;

/** @var mysqli $connection */
save_letter($_SESSION['username'], $letter, $gift1, $gift2, $gift3, $connection);
header("Location:" . "askLetter.php");
mysqli_close($connection);

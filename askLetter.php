<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php'?>
    <title>Letter to the Three Wise Men</title>
</head>
<body>
<div class="Pide tus regalos">
    <h1>Haz tu carta</h1>
    <img src="images/holy-family-christmas-mary-joseph-and-baby-jesus-christ-png.png" alt="logo">
    <h2>JMJ</h2>
    <form action="askLetter_logic.php" method="post">
        <textarea id="letter" name="letter" placeholder="Escribe tu carta..." rows="4" required></textarea><br>

        <input type="text" id="gift1" name="gift1" placeholder="Primer Regalo" required><br>
        <input type="text" id="gift2" name="gift2" placeholder="Segundo Regalo"><br>
        <input type="text" id="gift3" name="gift3" placeholder="Tercer Regalo"><br>

        <input type="submit" value="Submit Letter">
    </form>
    <?php
        if (!empty($_SESSION['letter'])) {
            ?>
            <h2>Tu carta es</h2>
            <?php
            echo "<div style='color: red;'>" . $_SESSION['letter'] .'<br>'. $_SESSION['gift1']. '<br>' . $_SESSION['gift2']. '<br>'. $_SESSION['gift3'] . "</div>";
        }
    ?></div>
</body>
</html>

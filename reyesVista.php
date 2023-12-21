<?php
require 'helper.php';
/** @var mysqli $connection database connection used in helper.php */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php'?>
    <title>Vista Reyes</title>
</head>
<body>
<div class="reyesVista-page">
    <h1>Vea los regalos</h1>
    <img src="images/holy-family-christmas-mary-joseph-and-baby-jesus-christ-png.png" alt="logo">
    <h2>JMJ</h2>
    <?php $result = getAllLetters($connection); ?>
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <p>Nombre</p>
            <p> <?php echo htmlspecialchars($row['name']); ?></p>
            <p>Carta</p>
            <p> <?php echo htmlspecialchars($row['letter']); ?></p>
            <p>Regalos</p>
            <p>
                <?php echo htmlspecialchars($row['gift1']); ?> <br>
                <?php echo htmlspecialchars($row['gift2']); ?> <br>
                <?php echo htmlspecialchars($row['gift3']); ?> <br>
            </p>
        <?php endwhile;?>
    <?php endif;?>
</div>
</body>
</html>


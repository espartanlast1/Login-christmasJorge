<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php'?>
    <title>Registration</title>
</head>
<body>
<div class="registration-page">
    <h1>Registrate</h1>
    <img src="images/holy-family-christmas-mary-joseph-and-baby-jesus-christ-png.png" alt="logo">
    <h2>JMJ</h2>
    <p>¿Ya tiene cuenta? <a href="index.php"><u>Iniciar sesión</u></a></p>
    <form class="registration-form">
        <input type="text" id="name" name="name" placeholder="Nombre" required><br>
        <input type="text" id="last-name" name="last-name" placeholder="Apellido" required><br>
        <input type="number" id="age" name="age" placeholder="Edad" required><br>
        <input type="text" id="address" name="address" placeholder="Dirección" required><br>
        <input type="password" id="password" name="password" placeholder="Contraseña" required><br>
        <input type="submit" value="Registrarse">
    </form>
</div>
</body>
</html>

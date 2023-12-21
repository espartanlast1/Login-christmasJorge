<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php'?>
    <title>index</title>
</head>
<body>
<div class="login-page">
    <h1>Bienvenido al sistema de los reyes magos</h1>
    <img src="images/holy-family-christmas-mary-joseph-and-baby-jesus-christ-png.png" alt="logo">
    <h2>JMJ</h2>
    <p>¿No tiene cuenta? <a href="register.php"><u>Registrate</u></a></p>
    <form class="login-in-form" action="index_logic.php" method="post">
        <input type="text" id="email" name="username" placeholder="Nombre de usuario"><br>
        <input type="password" id="password" name="password" placeholder="Contraseña"><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rituals | Inicio de Sesión</title>
    <link href="https://www.rituals.com/on/demandware.static/Sites-IBE-Site/-/default/dw48c20db6/images/favicon.ico" rel="shortcut icon">
    <script src="js/login.js"></script>
    <meta name="description" content="Descubre Rituals. Cosmética Cuerpo y Hogar diseñados para ayudarte a relajarte en casa. ✓Tienda web oficial ✓Envíos gratis a partir de 30 € ✓Tu compra tiene regalo">
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
<?php
include "includes/header.php";
include "includes/nav.php";
?>
<div class="login">
<section class="loginForm">
<h1>Ingresa a Rituals</h1>
<form class="login" name="login">
    <ul>
        <li>Usuario:</li>
        <li><input name="user" type="text" id="username" value="" size="20" /></li>
        <br>
        <li>Contraseña:</li>
        <li><input name="password" type="password" id="password" value="" size="20" /> <button class="eyePassword" id="hidePassword" type="button" onclick="mostrarContrasena()" style="display: none;"><i class="fas fa-eye-slash"></i></button></li>
        <button class="eyePassword" id="showPassword" type="button" onclick="mostrarContrasena()"><i class="fas fa-eye"></i></button>
        <br>
        <input value="Entrar" target="_parent" onclick="loginFunc()" type="button" class="boton"/>
        <br>
        <h2>Aun no haces parte del programa de fidelización de Rituals <br><a href="#">Registrate aquí</a></h2>
    </ul>
</form>
</section>
<section class="loginImage">
    <img src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsSharedContent/default/dwa925a889/Content-pages/2019/My-Rituals/CRM_Welcomepage_01_BannersizeS_Desktop.jpg" alt="Unete a nuestro club de miembros" title="Bievenido a My Rituals" id="welcomeImg">
    <h1>Te damos la bienvenida a My Rituals</h1>
    <p><h2>EMPIEZA A DISFRUTAR DE MOMENTOS CON SIGNIFICADO</h2>
        Descubre el mundo My Rituals y déjanos sorprenderte. ¡Te está esperando tu regalo de bienvenida!
        Suscríbete a My Rituals y consigue tu regalo de bienvenida con tu compra online o en tu tienda Rituals favorita.
    </p>
</section>
</div>
<?php
include "includes/footer.php";
?>
</body>
</html>
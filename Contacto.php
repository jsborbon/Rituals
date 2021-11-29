<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rituals | Contacto</title>
    <link href="https://www.rituals.com/on/demandware.static/Sites-IBE-Site/-/default/dw48c20db6/images/favicon.ico" rel="shortcut icon">
    <meta name="description" content="Descubre Rituals. Cosmética Cuerpo y Hogar diseñados para ayudarte a relajarte en casa. ✓Tienda web oficial ✓Envíos gratis a partir de 30 € ✓Tu compra tiene regalo">
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
    <?php
        include "includes/header.php";
        include "includes/nav.php";
    ?>

<div class="content">
<section class="contactUs">
    <h1>Contactenos</h1>
    <form>
    <ul>
    <li><label>Nombre: </label>
    <input type="text" title="name" id="name"></li>
    
    <li><label>Email: </label>
        <input type="email" title="emailAddress" id="emailAddress"></li>
        
    <li><label>Telefono: </label>
        <input type="tel" title="telephone" id="telephone"></li>
        
    <li><label>Dirección: </label>
        <input type="text" title="address" id="address"></li>
        
    <li><label>Tipo de comunicación</label>
    <select name="communicationType">
        <option value="Consult">Consulta</option>
        <option value="Suggestions">Sugerencia</option>
        <option value="Complain">Queja</option>
    </select></li>
    <li><label>Sexo:</label>
        Hombre<input type="radio" name="sexo" value="el">
        Mujer<input type="radio" name="sexo" value="ella">
        No Binario<input type="radio" name="sexo" value="elle">
    </li>
    <li><label>Comentarios: </label><br><textarea type="text" cols="50" rows="10" name="comments"></textarea></li>
    <li><label>Acepta la política de tratamiento de datos</label>
        <input type="checkbox" name="datos" value="si">
    </li><br>
    <input type="submit" value="Enviar">
       </ul> 
    </form>
</section>
<aside class="mapa">
    <h1>Nuestras tiendas</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d194420.54138893916!2d-3.8082657922298386!3d40.412816940278496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srituals%20cosmetic!5e0!3m2!1ses-419!2ses!4v1637715447005!5m2!1ses-419!2ses" allowfullscreen="" loading="lazy"></iframe>
</aside>
    </div>

<?php
    include "includes/footer.php";
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rituals | Home</title>
    <link href="https://www.rituals.com/on/demandware.static/Sites-IBE-Site/-/default/dw48c20db6/images/favicon.ico" rel="shortcut icon">
    <meta name="description" content="Descubre Rituals. Cosmética Cuerpo y Hogar diseñados para ayudarte a relajarte en casa.">
    <script src="https://kit.fontawesome.com/51642f1d36.js" crossorigin="anonymous"></script>
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>
  <?php
        include "includes/header.php";
        include "includes/nav.php";
    ?>
  <section>
    <!--Slides-->
    <div class="slider-container">
  <div class="slider">
    <div class="slides">
      <div id="slides__1" class="slide">
      <span class="slideMedia" id=slide1>
      <div class="textSlider" >
        <img src="./imgs/rituals-logo.png" alt="Logo Rituals" title="Logo Rituals">
        <h1>El Arte De Regalar</h1>
        <p>Compra cofres de regalo de lujo para estas fiestas. Diseñados para celebrar con tus seres queridos.</p>               
        <button onclick="location.href='./Regalos.php'" type="button">Comprar ahora</button>
       </div>
       <div class=videoFrame>  
        <iframe src="https://player.vimeo.com/video/639535903?h=8d59a5224a&loop=1&background=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></span>
        </div>
        <a class="beforeIcon" href="#slides__4" title="Next"><span class="fas fa-chevron-circle-left"></a>
        <a class="nextIcon" href="#slides__2" title="Next"><span class="fas fa-chevron-circle-right"></a>
      </div>
      <div id="slides__2" class="slide">
      <span class="slideMedia" id="slide2">
      <div class="textSlider" >
        <img src="./imgs/rituals-logo.png" alt="Logo Rituals" title="Logo Rituals">
        <h1>SERENDIPITY</h1>
        <p>LA BELLEZA DE LA ALEGRÍA INESPERADA</p>               
        <button onclick="location.href='Colecciones/Ritual-Serendipity.php'" type="button">Comprar la colección</button>
       </div>
       <div class=videoFrame>  
        <iframe src="https://player.vimeo.com/video/597221777?h=83b4f4ebe6&loop=1&background=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></span>
        </div>
        <a class="beforeIcon" href="#slides__1" title="Prev"><span class="fas fa-chevron-circle-left"></a>
        <a class="nextIcon" href="#slides__3" title="Next"><span class="fas fa-chevron-circle-right"></a>
      </div>
      <div id="slides__3" class="slide">
      <span class="slideMedia"  id="slide3">
      <div class="textSlider">
        <img src="./imgs/rituals-logo.png" alt="Logo Rituals" title="Logo Rituals">
        <h1>THE RITUAL OF ADVENT CALENDAR</h1>
        <p>EL REGALO MÁS ESPERADO DEL AÑO<br>24 maravillosas sorpresas<br>24 momentos de felicidad</p>               
        <button onclick="location.href='./Novedades/calendario-de-adviento.php'" type="button">Comprar calendario</button>
       </div> 
       <div class=videoFrame>  
        <iframe src="https://player.vimeo.com/video/586319795?h=e00bd4e4e8&loop=1&background=1" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></span>
        </div>
        <a class="beforeIcon" href="#slides__2" title="Prev"><span class="fas fa-chevron-circle-left"></a>
        <a class="nextIcon" href="#slides__4" title="Next"><span class="fas fa-chevron-circle-right"></a>
      </div>
      <div id="slides__4" class="slide">
      <span class="slideMedia"  id="slide4">
      <div class="textSlider" >
        <img src="./imgs/rituals-logo.png" alt="Logo Rituals" title="Logo Rituals">
        <h1>THE RITUAL OF HAMMAM</h1>
        <p>UNA CEREMONIA QUE PURIFICA EL CUERPO Y EL ESPÍRITU.</p>               
        <button onclick="location.href='./Colecciones/Ritual-Hammam.php'" type="button">Comprar ahora</button>
       </div>
        <a class="beforeIcon" href="#slides__3" title="Prev"><span class="fas fa-chevron-circle-left"></a>
        <a class="nextIcon" href="#slides__1" title="Prev"><span class="fas fa-chevron-circle-right"></a>
      </div>
    </div>
    <div class="slider__nav">
      <a  href="#slides__1"><span class="fas fa-circle"></a>
      <a  href="#slides__2"><span class="fas fa-circle"></a>
      <a  href="#slides__3"><span class="fas fa-circle"></a>
      <a  href="#slides__4"><span class="fas fa-circle"></a>
    </div>
  </div>
</div>
<div class="partesLevantes">

    <a href="Regalos.php">
    <article>
        <h3>EL REGALO PERFECTO</h3>
        <h1>Nuevo Look: Cofres Regalo</h1>
        <p>Repletos de productos maravillosos, cada cofre tiene un nuevo diseño de inspiración ikat y sumi-e.</p>
        <img src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsSharedContent/default/dwc3cb8f82/Homepage/2021/Holidayseason/HolidaySeason_Homepage-02A%20FIGHT-GROW-BUILD.jpg" alt="El regalo perfecto" title="El regalo perfecto">
    </article>
        </a>
    <a href="Colecciones/Ritual-Serendipity.php">
    <article>
        <h3>EDICIÓN LIMITADA DE INVIERNO</h3>
        <h1>Serendipity</h1>
        <p>Disfruta de la emoción de descubrir una nueva colección.</p>
        <img src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsSharedContent/default/dwc3cb8f82/Homepage/2021/Holidayseason/HolidaySeason_Homepage-02B%20Serendipity.jpg" alt="Edición limitada de invierno" title="Edición limitada de invierno">
    </article>
    </a>
</div>
  </section>
  <?php
        include "includes/footer.php";
    ?>
</body>
</html>

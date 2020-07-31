<!DOCTYPE html>
<html lang="es">
<head>

<title>Cajitas de Talentos</title>
<meta charset="UTF-8">
<link href="css/base.css" rel="stylesheet">

<meta name="viewport" content="Width=device-width;initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<link href="css/big.css" rel="stylesheet" media="screen and (min-width:1020px)">
<link href="css/medium.css" rel="stylesheet" media="screen and (min-width:841px) and (max-width:1019px)">
<link href="css/mini.css" rel="stylesheet" media="screen and (max-width:840px)">
<link href="img/logo.webp" rel="shortcut icon" type="image/png" >
<link href="css/fonts.css" rel="stylesheet">


</head>
<body>


<header>

<!-- Botón menu en dispositivos mini -->
<div class="btn-menu-class" id="btn-menu-class">
    <a href="#" class="btn-menu"><span class="icon-menu"></span>Menú</a>
</div>

<!-- Menu -->
<div class="menu-class" id="menu-class">
    <ul>
        <li><a href="#"><span class="icon-accessibility"></span>¿Qué es esto?</a></li>
        <li><a href="#"><span class="icon-gift"></span>¿Qué ofrecemos?</a></li>
        <li id="submenu">
            <a href="#"><span class="icon-images"></span>Experiencias<span class=" flecha icon-circle-down"></span></a>
            <ul class="children" id="children">
        <li><a href="#">Creativas<span class="icon-star-full"></span></a></li>
        <li><a href="#">Estudiosas<span class="icon-star-full"></span></a></li>
        <li><a href="#">Deportistas<span class="icon-star-full"></span></a></li>
            </ul>
        </li>
        <li><a href="#"><span class="icon-phone"></span>Contáctanos</a></li>
    </ul>
</div>

<!-- Titulo -->
<div class="titulo-class"><img src="img/titulo.png"></div>


</header>


<main>

<!-- Enlace para videos de experiencias anteriores -->
<section class="section1">

<div class="video-class">
<video src="video/video.mp4" muted autoplay loop></video>
</div>


<div class="textovideo-class">
<h1>Enfrenta los retos y vence</h1>
<a href="#" target="_blank" class="enlace-video">Explora</a>
</div>

</section>

<!-- Bienvenido -->

<section class="section2">

<h1>Bienvenidos</h1>
<p>Ahora tendrás la oportunidad de descubrir tus talentos y divertirte. 
Con las Cajitas de Talentos pueden conseguir inscribirte en actividades que complementan tu día</p>

</section>

<!-- Vista de las Cajas -->

<section class="section3">

    <div class="div-titulo"><h1>Las Cajitas de Talentos</h1></div>
    
    <div class="div-cajas" id="capa-muestra">
        <div class="detalles-mini" id="detalles-mini">Mostrar detalles</div>  
            <div class="caja" >
                <img src="img/caja.webp">
                <div class="capa">
                    <p><span class="icon-yelp"></span>contenido:------<br><span class="icon-yelp"></span>precio: S/.150</p></div>
                    <a href="#" class="close icon-cart" ></a>
                </div>
            <div class="caja"><img src="img/caja.webp"><div class="capa"><p><span class="icon-yelp"></span>contenido:------<br><span class="icon-yelp"></span>precio: S/.150</p></div><a href="#" class="close icon-cart"></a></div>
            <div class="caja"><img src="img/caja.webp"><div class="capa"><p><span class="icon-yelp"></span>contenido:------<br><span class="icon-yelp"></span>precio: S.150</p></div><a href="#" class="close icon-cart"></a></div>
    </div>

    <div class="div-contacto">
<p>Mira detalles de cada uno</p>

    </div>

</section>

<!-- Caja creativa -->
<section class="section4-6" >
<div class="img-fondo">
    <img src="img/creativa.jpg">
</div>

<div class="producto">
<h1>Cajita Creativa</h1>
<div class="muestra-imagen" id="section4">Muestra imagen</div>
<fieldset>
    <Legend>Descripción</Legend>
<p>Con esta cajita desarrollaras tus habilidades artisicas. 
Aprenderás de fotografía y pintura de manera práctica y conocerás parte de la historia del Arte.
Nuestros educadores serán Paolo,Jelly y Zuni.</p>

</fieldset>
<ul>
    <h2>Incluye</h2>
<li><img src="img/icono-clase/foto.svg" width="50px">2 clases de Fotografía</li>
<li><img src="img/icono-clase/pintura.svg" width="50px">2 clases de Pintura</li>
<li><img src="img/icono-clase/mona-lisa.svg" width="50px">2 clases de Historia del Arte</li>

</ul>

<div class="precio-creativa"> S/.200</div>

</div>


<div class="img-producto">
<img src="img/caja.webp">

</div>

</section>

<br>
<!-- Caja estudiosa -->
<section class="section5" >
<div class="img-fondo">
    <img src="img/estudiosa.jpg">
</div>

<div class="producto">
<h1>Cajita Estudiosa</h1>
<div class="muestra-imagen" id="section5">Muestra imagen</div>
<fieldset>
    <Legend>Descripción</Legend>
<p>Con esta cajita desarrollaras tus habilidades artisicas. 
Aprenderás de fotografía y pintura de manera práctica y conocerás parte de la historia del Arte.
Nuestros educadores serán Paolo,Jelly y Zuni.</p>

</fieldset>
<ul>
    <h2>Incluye</h2>
<li><img src="img/icono-clase/mate.svg" width="50px">2 asesorias de Matemáticas</li>
<li><img src="img/icono-clase/letras.svg" width="50px">2 asesorias de Letras</li>
<li><img src="img/icono-clase/ingles.svg" width="50px">2 asesorias de Ingles</li>

</ul>

<div class="precio-creativa"> S/.200</div>

</div>


<div class="img-producto">
<img src="img/caja.webp">

</div>

</section>



<br>




<!-- Caja deportista -->
<section class="section4-6" >
<div class="img-fondo">
    <img src="img/deportista.jpg">
</div>

<div class="producto">
<h1>Cajita Deportista</h1>
<div class="muestra-imagen" id="section6">Muestra imagen</div>
<fieldset>
    <Legend>Descripción</Legend>
<p>Con esta cajita desarrollaras tus habilidades artisicas. 
Aprenderás de fotografía y pintura de manera práctica y conocerás parte de la historia del Arte.
Nuestros educadores serán Paolo,Jelly y Zuni.</p>

</fieldset>
<ul>
    <h2>Incluye</h2>
<li><img src="img/icono-clase/taekwondo.svg" width="50px">3 clases de Taekwondo</li>
<li><img src="img/icono-clase/ciclista.svg" width="50px">3 clases de Manejo de bicicleta</li>
<li><img src="img/icono-clase/yoga.svg" width="50px">3 clases de Yoga</li>

</ul>

<div class="precio-creativa"> S/.300</div>

</div>


<div class="img-producto">
<img src="img/caja.webp">

</div>

</section>









<!-- social bar -->
<section class="section7">

<a href="#" class="icon icon-facebook" target="_blank"></a>
<a href="#" class="icon icon-twitter" target="_blank"></a>
<a href="#" class="icon icon-whatsapp" target="_blank"></a>
<a href="#" class="icon icon-instagram" target="_blank"></a>
<a href="#" class="icon icon-youtube" target="_blank"></a>
</section>


</main>





<footer>

<div class="foot1">
    <h1>Nuestra Empresa</h1>
    <ul>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="#">Nuestro equipo</a></li>
        <li><a href="#">Terminos de uso</a></li>
        <li><a href="#">Politica de Privacidad</a></li>
    </ul></div>
<div class="foot2">
    <h1>Productos</h1>
    <ul>
        <li><a href="#">Clases Individuales</a></li>
        <li><a href="#">Métodos de pago</a></li>
        <li><a href="#">Preguntas Frecuentes</a></li>
        <br>
        
    </ul>

</div>
<div class="foot3">
    <img src="img/marca.png" ></div>

</footer>

<script src="js/main.js"></script>
</body>

</html>
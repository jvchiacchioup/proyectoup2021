<?php
session_start();

?>
<?php

include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- CSS---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>SurrEalIsmO</title>
</head>
<body>
  <header class="container-fluid header"> 
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="index.php">
        <img src="./img/logo.png" width="90%" alt="logo">
      </a> 
      <div class="btn-group">
        <button type="button" class="btn btn-secondary menus"><a class="menus link" href="historia.php">Historia</a></button>
      </div>

      <div class="btn-group">
      <button type="button" class="btn btn-terciary menus"><a class="menus link" href="artistas.php">Artistas</a></button>
      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split menus" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
        <span class="visually-hidden"></span>
      </button>
      <ul class="dropdown-menu menus" aria-labelledby="dropdownMenuReference">
        <li><a class="dropdown-item" href="miro.php">Joan Miró</a></li>
        <li><a class="dropdown-item" href="ernest.php">Max Ernest</a></li>
        <li><a class="dropdown-item" href="magritte.php">René Magritte</a></li>
        <li><a class="dropdown-item" href="dali.php">Salvador Dalí</a></li>
      </ul>
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-secondary menus"><a class="menus link" href="galeria.php">Galeria</a></button>
  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-secondary menus"><a class="menus link" href="contacto.php">Contacto</a></button>
  </div>
      <div class="btn-group">
        <button type="button" class="btn btn-secondary menus"><a class="menus link" href="ingresa.php">Ingresa</a></button>
        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split menus" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
          <span class="visually-hidden"></span>
        </button>
        <ul class="dropdown-menu menus" aria-labelledby="dropdownMenuReference">
          <li><a class="dropdown-item" href="registrate.php">Registrate</a></li>
        </ul>
    </div>
    <div class="container-fluid buscar">
    <form class="d-flex" action="resultados_buscar.php" method="post"><label><input type="search" class="form-control me-2" name="buscar" placeholder="..." /><button type="submit" name="enviar" value=""  class="btn btn-outline-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></label></button>
      </form>
    </div>
  </nav>
 </header>
 
<main class="wrapper">

<div class="container-fluid ">
  <h2 class="animado"> Historia</h2>

<div class="col-md-12 historia">
  El surrealismo se desarrolló a partir de las actividades de Dada
  durante la Primera Guerra Mundial <br> y el centro más importante del movimiento fue París.
  <br>Desde la década de 1920 en adelante, el movimiento se extendió por todo el mundo,<br>
   afectando eventualmente a las artes visuales, la literatura, el cine y la música de muchos países e idiomas, así como a la práctica y el pensamiento político, la filosofía y la teoría social.
     
</div>
</div>

<div class="container-fluid ">
  <h3> Ramas surrealistas</h3>
 
    <div class="row">
      <div class="col-md-4 ramas"> Obras Plásticas </div>
      <div class="col-md-4 offset-md-4 ramas">Obras Literarias</div>
    </div>
     <div class="row">
    <div class="col-md-4 pyl">
      Existen dos agrupaciones: los <a class="sabs linked">surrealistas abstractos</a>
       que se decantan por la aplicación del automatismo puro, como André Masson o Joan Miró, e inventan universos figurativos propios; y los <a class="sfig linked"> surrealistas figurativos </a> interesados por la vía onírica, entre ellos René Magritte, Paul Delvaux, o Salvador Dalí, que se sirven de un realismo minucioso y de medios técnicos tradicionales, pero que se apartan de la pintura tradicional por la inusitada asociación de objetos
y las monstruosas deformaciones.
    </div>
    <div class="col-md-4 offset-md-4 pyl">El surrealismo tuvo como antecedente la patafísica de Alfred Jarry, y el movimiento dadaísta fundado en Zúrich en 1916 por T. Tzara, H. Ball y H. Arp. sucedió una actitud más metódica de investigación del  <a class="sin linked">inconsciente</a> emprendida por Breton, Paul Éluard,Robert Desnos, Max Ernst, etc. La primera obra de esta tendencia que cabe calificar de primera obra literaria surrealista, fue Los campos magnéticos (1921),escrita conjuntamente por Breton y Soupault.
    </div>
  </div>
</div>
<div class="container-fluid historiaflex">
<h2 class="animado"> Filosofía</h2>

<p class="historia"> Se propone una teoría de lo inconsciente y de lo irracional como medio para cambiar la vida, la sociedad, el arte y el hombre por medio de la revolución. No es un movimiento con unidad de estilo, sino una serie de investigaciones de artistas individuales, cada uno con un estilo propio.</p>
<img class="inconsciente" src="./img/inconsciente.png" alt="">
<p class="historia">Acceder al subconsciente significaba mostrar pensamientos y deseos indecorosos, plasmar imágenes chocantes para exponer la depravación del ser humano, disfrazado de civilizado por la sociedad burguesa.</p>




</main>
<!----FOOTER------->

<footer >

  <div class="allfoot">
    <p class="foot">
     &COPY; Página web realizada por Julieta Villanueva Chiacchio.   </p> 
     <p class="footd">2021. </p> 
  </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
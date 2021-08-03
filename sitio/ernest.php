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

 <div class="container-fluid art ">
 <img  class="inconsciente fto" src="./img/ernst.jpg" alt="Max Ernest">
 <div class="row">
 <h2>Max Ernest</h2> </div>
<div class="col-md-12 historia">
 <p> Llegó a ser uno de los
  principales exponentes
  del Surrealismo
  utilizando la técnica del
  frotagge.<br> Consiste en
  frotar una mina de
  plomo o lápiz sobre un
  papel  que se apoya en
  un objeto<br> y se deja así
  su huella en dicho
  papel, con todas sus
  irregularidades.</p>
</div>
</div>


<div class="container">
  <div class="col-md-12">
    <h4>Oedipus Rex (1922)</h4>
  </div>
  <div class="row">
    <div class="col art">    
     <img src="./img/odiepusrex.jpg" alt="" >
    </div>
    <div class="col">
    <p> En esta pintura,
      dedos masculinos se pueden
      ver, perforado por un dispositivo mecánico que surge
      a través de una plaza abierta <br> una estructura de
      ladrillo cerrado y balance por encima de las cabezas
      de dos atrapados, criaturas de pájaro.</p>
    </div>
  </div>


<div class="container">
  <div class="col-md-12">
    <h4>Of
      the men shall know nothing (1923)</h4>
  </div>
  <div class="row">
    <div class="col art">    
     <img src="./img/mennothing.jpg" alt="" >
    </div>
    <div class="col">
    <p>  El artista usó un montón de entrañas para
      sustituir el cubo de Materia Primordial. <br>En
      otros lugares, también utilizó motivos
      alquímicos; por ejemplo, en la imagen de la
      conexión sexual del Sol y la Luna.</p>
    </div>
  </div>

  <div class="container">
    <div class="col-md-12">
      <h4>The Nymph Echo (1936)</h4>
    </div>
    <div class="row">
      <div class="col art">    
       <img src="./img/nymphecho.jpg" alt="" >
      </div>
      <div class="col">
      <p>La diminuta figura femenina desnuda
        en la parte superior derecha de esta
        composición <br> a menudo se identifica como
        Echo, una ninfa de la montaña de la
        mitología griega.
      </p>
      </div>
    </div>
  

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
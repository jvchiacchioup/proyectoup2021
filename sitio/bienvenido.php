<?php session_start();?>

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

<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo  "<p>Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];

echo "<div id='carouselExampleCaptions' class='carousel slide' data-bs-ride='carousel'> <div class='carousel-indicators'>
  <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
  <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide 2'></button>
  <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='2' aria-label='Slide 3'></button>
</div>
<div class='carousel-inner'>
  <div class='carousel-item active'>
	<img src='./img/maxito.jpg' class='d-block w-100' alt='...'>
	<div class='carousel-caption d-none d-md-block'>
	  <a class='surreal' >Bienvenido</a>
	  <p class='surreal'></p>
	</div>
  </div>
  <div class='carousel-item'>
	<img src='./img/magri.jpg' class='d-block w-100' alt='...'>
	<div class='carousel-caption d-none d-md-block'>
	  <a class='surreal' >Al</a>
	  <p class='car'></p>
	</div>
  </div>
  <div class='carousel-item'>
	<img src='./img/salvador.jpg' class='d-block w-100' alt='...'>
	<div class='carousel-caption d-none d-md-block'>
	  <a class='surreal' >SurReAlismO</a>
	  <p class='car'></p>
	</div>
  </div>
</div>
<button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='prev'>
  <span class='carousel-control-prev-icon' aria-hidden='true'></span>
  <span class='visually-hidden'></span>
</button>
<button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='next'>
  <span class='carousel-control-next-icon' aria-hidden='true'></span>
  <span class='visually-hidden'></span>
</button>
</div>";

echo "<a  class='botph' href='salirlog.php'>Cerrar sesion</a>";

	
}else{
	echo "<p>Solo usuarios registrados en el mundo SurrEaL...</p>";
	include("ingresa.php");
}
?>


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
<?php
session_start();
session_destroy();

header("Location:ingresa.php");
?>
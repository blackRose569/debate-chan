<?php

  function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root','','taller_multimedios');

    if(!$db){
      echo "error de conexion";
      exit;
    }
    return $db;
  }

 ?>

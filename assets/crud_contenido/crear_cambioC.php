<?php 
require '../conexion.php';

$db= conectarDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fuente = $_POST['fuente'];
    $id = rand();
    date_default_timezone_set('America/Santiago'); 
    $DateAndTime = date('m-d-Y h:i:s a', time()); 

    
    $insert = "INSERT INTO cambio_climatico (id, titulo_tema, descripcion, fuente,fecha) values('', '$titulo', '$descripcion','$fuente','$DateAndTime') ";

    $resultado = mysqli_query($db,$insert);

    if($resultado){
        echo "Insertado correctamente";
        sleep(2);
        header('Location: /proyecto%20evaluacion%203/cambioClimatico.php');
       
        /*  if($tablaDestino === 'matematicas'){
            header('Location: /proyecto%20evaluacion%202/adminMatematicas.php');
        }else{
            header('Location: /proyecto%20evaluacion%202/adminCuentos.php');
        } */
        
    }
    else {
        echo "Error".$insert;
    
    }

}

?>
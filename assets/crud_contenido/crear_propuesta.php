<?php 
require '../conexion.php';

$db= conectarDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $titulo = $_POST['titulo'];
    

    //$insert = "INSERT INTO $tablaDestino (id, titulo, link, descripcion, autor) values('', '$titulo', '$nuevoContenido', '$descripcion', '$autor') ";
    $insert = "INSERT INTO propuestas (id, titulo) values('', '$titulo') ";

    $resultado = mysqli_query($db,$insert);

    if($resultado){
        echo "Insertado correctamente";
        sleep(2);
        header('Location: http://localhost/proyecto%20evaluacion%203/propuesta.php');
       
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
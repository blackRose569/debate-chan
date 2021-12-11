<?php 
//require '../conexion.php';
require '../../home.php';

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /home.php');
}



$db= conectarDB();



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $titulo = $_POST['titulo'];
    $nuevoContenido = $_POST['iframe'];
    

    $update = "UPDATE contenido SET titulo = '${titulo}', link = '${nuevoContenido}' WHERE id = ${id}";

    $resultado = mysqli_query($db,$update);

    if($resultado){
        echo "Registro actualizado correctamente";
        echo"".$update;
    }
    else {
        echo "Error".$update;
    
    }

}

?>
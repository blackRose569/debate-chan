$(document).ready(function () {
    var validar_titulo = false;
    var validar_descripcion = false;
    var validar_fuente = false;

    console.log("log de jquery");

    $("#titulo").on("input", function (e) {

        
        if (!null) {
            
             validar_titulo = true;
             console.log('usuario:' + validar_titulo);
            
        }
        
    });


    $("#descripcion").on("input", function (e) {

        if (!null) {
            validar_descripcion = true;
            console.log("contraseña: " + validar_descripcion);
        }
    });

    $("#fuente").on("input", function (e) {

        if (!null) {
            validar_fuente = true;
            console.log("contraseña: " + validar_fuente);
        }
    });


    



    $(document).on('click', '#boton', function (e) {


        if (validar_titulo == true && validar_descripcion == true && validar_fuente == true) {
            alert("Campos completados correctamente, actualizando...");
        }
        else {
            e.preventDefault();
            alert("Datos no válidos o incompletos.");
        }



    });




});

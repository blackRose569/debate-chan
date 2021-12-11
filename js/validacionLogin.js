$(document).ready(function () {
    var validar_usuario = false;
    var validar_contraseña = false;
   


    $("#user").on("input", function (e) {

        
        if (!null) {
            
             validar_usuario = true;
             console.log('usuario:' + validar_usuario);
            
        }
        
    });

    $("#pass").on("input", function (e) {

        if (!null) {
            validar_contraseña = true;
            console.log("contraseña: " + validar_contraseña);
        }
    });

   

    $(document).on('click', '#btnLogin', function (e) {


        if (validar_usuario== true && validar_contraseña == true) {
            alert("Campos completados correctamente, ingresando...");
        }
        else {
            e.preventDefault();
            alert("Datos no válidos o incompletos.");
        }
    });

});
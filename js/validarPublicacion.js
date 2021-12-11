
let form = document.getElementById("formulario");
let titulo = document.getElementById("titulo");
let contenido = document.getElementById("descripcion");
let btnEnviar = document.getElementsByClassName("group")


console.log("este es un console log");
form.addEventListener('click',validar);
var improperios = ["ctm","puta", "csm", "maricon","qlo","mierda","perra","maraca","conchetumare","conchesumadre","bastardo","bastarda"]

function validar(e) {
        for(let i = 0; i < 12; i++){

        if(titulo.value == improperios[i] || contenido.value == improperios[i]){
            alert("publicacion rechazada por lenguaje ofensivo")
            e.preventDefault();
            
        }

    }
}



   
<?php 

require 'assets/conexion.php';

$db= conectarDB();

$query = "SELECT * FROM energia_renovable ORDER BY fecha DESC";

$resultadoConsulta = mysqli_query($db,$query);


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Energias renovables</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- <script src="js/validarPublicacion.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="js/validacionUpdate.js" ></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="cambioClimatico.php">Cambio climatico</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="energiasRenovables.php">Energias renovables</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="propuesta.php">Proponer tema</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="estadisticas.php">Estadisticas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/energia.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Energias renovables</h1>
                            <span class="subheading">debates sobre las energias renovables</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary creartema" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Crear nuevo hilo del tema
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nuevo hilo: Energias renovables</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form id="formulario" data-sb-form-api-token="API_TOKEN" method="post" action="assets/crud_contenido/crear_energiaR.php">
                                <div class="form-floating">
                                    <input class="form-control" id="titulo" name="titulo" type="text" requiered placeholder="ingrese el título..." data-sb-validations="required" requiered />
                                    <label for="name">Título</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">El título es requerido.</div>
                                </div>
                                
                                <div class="form-floating">
                                    <!-- <input class="form-control" id="descripcion" name="descripcion" type="text" placeholder="aquí la descripcion..." data-sb-validations="required" requiered /> -->
                                    <textarea name="descripcion" id="descripcion" placeholder="aquí la descripcion..." cols="30" rows="10"></textarea>
                                    <label >Descripción</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Campo requerido.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">no valido.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="fuente" name="fuente" type="text" requiered placeholder="ingrese fuente de informacion..." data-sb-validations="required" />
                                    <label for="name">Fuente de información</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">El título es requerido.</div>
                                </div>
                                <div class="group"> <input type="submit" name="boton" id="boton" class="btn btn-success" value="Guardar publicacion"> </div>

                                <script>
                                    let form = document.getElementById("formulario");
                                    let titulo = document.getElementById("titulo");
                                    let contenido = document.getElementById("descripcion");
                                    //let btnEnviar = document.getElementsById("boton");


                                    
                                    
                                    var improperios = ["ctm","puta", "csm", "maricon","qlo","mierda","bastardo","bastarda"]
                                    //var improperios = [`{/ctm/gi}`,`{/puta/gi}`]
                                    function validar(e) {
                                             
                                        /*if( titulo.value == /ctm/gi|| contenido.value == /ctm/gi){
                                                console.log("entro en el if");
                                                alert("publicacion rechazada por lenguaje ofensivo")
                                                e.preventDefault();
                                                
                                                
                                            }*/
                                        
                                        for(let i = 0; i < improperios.length; i++){
                                            
                                            if(improperios[i] == titulo.value  || improperios[i] == contenido.value){
                                                console.log("entro en el if");
                                                alert("publicacion rechazada por lenguaje ofensivo")
                                                e.preventDefault();
                                                
                                                
                                            }

                                        }
                                    }
                                    form.addEventListener('submit',validar);

                                </script>
                            
                            
                            </form>
                                

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            </div>
                            </div>
                        </div>
                    </div>

                     <div>
                            <table>
                                <thead class="card-header"  >
                                     
                                    <tr>
                                        
                                        <th>Título: </th>
                                        <th>Descripcion: </th>
                                        <th>Fuente: </th>
                                        <th>Fecha: </th>
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    
                                    <?php while($contenido = mysqli_fetch_assoc($resultadoConsulta)): ?>
                                    <tr >
                                        <td class="card-body" ><?php echo $contenido['titulo'] ?></td>
                                        <td><?php echo $contenido['descripcion'] ?></td>
                                        <td><?php echo $contenido['fuente'] ?></td>
                                        <td><?php echo $contenido['fecha'] ?></td>
                                        <td>
                                            <button class="btn btn-warning"><a target="_blank" href="https://youtu.be/dQw4w9WgXcQ">Ver hilo</a></button>
                                            
                                            
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div> 

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div> -->
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; debateChan</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>
</html>
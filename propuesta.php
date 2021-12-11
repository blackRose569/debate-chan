<?php 

require 'assets/conexion.php';

$db= conectarDB();

$query = "SELECT * FROM propuestas";

$resultadoConsulta = mysqli_query($db,$query);

//muestra mensaje
//$resultado = $_GET['resultado'];
//$id = $_GET['id'];

$propuesta1 = "SELECT titulo FROM `propuestas` WHERE id = 2";
$resultadoPropuesta = mysqli_query($db,$propuesta1);

$propuesta2 = "SELECT titulo FROM `propuestas` WHERE id = 1";
$resultadoPropuesta2 = mysqli_query($db,$propuesta2);
?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Añadir nuevo contenido</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
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
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="crear_contenido.php">Proponer tema</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="estadisticas.php">Estadisticas</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/debate-gz.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Propuesta de tema</h1>
                            <span class="subheading">Proponga un tema a debatir, el mas votado será el proximo tópico.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Ingrese su sugerencia de tema aquí</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post" action="assets/crud_contenido/crear_propuesta.php">
                                <div class="form-floating">
                                    <input class="form-control" id="titulo" name="titulo" type="text" requiered placeholder="ingrese el título..." data-sb-validations="required" />
                                    <label for="name">Título</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">El título es requerido.</div>
                                </div>
                                
                                <!-- <div class="form-floating">
                                    <input class="form-control" id="descripcion" name="descripcion" type="text" placeholder="aquí la descripcion..." data-sb-validations="required" requiered />
                                    <label >Descripción</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Campo requerido.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">no valido.</div>
                                </div> -->
            
                                
                              
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                <!-- Submit Button-->
                                <!-- <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Guardar nuevo contenido</button> -->
                                <div class="group"> <input type="submit" id="boton" class="btn btn-success" value="Guardar propuesta"> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div>
                                <table>
                                    <thead>
                                        <!-- <tr>
                                            <th><button class="btn btn-success"><a href="crear_contenido.php">Añadir</a></button></th>
                                        </tr> -->
                                        <tr>
                                            
                                            <th>Temas propuestos: </th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php while($contenido = mysqli_fetch_assoc($resultadoConsulta)): ?>
                                        <tr>
                                            
                                            <td><?php echo $contenido['titulo'] ?></td>
                                            
                                            <td>
                                                
                                                

                                                <button class="btn btn-warning" id = "btn-voto" >Me interesa:</span></button>
                                                
                                                
                                            </td>
                                            <script>
                                                    let votos = document.getElementById("votos");
                                                    let conteo = 0;
                                                    let boton = document.getElementById("btn-voto");

                                                    function sumar() {
                                                        updateDisplay(++conteo)
                                                        
                                                    }
                                                    function updateDisplay(val) {
                                                        document.getElementById("votos").innerHTML = val;
                                                    }
                                                    /*console.log("sldña "+conteo);

                                                    boton.addEventListener('click',sumar);*/


                                                    //votos.innerHTML=conteo
                                                </script>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                                <div style = "margin-top: 20px">
                                <?php while($contenido = mysqli_fetch_assoc($resultadoPropuesta)): ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $contenido['titulo'] ?></h5>
                                                    <p class="card-text">si desea que sea el siguiente tema a tratar deje su voto.</p>
                                                    <button class="btn btn-primary" onclick="sumar()" >Votos a favor: <span id="votos"></button>
                                                </div>
                                                <script>
                                                    let votos = document.getElementById("votos");
                                                    let conteo = 0;
                                                    let boton = document.getElementById("btn-voto");

                                                    function sumar() {
                                                        updateDisplay(++conteo)
                                                        
                                                    }
                                                    function updateDisplay(val) {
                                                        document.getElementById("votos").innerHTML = val;
                                                    }
                                                    /*console.log("sldña "+conteo);

                                                    boton.addEventListener('click',sumar);*/


                                                    //votos.innerHTML=conteo
                                                </script>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                                 </div>
                                 
                                 <div style = "margin-top: 20px">
                                <?php while($contenido2 = mysqli_fetch_assoc($resultadoPropuesta2)): ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $contenido2['titulo'] ?></h5>
                                                    <p class="card-text">si desea que sea el siguiente tema a tratar deje su voto.</p>
                                                    <button class="btn btn-primary" onclick="suma()" >Votos a favor: <span id="votos2"></button>
                                                </div>
                                                <script>
                                                    let votos = document.getElementById("votos2");
                                                    let conteo = 0;
                                                    let boton = document.getElementById("btn-voto");

                                                    function suma() {
                                                        updateDisplay(++conteo)
                                                        
                                                    }
                                                    function updateDisplay(val) {
                                                        document.getElementById("votos2").innerHTML = val;
                                                    }
                                                    
                                                </script>
                                            </div>
                                        </div>
                                <?php endwhile; ?>
                                 </div>         

                            </div>
                    </div>
                </div>
            </div>
        </main>
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
        <!-- <script src="js/conteoVotos.js" ></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

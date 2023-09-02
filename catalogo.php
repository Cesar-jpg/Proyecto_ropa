<?php 
    include 'conn.php';
    $prod = $con->prepare("SELECT * FROM producto");
    $prod ->execute();
    $res = $prod->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="nos_bg">
    <section>
        <div>
            <p class="text-center nav-anuncio">¿Quieres recibir el pedido a casa? ¡COTIZALO! <i
                    class="fa-brands fa-whatsapp" style="color: #36a74d;"></i></p>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <img class="icono-proyecto" src="../img/reciclar.png">
                    <a class="navbar-brand" href="#">Segunda vuelta</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">¡TELA-compro!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="info_donaciones.html">Iniciativa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Platica con nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Donaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-iniSesion" href="">Iniciar sesión</a>
                            </li>
                            <li class="nav-item nav-carrito">
                            </li>
                        </ul>

                    </div>
                    <!-- buscar la manera de que la sesion desaparezca del nav cuando sea menor a 915 px y aparezca en el menu desplazable g -->
                    <div class="index_sesion">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="login.html">Iniciar sesión</a>
                            </li>
                            <!-- <li class="nav-item">
                            </li> -->
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </section>
    <section class="container">
        
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($res as $row) {?>
                <div class="col">
                    <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row ['nombre'] ?></h5>
                        <p class="card-text">Precio: <?php echo $row ['precio'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            <?php }?>
            </div>

 
       
    </section>
    
    <footer class="footer">
        <div class="row ml-4 ">
            <div class="col-1"></div>
            <div class="col-2 footer_row">
                <ul>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li>Nuestra politica</li>
                    <li>Nuestro valores</li>
                </ul>
            </div>
            <div class="col-2 footer_row">
                <ul>
                    <li>Quiero participar</li>
                    <li>Quejas y sugerencias</li>
                    <li>FAQs</li>
                </ul>
            </div>
            <div class="col-6 position-relative footer_row">
                <div class="position-absolute top-0 end-0">
                    <p class="text-center">Siguenos</p>
                    <div class="text-center">
                        <i class="fa-brands fa-square-facebook fa-2xl"></i>
                        <i class="fa-brands fa-instagram fa-2xl"></i>
                    </div>
                </div>



            </div>

        </div>
    </footer>
</body>

</html>
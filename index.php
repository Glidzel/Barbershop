<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop</title>
    <script src="https://kit.fontawesome.com/97bed5bbe0.js" crossorigin="anonymous"></script>
    <script src="js/scrollreveal.js"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery.booklet.latest.css" type="text/css">
</head>
<body>
<div class="section1">
        <header class="encabezado">
            <a id="img" href="index.php"><img src="./assets/logotipo.png" alt="..."></a>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#locales" id="active">INICIO</a></li>
                        <li><a href="./servicios.php">SERVICIOS</a></li>
                        <li><a href="./somos.php">NOSOTROS</a></li>
                        <li><a href="./contactanos.php">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <h1 id="active">BRINDAMOS UN SERVICIO</h1>
            <h1>DE PRIMER NIVEL</h1>
            <button onclick="location.href = 'registrarCita.php';">REGISTRAR CITA</button>
        </div>
    </div>
    <main>
        <section class="historia">
            <div class="HContainer">
                <div>
                    <img src="./assets/imgHisotira.png" alt="">
                </div>
                <div class="Htext">
                    <h2>THE <span id="active">BARBER <br> COMPANY</span> </h2>
                    <p>Fue creada en diciembre del 2015 por un joven emprendedor de tan solo 24 años, Samuel, junto a un entregado equipo de barberos. El estilo clásico de inspiración retro e influencia británica junto a la profesionalidad, por encima de cualquier otra cosa, de sus empleados, te harán entregarte sin remedio a la experiencia de ser asesorado y cuidado. Bajo el concepto contemporáneo de barberia, el equipo de Samuel’s Barber Shop, ejerce de referente no sólo aportándote una imagen cuidada como asesores sino como oyentes de tus confidencias y cómplices de tu propia vida.

                        Su premisa es la de transmitir a sus clientes la pasión que sienten por su trabajo. Perpetuar la historia de las barberias en cada corte y la esencia del cuidado al cliente que siempre ha caracterizado al barbero.
                        
                        Movidos por las sonrisas de sus clientes al salir de Samuel’s Barber Shop, este intrépido y joven equipo de barberoa no deja de reinventarse y crecer.
                        
                        Anímate a probar esta experiencia: trato exquisito, profesionalidad, buen gusto y productos de primera calidad. ¡Te aseguramos que no te dejará impasible!</p>
                    <button onclick="location.href = 'servicios.php';">VER SERVICIOS</button>
                </div>
            </div>
        </section>
        <section class="carouselIndex">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./assets/Su.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SURCO</h5>
                        <p>Av. Primavera 1676, Surco, Lima.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./assets/local_5_Miraflores_aurora-404x267.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MIRAFLORES - AURORA</h5>
                        <p>Av. Alfredo Benavides 2197, Miraflores, Lima.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./assets/local_3_miraflores_porta.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>MIRAFLORES PORTA</h5>
                        <p>Calle Porta 194, Miraflores, Lima.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="./assets/local_1_La_Molina.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>LA MOLINA</h5>
                        <p>Javier Prado Este 5295, La Molina, Lima.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </section>

        <!-- FOOTER -->
        <?php include 'footer.php'; ?>
</body>
<script src="./js/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="./js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
<script src="./js/jquery.booklet.latest.min.js" type="text/javascript"></script>
<script src="./js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="./js/scrip.js" type="text/javascript"></script>
<script src="js/index.js"></script>
</html>
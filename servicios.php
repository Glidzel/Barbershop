<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | Barbershop</title>
    <script src="https://kit.fontawesome.com/97bed5bbe0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery.booklet.latest.css" type="text/css">
</head>
<body>
    <div class="sersection1">
        <header class="encabezado">
            <a id="img" href=""><img src="./assets/logotipo.png" alt="..."></a>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="./index.php">INICIO</a></li>
                        <li><a href="./servicios.php" id="active">SERVICIOS</a></li>
                        <li><a href="./somos.php">NOSOTROS</a></li>
                        <li><a href="./contactanos.php">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="serbanner">
            <h1>SERVICIOS</h1>
            <p>HOME:SERVICIOS</p>
        </div>
    </div>
    <main>
        <section class="sersection2">
            <div class="sercontainer">
                <div class="sercaja col-5">
                    <div>
                        <img src="./assets/ser01.png" alt="...">
                    </div>
                    <div id="text">
                        <h2>BARBA</h2>
                        <p>Deje que nuestros barberos apliquen su arte para ayudarlo a crear el estilo de barba o bigote con la forma perfecta que imagina. El servicio incluye asesoramiento, corte y delineado de la barba con toalla caliente e hidratación con aplicación de producto.</p>
                    </div>
                </div>
                <div class="sercaja col-5">
                    <div>
                        <img src="./assets/ser02.png" alt="...">
                    </div>
                    <div id="text">
                        <h2>FACIAL</h2>
                        <p>Relájese y limpie profundamente su piel con un tratamiento facial de limpieza. Nuestro servicio de 40 minutos agrega un masaje de cabeza y hombro.</p>
                    </div>
                </div>
                </div>
                <div class="sercontainer">
                    <div class="sercaja col-5">
                        <div>
                            <img src="./assets/ser03.png" alt="...">
                        </div>
                        <div id="text">
                            <h2>CORTE</h2>
                            <p>Póngase cómodo en una silla de barbero clásica y relájese mientras su barbero logra el aspecto deseado. Todos los cortes incluyen lavado de cabello aplicando productos de primera calidad.</p>
                        </div>
                    </div>
                    <div class="sercaja col-5">
                        <div>
                            <img src="./assets/ser04.png" alt="...">
                        </div>
                        <div id="text">
                            <h2>AFEITADO</h2>
                            <p>Afeitado que incluye una consulta sobre la piel, aceite pre-afeitado, toalla caliente, masaje facial y bálsamo para después del afeitado.</p>
                        </div>
                </div>
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
</html>
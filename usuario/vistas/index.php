<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberShop</title>
    <script src="https://kit.fontawesome.com/97bed5bbe0.js" crossorigin="anonymous"></script>
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
                        <li><a href="./usuario/login.php">INICIAR SESION</a></li>

                    </ul>
                </nav>
            </div>
        </header>
        <div class="banner">
            <h1 id="active">BRINDAMOS UN SERVICIO</h1>
            <h1>DE PRIMER NIVEL</h1>
            <button onclick="location.href = 'contactanos.php';">CONTÁCTANOS</button>
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
        <section class="locales" id="locales">
            <div id="wrapper">
                <div id="mi_libro">
                    <div id="portada">
                        <h2>Nuestros Locales</h2>
                        <p>Contamos con varios locales, para que puedas disfrutar de nuestros servicios en cualquier lugar.</p>
                    </div>
                    <div id="pagina1" class="pagina">
                        <h2>SURCO</h2>
                        <p>Av. Primavera 1676, Surco, Lima.</p>
                    </div>
                    <div id="pagina2" class="pagina">
                        <h2>MIRAFLORES - AURORA</h2>
                        <p>Av. Alfredo Benavides 2197, Miraflores, Lima.</p>
                    </div>
                    <div id="pagina3" class="pagina">
                        <h2>MIRAFLORES PORTA</h2>
                        <p>Calle Porta 194, Miraflores, Lima.</p>
                    </div>
                    <div id="pagina4" class="pagina">
                        <h2>LA MOLINA</h2>
                        <p>Javier Prado Este 5295, La Molina, Lima.</p>
                    </div>
                    <div id="pagina5" class="pagina">
                        <h2>LINCE</h2>
                        <p>Av. Arenales 2211, Lince, Lima.</p>
                    </div>
                    <div id="pagina6" class="pagina">
                        <h2>JESÚS MARÍA</h2>
                        <p>CC San Felipe, Tda. 67, Int. 79 Residencial San Felipe.</p>
                    </div>
                    <div id="pagina7" class="pagina">
                        <h2>SAN ISIDRO</h2>
                        <p>Av.Los conquistadores #133, San Isidro, Lima.</p>
                    </div>
                
                </div>
                <!-- <div id="gotopage">
                    <input id="in_go"/> <button id="bt_go">Ir a la página</button>
                </div> -->
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | Barbershop</title>
    <script src="https://kit.fontawesome.com/97bed5bbe0.js" crossorigin="anonymous"></script>
    <script src="js/scrollreveal.js"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery.booklet.latest.css" type="text/css">
</head>
<body>
    <div class="sersection1">
        <header class="encabezado">
        <a id="img" href="index.php"><img style="width: 100px;" src="./assets/logo02.png" alt="..."></a>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="./index.php">INICIO</a></li>
                        <li><a href="./servicios.php">SERVICIOS</a></li>
                        <li><a href="./somos.php">NOSOTROS</a></li>
                        <li><a href="./contactanos.php" id="active">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="serbanner">
            <h1>CONTÁCTANOS</h1>
            <div class="d-flex">
                <div>
                <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>&nbsp; &nbsp;
                </div>
                <div>
                <p>HOME &nbsp; : &nbsp; CONTÁCTANOS</p>
                </div>&nbsp; &nbsp;
                <div>
                <i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i><i class="fa-solid fa-minus"></i>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section class="contacsection2">
            <div class="contaccontainer">
                <div class="contacTitle">
                    <h1>CONTÁCTANOS</h1> <br><br>
                </div>
                <div class="contacContenido col-12">
                    <div class="contacForm col-6">
                        <form action="">
                        <input type="text" name="" id="inputText" placeholder="NOMBRE Y APELLIDOS"> <br><br>
                        <input type="email" name="" id="inputEmail" placeholder="EMAIL"> <br><br>
                        <textarea name="" id="textArea" cols="30" rows="10" placeholder="CONSULTA"></textarea> <br><br>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" id="checkbox" value="checkedValue" checked>
                            He leído y acepto las políticas de privacidad
                          </label>
                        </div> 
                        <button id="buttonContac">ENVIAR MENSAJE</button>
                        </form>
                    </div>
                    <div class="contacImg col-5">
                        
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
<script src="js/index.js"></script>
</html>
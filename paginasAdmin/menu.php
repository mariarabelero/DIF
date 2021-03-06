<?php
/**
 * Ingresar
 * Pagina para capturara datos de asistentes
 * Pagina con una forma para ingresar los datos de la pareja
 */
session_start();
if (!isset($_SESSION['autentificado']) || $_SESSION['autentificado'] === FALSE) {
    header('Location:../index.php');
}
if ($_SESSION['usuario_nivel'] == "usuario") {
    die('Prohibido');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Metas
        ================================================== -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Pl&aacute;ticas Prematrimoniales</title>
        <meta name="description" content="DIF-Tijuana, 2013. Registrarse y asiste a Pl&aacute;ticas Prematrimoniales en el DIF de Tijuana" />
        <meta name="generator" content="DIF-Tijuana, B. C. 2013  www.dif-tijuana.gob.mx">
        <meta name="keywords" content="DIF, Tijuana, Baja California, Mexico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="author" content="Israel Cardona, Renato Martinez" />
        <meta name="viewport" content="width=device-width"/>
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <meta http-equiv="cleartype" content="On" />
        <!-- CSS
        ================================================== -->
        <link type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link type="text/css" href="../css/bootstrap.min.css" rel="stylesheet" />
        <link type="text/css" href="../css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link type="text/css" href="../css/font/font-awesome.min.css" rel="stylesheet" />
        <link type="text/css" href="../css/newestilo.css" rel="stylesheet" />
        <link href="img/favicon.ico" rel="shortcut icon" >

        <!--[if IE 7]>
            <link rel="stylesheet" href="../css/font/font-awesome-ie7.min.css" type="text/css"  />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="../js/libs/html5shiv-3.6.1/html5shiv.js"></script>
            <link rel="stylesheet" href="../css/custom-theme/jquery.ui.1.10.0.ie.css"/>
        <![endif]-->
        <!-- Le javascript
        ================================================== -->
        <script src="../js/libs/jquery-1.9.0/jquery.min.js" type="text/javascript"></script>
        <script src="../js/libs/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/libs/jqueryui-1.10.0/jquery-ui.js" type="text/javascript"></script>
    </head>

    <body>
        <!-- Cabezera
            ================================================== -->
        <div class="container-narrow"><!-- contenedor -->
            <div class="masthead">
                <header class="row-fluid">
                    <div class="span3">
                        <img src="../img//anillo.jpg" class="img-rounded">
                    </div>
                    <div class="span9">
                        <h1>Pl&aacute;ticas Prematrimoniales DIF - Tijuana</h1>
                    </div>
                </header>
            </div>
            <hr class="headerhr">

            <!-- Contenido
            ================================================== -->
            <section class="row-fluid">
                <div class="titulo page-header centrar"><h3>Administraci&oacute;n</h3></div>
                <div class="clearfix"></div>
                <div class="span5 offset1 margin-top">
                    <button class="btn admin dif center" onClick="window.location = 'ingresar.php'">Registrar Pareja</button>
                    <button class="btn admin dif center" onClick="window.location = 'buscar.php'">Modificar Pareja</button>
                    <button class="btn admin dif center" onClick="window.location = 'registrar.php'">Agregar Administrador</button>
                    <button class="btn admin dif center" onClick="window.location = 'sitios.php'">Administrar Sitios</button>
                </div>
                <div class="span5  margin-top">
                    <button class="btn admin dif center" onClick="window.location = 'citas.php'">Administrar Calendario</button>
                    <button class="btn admin dif center" onClick="window.location = 'asistencia.php'">Imprimir Asistencia</button>
                    <button class="btn admin dif center" onClick="window.location = 'diploma.php'">Imprimir Reconocimiento</button>
                    <button class="btn admin dif center" onClick="window.location = 'cerrar.php'">Cerrar Curso</button>
                </div>
                <div class="clearfix"></div>
                <button class="btn admin center span3 offset4 margin-top" onClick="window.location = 'http://www.dif-tijuana.gob.mx/'">Salir</button>
                <!--<button class="btn admin dif center span3 offset4 margin-top" onClick="window.location = 'www.dif-tijuana.gob.mx'">Salir</button> -->       
            </section>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer">
            <div class="container-narrow">
                <div class="row-fluid marketing">
                    <div class="span4">
                        <address>
                            Blvd. de los Insurgentes #17608<br />
                            Fracc. Los &aacute;lamos<br />
                            Tijuana, B. C. M&eacute;xico<br /> 
                            C. P. 22100
                        </address>
                    </div>
                    <div class="span4">
                        <a href="http://www.dif-tijuana.gob.mx/">
                            <img src="../img/logodif.png" alt="logodif"/>
                        </a>
                        <p>© DIF Municipal de Tijuana, B. C.</p>
                    </div>
                    <div class="span4 last">
                        <address>
                            <a href="tel:6088200">Tel&eacute;fono: 608-8200</a><br />
                            <a href="mailto:info@dif-tijuana.gob.mx">info@dif-tijuana.gob.mx</a><br />
                            <a href="http://www.dif-tijuana.gob.mx/contact-form/index.php">Forma El&eacute;ctronica</a>
                        </address>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/aviation-scr.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Document</title>

</head>



<body>

    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero aviation"></div>

        <?php if ($isMob != 1) { ?>

            <div class="historial">

                <div class="sub-historial">

                    <p>Home | Productos | Gestionados | Inversiones Alternativas | <b>Dunas Capital Aviation SCR</b></p>

                </div>

                <div></div>

            </div>

        <?php } ?>

        <div class="container-small white">

            <div class="container-small-width">

                <div class="pensiones-bloque-1 mtb_5vh">

                    <div class="sub-bloque sub1">

                        <p>Inversión en aeronaves con una visión de largo plazo</p>

                    </div>

                    <div class="sub-bloque sub2 movil">

                        <p>Dunas Capital Asset Management SGIIC SA gestiona la cartera de inversiones de la sociedad. Se trata de activos que generan retornos recurrentes a los accionistas de la sociedad, gracias a los ingresos por alquiler y el valor futuro de las aeronaves.</p>

                    </div>

                    <div class="sub-bloque movil">

                        <p>Para ello, Dunas Capital Asset Management SGIIC cuenta con el personal especializado para la gestión de la cartera.</p>

                        <p>Fue inscrita el 13 de diciembre del 2019 en el Registro Oficial de Sociedades de capital Riesgo de la CNMV, con el nº301.</p>

                    </div>

                </div>

            </div>

        </div>

        <div class="container-small grey">

            <div class="container-small-width">

                <div class="doble-columna mtb_5vh">

                    <?php if ($isMob != 1) { ?>

                        <div class="columna col1">

                            <p>NÚMERO REGISTRO CNMV</p>

                            <p>FECHA REGISTRO OFICIAL</p>

                            <p>CÓDIGO ISIN</p>

                            <p>COMPROMISOS TOTALES DE INVERSIÓN</p>

                            <p>PERIODO DE INVERSIÓN</p>

                            <p>DURACIÓN DEL FONDO</p>

                            <p>DEPOSITARIA</p>

                            <p>DOCUMENTOS</p>

                        </div>

                        <div class="columna col2">

                            <p>301</p>

                            <p>13 de diciembre de 2019</p>

                            <p>ES0119347005</p>

                            <p>18.400.000 €</p>

                            <p>2 años</p>

                            <p>7 años (+1+1+1)</p>

                            <p>BNP PARIBAS SECURITIES SERVICES, SUCURSAL EN ESPAÑA</p>

                            <p>Link a KID</p>

                        </div>

                    <?php } else { ?>

                        <div class="col-movil">

                            <p>NÚMERO REGISTRO CNMV</p>

                            <p>301</p>

                        </div>

                        <div class="col-movil">

                            <p>FECHA REGISTRO OFICIAL</p>

                            <p>13 de diciembre de 2019</p>

                        </div>

                        <div class="col-movil">

                            <p>CÓDIGO ISIN</p>

                            <p>ES0119347005</p>

                        </div>

                        <div class="col-movil">

                            <p>COMPROMISOS TOTALES DE INVERSIÓN</p>

                            <p>18.400.000 €</p>

                        </div>

                        <div class="col-movil">

                            <p>PERIODO DE INVERSIÓN</p>

                            <p>2 años</p>

                        </div>

                        <div class="col-movil">

                            <p>DURACIÓN DEL FONDO</p>

                            <p>7 años (+1+1+1)</p>

                        </div>

                        <div class="col-movil">

                            <p>DEPOSITARIA</p>

                            <p>BNP PARIBAS SECURITIES SERVICES, SUCURSAL EN ESPAÑA</p>

                        </div>

                        <div class="col-movil">

                            <p>DOCUMENTOS</p>

                            <p>Link a KID</p>

                        </div>

                    <?php } ?>

                </div>

            </div>

        </div>

        <div class="container-small white">

            <div class="container-small-width">

                <p class="titulo mtb_10vh">NOVEDADES</p>

                <div class="bloque-novedades">

                    <div class="novedad">

                        <div> <img src="img/nuevo/Desktop/04_Productos/06_Landing_producto/img_articulo-1.jpg" alt=""></div>

                        <p>DUNAS CAPITAL CAPTA 100 MILLONES PARA LANZAR UN FONDO DE AVIONES COMERCIALES</p>

                    </div>

                    <div class="novedad">

                        <div> <img src="img/nuevo/Desktop/04_Productos/06_Landing_producto/img_articulo-2.jpg" alt=""></div>

                        <p>DUNAS CAPITAL CREA UN CAPITAL RIESGO QUE INVIERTE EN ALQUILAR AVIONES COMERCIALES</p>

                    </div>

                </div>

                <div class="boton-info mtb_10vh">

                    <button class="boton-colores black">Más Novedades &nbsp; <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>

                </div>

            </div>

        </div>

    </div>

    </div>



    <?php include('includes/footer.php'); ?>

    <script src="js/jquery-3.5.1.slim.min.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/nuevo/main.js"></script>

</body>



</html>
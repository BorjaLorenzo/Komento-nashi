<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/productos.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Document</title>

</head>



<body>

    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero productos"></div>

        <?php if ($isMob != 1) { ?>

            <div class="historial">

                <div class="sub-historial">

                    <p>Home | <b>Productos</b></p>

                </div>

                <div></div>

            </div>

        <?php } ?>

        <div class="container-small white">

            <div class="container-small-width">

                <div class="contenido-quienes-1 mtb_5vh">

                    <div>

                        <p><span>“</span>Una amplia gama de productos de calidad seleccionados para diferentes perfiles inversores.<span>”</span></p>

                    </div>

                </div>

            </div>

        </div>

        <div class="container-small grey">

            <div class="container-small-width">

                <div class="productos-gestionados mtb_5vh">

                    <p>PRODUCTOS GESTIONADOS</p>

                </div>

                <div class="bloque-productos">

                    <div class="producto">

                        <div>

                            <img src="../dunas/img/nuevo/Desktop/04_Productos/01_Todos/gestionados_fondos_inversion.png" alt="">

                        </div>

                        <p>FONDOS DE INVERSIÓN</p>

                        <p class="book">En Dunas Capital Asset Management tenemos un modelo propio de inversión en la creación de las carteras para nuestros clientes: VCAR. Un modelo innovador en tres pasos, que parte siempre de las premisas de generación de valor a largo plazo y preservación de capital.</p>

                        <div>

                            <button class="boton-colores b1 inline-arrow fs_165vh">Ver Fondos &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>

                        </div>

                    </div>

                    <div class="producto">

                        <div>

                            <img src="../dunas/img/nuevo/Desktop/04_Productos/01_Todos/gestionados_fondos_pensiones.png" alt="">

                        </div>

                        <p>FONDOS DE PENSIONES</p>

                        <p class="book">Nos encargamos de todos los procedimientos necesarios como Gestora: control interno y de riesgos, valoración y contabilización, administración, trámites jurídicos, comunicaciones a los partícipes y los órganos reguladores, etc.</p>

                        <div>

                            <button class="boton-colores b1 inline-arrow fs_165vh">Ver Fondos &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>

                        </div>

                    </div>

                    <div class="producto">

                        <div>

                            <img src="../dunas/img/nuevo/Desktop/04_Productos/01_Todos/gestionados_inversiones.png" alt="">

                        </div>

                        <p>INVERSIONES ALTERNATIVAS GESTIONADAS</p>

                        <p class="book">Ofrecemos oportunidades de inversión a largo plazo en activos de transporte, así como en proyectos de energía renovable y eficiencia energética. Se trata de inversiones con contrapartes de solvencia contrastada y baja volatilidad, que generan rentabilidades estables y atractivas.</p>

                        <div>

                            <button class="boton-colores b4 inline-arrow fs_165vh">Ver Inversiones &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="container-small white">

            <div class="container-small-width">

                <div class="mtb_5vh">

                    <div class="productos-gestionados mb_5vh">

                        <p>PRODUCTOS ADMINISTRADOS</p>

                    </div>

                    <div class="bloque-productos bloque-p-2">

                        <div class="producto">

                            <div>

                                <img src="../dunas/img/nuevo/Desktop/04_Productos/01_Todos/administrados_fondos_pensiones.png" alt="">

                            </div>

                            <p>FONDOS DE PENSIONES</p>

                            <p class="book">Nos encargamos de todos los procedimientos necesarios como Gestora: control interno y de riesgos, valoración y contabilización, administración, trámites jurídicos, comunicaciones a los partícipes y los órganos reguladores, etc.</p>

                            <div>

                                <button class="boton-colores b1 inline-arrow fs_165vh">Ver Fondos &nbsp;&nbsp;&nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>

                            </div>

                        </div>

                    </div>

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
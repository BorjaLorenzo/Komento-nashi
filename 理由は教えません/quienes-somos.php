<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Dunas - Quienes Somos</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero dunas">
        </div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | Dunas | <b>Quiénes Somos</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>

        <div class="container-small white">
            <div class="container-small-width">
                <div class="s-dunas">
                    <div class="contenido-quienes-1">
                        <div>
                            <p><span>“</span>Se aproxima una nueva era para la gestión de activos y solo aquellas compañías que aporten valor a las inversiones a través de productos soﬁsticados, innovadores y adaptados a las necesidades de los clientes, sobrevivirán<span>”</span></p>
                        </div>
                        <div class="autor">
                            <p>David Angulo Chairman,<br>DUNAS CAPITAL</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-small grey">
            <div class="container-small-width">
                <div class="s-dunas">
                    <div class="texto-sobre-circulos">
                        <div>
                            <p>Somos un grupo financiero independiente español que aspira ser el referente en la gestión de activos mobiliarios e inmobiliarios para el mercado ibérico, a través de una gama de productos de alta calidad y valor añadido.</p>
                            <p>Centramos nuestra actividad en la gestión de fondos y patrimonios de instituciones y terceros.</p>
                            <?php if ($isMob != 1) { ?>
                                <p>Nuestra gestión es global, activa y flexible, con unos objetivos de rentabilidad que buscan, ante todo, la</p>
                            <?php } else { ?>
                                <p>Nuestra gestión es global, activa y flexible, con unos objetivos de rentabilidad que buscan, ante todo, la preservación del patrimonio de nuestros clientes mediante una constante evaluación de la relación rentabilidad-riesgo.</p>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if ($isMob != 1) { ?>
                                <p>preservación del patrimonio de nuestros clientes mediante una constante evaluación de la relación rentabilidad-riesgo.</p>
                            <?php } ?>
                            <p>Siempre dentro de los más estrictos estándares de control y gestión de riesgos financieros, así como un profundo conocimiento regulatorio que nos permiten asesorar y ayudar en cada momento a nuestros clientes en el impulso de sus finanzas y patrimonio.</p>
                            <p>Estamos bajo la supervisión de la CNMV, Banco de España, DGS, Banco de Portugal y CMVM.</p>
                        </div>
                    </div>

                    <div class="s-home-2">

                        <?php
                        if ($isMob != 1) { ?>
                            <div class="circulo 1">
                                <div class="circulo-interior">
                                    <p>1.250 M €</p>
                                    <p>Activos Gestionados.</p>
                                </div>
                            </div>
                            <div class="circulo 2">
                                <div class="circulo-interior">
                                    <p>70 Expertos </p>
                                    <p>Altamente cualificados.</p>
                                </div>
                            </div>
                            <div class="circulo 3">
                                <div class="circulo-interior">
                                    <p>20.116 M € </p>
                                    <p>Activos Intermediados.</p>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="swiper swiper-negro">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="circulo 1">
                                            <div class="circulo-interior">
                                                <p>1.250 M €</p>
                                                <p>Activos Gestionados.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="circulo 2">
                                            <div class="circulo-interior">
                                                <p>70 Expertos </p>
                                                <p>Altamente cualificados.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="circulo 3">
                                            <div class="circulo-interior">
                                                <p>20.116 M € </p>
                                                <p>Activos Intermediados.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="p-datos black">
                        <p>Datos a 31 de diciembre de 2021.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small white white-video capa">
            <div class="container-small-width">
                <div class="s-home-3">
                    <div class="video-home">
                        <video src="img/nuevo/Desktop/01_Home/video-home.mp4" poster="img/nuevo/duna.jpg" id="video-home"></video>
                        <div>
                            <img src="img/nuevo/Desktop/01_Home/Play.svg" alt="" id="video-start">
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
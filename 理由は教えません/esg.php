<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/esg.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>
    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero esg"></div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | <b>ESG</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="s-dunas">
                    <div class="contenido-quienes-1">
                        <div>
                            <p><span>“</span>Es nuestra responsabilidad conocer el impacto de nuestras inversiones y trasladarlo a nuestros clientes con total transparencia<span>”</span></p>
                        </div>
                        <div class="autor">
                            <p>David Angulo <br>Chairman, DUNAS CAPITAL</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-small grey">
            <div class="container-small-width">
                <div class="mtb_5vh aux">
                    <div class="pretexto">
                        <p>En Dunas Capital consideramos que la sostenibilidad es un componente indispensable para la creación de valor a largo plazo, ya que no solo produce mejores rentabilidades financieras sino que además beneficia tanto al medioambiente como a la sociedad en su conjunto.</p>
                    </div>
                    <div class="bloque-esg mt_5vh">
                        <div class="eco">
                            <div>
                                <img src="img/nuevo/Desktop/07_ESG/logo_pri.png" alt="">
                            </div>
                            <p>Formamos parte de los Principios de Inversión Responsable de las Naciones Unidas desde julio de 2020.</p>
                        </div>
                        <div class="eco">
                            <div>
                                <img src="img/nuevo/Desktop/07_ESG/msci-logo.png" alt="">
                            </div>
                            <p>Hemos llegado a un acuerdo con el Grupo MSCI para que sea nuestro proveedor de datos en materia de ESG. Así podemos analizar estos factores como parte integral de nuestro proceso de inversión y gestionar nuestras carteras de una forma más respetuosa con el medio ambiente.</p>
                        </div>
                        <div class="eco">
                            <div>
                                <img src="img/nuevo/Desktop/07_ESG/logo_ieaf.png" alt="">
                            </div>
                            <p>Y, fieles a nuestro compromiso con el medio ambiente, el buen gobierno corporativo y con la sociedad en su conjunto, en 2021, miembros integrantes de los equipos de Gestión, Comercial, Control Interno y Cumplimiento Normativo, se han certificado como Analistas Financieros en temas ESG (CESGA).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small white">
            <div class="container-small-width">
                <?php if ($isMob != 1) { ?>
                    <div class="bloques-alternativos mtb_5vh">



                        <div class="alternativo">
                            <div>
                                <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/lean_energy.png" alt="">
                            </div>
                            <p class="titulo-icono">DUNAS CLEAN ENERGY I FCR</p>
                            <p class="texto-icono">Fondo de Capital Riesgo que invierte en proyectos de generación de energías renovables, principalmente plantas fotovoltaicas y en sus diferentes estados de tramitación, tanto en España como en la UE, mediante la utilización de las últimas tecnologías y aplicando medidas integradoras con la actividad agrícola y ganadera de las zonas en las que invierte. El fondo está catalogado como artículo 9 del reglamento SFDR y se encuentra en fase de comercialización, si bien ya ha acometido las primeras inversiones.</p>
                            <div class="icono-alternativo">
                                <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/ico_descargable.svg" alt="">
                            </div>
                            <a href="">KIID Dunas Clean Energy I F.C.R (Clase C)</a>
                            <a href="">Teaser Dunas Clean Energy</a>
                            <!-- <a href=""></a> -->
                        </div>
                        <div class="alternativo">
                            <div class="img-alternativo">
                                <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">
                            </div>
                            <p class="titulo-icono">DUNAS ABSOLUTE IMPACT FCR</p>
                            <p class="texto-icono">Fondo de Capital Riesgo enfocado en generar un impacto social y ambiental positivo y medible en las zonas más desfavorecidas de España, a través de la inversión en agricultura sostenible, en la industria agroalimentaria y en el uso de energías renovables aplicadas al mundo agrario. El fondo está catalogado como artículo 9 del reglamento SFDR y ofrece por tanto una estrategia de inversión sostenible, responsable y eficiente que permite además obtener un rendimiento financiero muy atractivo.</p>
                            <div class="icono-alternativo">
                                <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/ico_descargable.svg" alt="">
                            </div>
                            <a href="">KIID Dunas Absolute Impact F.C.R (Clase C)</a>
                            <a href="">Teaser Dunas Absolute Impact</a>
                        </div>
                        <div class="alternativo">
                            <div class="img-alternativo">
                                <img src="img/nuevo/Desktop/07_ESG/seleccion_usa.png" alt="">
                            </div>
                            <p class="titulo-icono">DUNAS SELECCIÓN <span class="blue"><b>USA</b> ESG CUBIERTO</span></p>
                            <p>Fondo indexado de renta variable americana y gestión pasiva. <span>Réplica física del índice S&P 500 ESG</span>, totalmente cubierto al Euro.</p>
                            <p>Traspasable, <span>con domicilio fiscal en España.</span></p>
                            <p>Fondo 100% sostenible.</p>
                            <p>Comisión de gestión: <br><span>
                                    Clase C: 0,18%.<br>
                                    Clase I: 0,20%.<br>
                                    Clase R: 0,90%.</span></p>
                            <p>Nivel de riesgo CNMV: <span>6.</span></p>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="swiper swiper-negro">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="alternativo">
                                    <div>
                                        <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/lean_energy.png" alt="">
                                    </div>
                                    <p class="titulo-icono">DUNAS CLEAN ENERGY I FCR</p>
                                    <p class="texto-icono">Fondo de Capital Riesgo que invierte en proyectos de generación de energías renovables, principalmente plantas fotovoltaicas y en sus diferentes estados de tramitación, tanto en España como en la UE, mediante la utilización de las últimas tecnologías y aplicando medidas integradoras con la actividad agrícola y ganadera de las zonas en las que invierte. El fondo está catalogado como artículo 9 del reglamento SFDR y se encuentra en fase de comercialización, si bien ya ha acometido las primeras inversiones.</p>
                                    <div class="icono-alternativo">
                                        <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/ico_descargable.svg" alt="">
                                    </div>
                                    <a href="">KIID Dunas Clean Energy I F.C.R (Clase C)</a>
                                    <a href="">Teaser Dunas Clean Energy</a>
                                    <!-- <a href=""></a> -->
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="alternativo">
                                    <div class="img-alternativo">
                                        <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">
                                    </div>
                                    <p class="titulo-icono">DUNAS ABSOLUTE IMPACT FCR</p>
                                    <p class="texto-icono">Fondo de Capital Riesgo enfocado en generar un impacto social y ambiental positivo y medible en las zonas más desfavorecidas de España, a través de la inversión en agricultura sostenible, en la industria agroalimentaria y en el uso de energías renovables aplicadas al mundo agrario. El fondo está catalogado como artículo 9 del reglamento SFDR y ofrece por tanto una estrategia de inversión sostenible, responsable y eficiente que permite además obtener un rendimiento financiero muy atractivo.</p>
                                    <div class="icono-alternativo">
                                        <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/ico_descargable.svg" alt="">
                                    </div>
                                    <a href="">KIID Dunas Absolute Impact F.C.R (Clase C)</a>
                                    <a href="">Teaser Dunas Absolute Impact</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="alternativo">
                                    <div class="img-alternativo">
                                        <img src="img/nuevo/Desktop/07_ESG/seleccion_usa.png" alt="">
                                    </div>
                                    <p class="titulo-icono">DUNAS SELECCIÓN <span class="blue"><b>USA</b> ESG CUBIERTO</span></p>
                                    <p>Fondo indexado de renta variable americana y gestión pasiva. <span>Réplica física del índice S&P 500 ESG</span>, totalmente cubierto al Euro.</p>
                                    <p>Traspasable, <span>con domicilio fiscal en España.</span></p>
                                    <p>Fondo 100% sostenible.</p>
                                    <p>Comisión de gestión: <br><span>
                                            Clase C: 0,18%.<br>
                                            Clase I: 0,20%.<br>
                                            Clase R: 0,90%.</span></p>
                                    <p>Nivel de riesgo CNMV: <span>6.</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php if ($isMob != 1) { ?>
            <div class="container-small blanco">
                <div class="container-small-width">
                    <div class="mtb_5vh aux">
                        <div class="pretexto">
                            <p>Hemos creado un comité denominado Dunas ESGreen que será responsable de velar por el buen funcionamiento interno y de vigilar que la creación de valor a largo plazo se haga de manera responsable y sostenible en todos nuestros vehículos gestionados.</p>
                        </div>
                    </div>
                    <div class="titulo izquierda mb_5vh">
                        <p>Comité <br>Dunas ESGreen</p>
                    </div>
                    <div class="bloque-gestores mb_5vh">
                        <div class="bloque-gestor">
                            <div class="bloque-gestor-top">
                                <div class="top-img">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                </div>
                                <div class="top-title f135vh ">
                                    <p>Miguel Ángel Vaquero</p>
                                </div>
                            </div>
                            <div class="bloque-gestor-bot">
                                <p class="num f120vh">“Cambiar el mundo en el que vivimos y que ha sido exitoso en muchos aspectos, pero también mejorable en otros tantos, como clima y desigualdad, es un objetivo para los gobiernos, las empresas, pero también para cada uno de nosotros. No podemos pretender que el cambio sea cuestión de otros, no podemos delegar nuestra aportación, ni nuestra implicación en la transformación, debemos ser protagonistas. Es una carrera de fondo, y como todas las carreras lo importante es llegar a la meta. Os esperamos a todos.”</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-small white">
                <div class="container-small-width">
                    <p class="title mtb_10vh">NOVEDADES</p>
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
        <?php } ?>
    </div>
    </div>

    <?php include('includes/footer.php'); ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/nuevo/main.js"></script>
</body>

</html>
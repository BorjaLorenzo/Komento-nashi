<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>
    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero equipo-comercial"></div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | Dunas | <b>Equipo</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="s-dunas">
                    <div class="contenido-quienes-1">
                        <div>
                            <p><span>“</span>El equipo humano fundador de Dunas Capital aporta el valor de la experiencia financiera al más alto nivel con total responsabilidad corporativa y social.<span>”</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small grey">
            <div class="container-small-width">
                <div class="titulo izquierda">
                    <p>Socios<br>Ejecutivos</p>
                </div>
                <?php if ($isMob != 1) { ?>


                    <div class="socios-ejecutivos">
                        <div class="socio">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\david_angulo.png" alt="">
                            </div>
                            <p class="nombre-socio">DAVID ANGULO<br>CHAIRMAN</p>
                            <p class="definicion-socio">Aporta una impecable y dilatada trayectoria en el sector asegurador.<br><br>Ha sido Presidente Ejecutivo del Grupo Aviva España, Group Bancassurance Director, Director Corporativo del área de Seguros y Asset Management para Santander UK, Director General de Aegon Vida y miembro de varios Consejos de Administración de compañías de seguros.</p>
                        </div>
                        <div class="socio">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\rafael_andres.png" alt="">
                            </div>
                            <p class="nombre-socio">RAFAEL ANDRÉS<br>PARTNER</p>
                            <p class="definicion-socio">Con más de 20 años de experiencia en el sector financiero, ha tenido entre otras responsabilidades la dirección de las unidades de Banca Privada y Rentas Altas para la división América del Grupo Santander, y ha sido Managing Director de Fondos de Inversión y Productos de Pasivo para Banco Santander en España.</p>
                        </div>
                        <div class="socio">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\ignacio_roig.png" alt="">
                            </div>
                            <p class="nombre-socio">IGNACIO ROIG<br>CHIEF FINANCIAL OFFICER</p>
                            <p class="definicion-socio">Cuenta con más de 18 años de experiencia tanto en el sector asegurador como en el de la gestión de activos. Durante su carrera ha liderado varios procesos de fusiones y adquisiciones y ha ocupado cargos directivos en el Grupo Aviva en Europa y en Asia, en áreas como desarrollo de negocios y finanzas corporativas.</p>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="swiper swiper-negro">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="socio">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\david_angulo.png" alt="">
                                    </div>
                                    <p class="nombre-socio">DAVID ANGULO<br>CHAIRMAN</p>
                                    <p class="definicion-socio">Aporta una impecable y dilatada trayectoria en el sector asegurador.<br><br>Ha sido Presidente Ejecutivo del Grupo Aviva España, Group Bancassurance Director, Director Corporativo del área de Seguros y Asset Management para Santander UK, Director General de Aegon Vida y miembro de varios Consejos de Administración de compañías de seguros.</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="socio">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\rafael_andres.png" alt="">
                                    </div>
                                    <p class="nombre-socio">RAFAEL ANDRÉS<br>PARTNER</p>
                                    <p class="definicion-socio">Con más de 20 años de experiencia en el sector financiero, ha tenido entre otras responsabilidades la dirección de las unidades de Banca Privada y Rentas Altas para la división América del Grupo Santander, y ha sido Managing Director de Fondos de Inversión y Productos de Pasivo para Banco Santander en España.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="socio">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\ignacio_roig.png" alt="">
                                    </div>
                                    <p class="nombre-socio">IGNACIO ROIG<br>CHIEF FINANCIAL OFFICER</p>
                                    <p class="definicion-socio">Cuenta con más de 18 años de experiencia tanto en el sector asegurador como en el de la gestión de activos. Durante su carrera ha liderado varios procesos de fusiones y adquisiciones y ha ocupado cargos directivos en el Grupo Aviva en Europa y en Asia, en áreas como desarrollo de negocios y finanzas corporativas.</p>
                                </div>
                            </div>
                            <!-- <div class="swiper-slide">

                            </div> -->
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="titulo izquierda">
                    <p>Equipo<br>Comercial</p>
                </div>
                <?php if ($isMob != 1) { ?>
                    <div class="socios-ejecutivos">
                        <div class="socio">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\comun_chico.png" alt="">
                            </div>
                            <p class="nombre-socio">BORJA FERNÁNDEZ-GALIANO<br>HEAD OF SALES</p>
                            <p class="definicion-socio">Aporta casi 20 años de experiencia en el sector financiero, centrado en la gestión de activos en grupos internacionales de reconocido prestigio como Schroders, Pioneer Investments, Banque Syz & Co y Lazard, donde ha desarrollado funciones de responsabilidad en distintas áreas, tales como análisis financiero, gestión de carteras y ventas institucionales, tanto en España como en Suiza y Reino Unido. En su última etapa fue Director de Desarrollo de Negocio en Carmignac Gestion para los mercados de España, Portugal y Andorra.</p>
                        </div>
                        <div class="socio">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\comun_chico.png" alt="">
                            </div>
                            <p class="nombre-socio">CARLOS FRANCO SUANZES<br>SALES DIRECTOR</p>
                            <p class="definicion-socio">Se unió al Grupo Dunas en 2016 como Director de Ventas para Iberia de Dunas Capital SGFIM (Portugal). Anteriormente y durante siete años fue el Director General de Aviva Gestión SGIIC, S.A. Ha sido miembro del Comité de Dirección en Aegon Inversión como Director de Marketing y del Banco Zaragozano, donde desarrolló su labor como Director de Banca Institucional y Director de la Red de Agentes Financieros para Banca Privada y Banca Comercial. Anteriormente , trabajó en Banco Santander, como Director de Banca de Empresas, Banca de Consumo y Director de la Red de Agentes Financieros.</p>
                        </div>
                        <div class="socio">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\comun_chica.png" alt="">
                            </div>
                            <p class="nombre-socio">DANIELA PABLO DEGOUT<br>RESPONSABLE DE MARKETING Y COMUNICACIÓN</p>
                            <p class="definicion-socio">Cuenta con una experiencia de más de 5 años en marketing. Durante su carrera se ha enfocado en el diseño de estrategias de marketing en agencias como Delos Digital, Onlime Agency y Circus Marketing; así como, profesora de Tecnología de la Información en la Universidad Monteávila. Actualmente, es responsable de marketing y comunicación en Dunas Capital.</p>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="swiper swiper-negro">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="socio">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\comun_chico.png" alt="">
                                    </div>
                                    <p class="nombre-socio">BORJA FERNÁNDEZ-GALIANO<br>HEAD OF SALES</p>
                                    <p class="definicion-socio">Aporta casi 20 años de experiencia en el sector financiero, centrado en la gestión de activos en grupos internacionales de reconocido prestigio como Schroders, Pioneer Investments, Banque Syz & Co y Lazard, donde ha desarrollado funciones de responsabilidad en distintas áreas, tales como análisis financiero, gestión de carteras y ventas institucionales, tanto en España como en Suiza y Reino Unido. En su última etapa fue Director de Desarrollo de Negocio en Carmignac Gestion para los mercados de España, Portugal y Andorra.</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="socio">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\comun_chico.png" alt="">
                                    </div>
                                    <p class="nombre-socio">CARLOS FRANCO SUANZES<br>SALES DIRECTOR</p>
                                    <p class="definicion-socio">Se unió al Grupo Dunas en 2016 como Director de Ventas para Iberia de Dunas Capital SGFIM (Portugal). Anteriormente y durante siete años fue el Director General de Aviva Gestión SGIIC, S.A. Ha sido miembro del Comité de Dirección en Aegon Inversión como Director de Marketing y del Banco Zaragozano, donde desarrolló su labor como Director de Banca Institucional y Director de la Red de Agentes Financieros para Banca Privada y Banca Comercial. Anteriormente , trabajó en Banco Santander, como Director de Banca de Empresas, Banca de Consumo y Director de la Red de Agentes Financieros.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="socio">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\comun_chica.png" alt="">
                                    </div>
                                    <p class="nombre-socio">DANIELA PABLO DEGOUT<br>RESPONSABLE DE MARKETING Y COMUNICACIÓN</p>
                                    <p class="definicion-socio">Cuenta con una experiencia de más de 5 años en marketing. Durante su carrera se ha enfocado en el diseño de estrategias de marketing en agencias como Delos Digital, Onlime Agency y Circus Marketing; así como, profesora de Tecnología de la Información en la Universidad Monteávila. Actualmente, es responsable de marketing y comunicación en Dunas Capital.</p>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="titulo izquierda">
                    <p>Equipos<br>Áreas de Negocio</p>
                </div>
                <?php if ($isMob != 1) { ?>
                    <div class="bloque-botones">
                        <div class="boton-equipo">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\asset_management_logo.svg" alt="">
                            </div>
                            <button class="boton-colores b1">Asset Management &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        </div>
                        <div class="boton-equipo">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\pensiones_logo.svg" alt="">
                            </div>
                            <button class="boton-colores b2">Pensiones &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        </div>
                        <div class="boton-equipo">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\real_estate_logo.svg" alt="">
                            </div>
                            <button class="boton-colores b3">Real Estate &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        </div>
                        <div class="boton-equipo">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\real_assets_logo.svg" alt="">
                            </div>
                            <button class="boton-colores b4">Real Assets &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        </div>
                        <div class="boton-equipo">
                            <div>
                                <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\inverseguros_logo.svg" alt="">
                            </div>
                            <button class="boton-colores b5">Inverseguros S.V. &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="swiper swiper-negro">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="boton-equipo">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\asset_management_logo.svg" alt="">
                                    </div>
                                    <button class="boton-colores b1">Asset Management &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="boton-equipo">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\pensiones_logo.svg" alt="">
                                    </div>
                                    <button class="boton-colores b2">Pensiones &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="boton-equipo">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\real_estate_logo.svg" alt="">
                                    </div>
                                    <button class="boton-colores b3">Real Estate &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="boton-equipo">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\real_assets_logo.svg" alt="">
                                    </div>
                                    <button class="boton-colores b4">Real Assets &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="boton-equipo">
                                    <div>
                                        <img src="img\nuevo\Desktop\02_Dunas_Capital\04_Equipo\inverseguros_logo.svg" alt="">
                                    </div>
                                    <button class="boton-colores b5">Inverseguros S.V. &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                                </div>
                            </div>

                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/nuevo/main.js"></script>
</body>

</html>
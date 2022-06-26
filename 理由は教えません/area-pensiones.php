<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/area-pensiones.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>
    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero pensiones"></div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | Áreas de Negocio | <b>Pensiones</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="pensiones-bloque-1 mtb_10vh">
                    <div class="sub-bloque sub1">
                        <p><span>“</span>Facilitamos la gestión y administración de fondos y planes de pensiones<span>”</span></p>
                    </div>
                    <div class="sub-bloque sub2 movil">
                        <p>Ofrecemos a nuestros clientes la posibilidad de promover sus propios planes de pensiones de forma sencilla y sin costes añadidos gracias al apoyo del Grupo Dunas Capital.</p>
                        <p>Nos encargamos de todos los procedimientos necesarios como Gestora: control interno y de riesgos, valoración y contabilización, administración, trámites jurídicos, comunicaciones a los partícipes y los órganos reguladores, etc.</p>
                    </div>
                    <div class="sub-bloque movil">
                        <p>Además, ofrecemos una gama atractiva y diversificada de fondos de pensiones, gestionados por el mismo Equipo Gestor de nuestros fondos de inversión, que comparten filosofía, proceso y replican las mismas estrategias. Dicha gama de producto, está compuesta por tres fondos de pensiones.</p>
                    </div>
                </div>
            </div>
            <?php if ($isMob != 1) { ?>
                <div class="circulo-info">
                    <div class="circulo-blanco">
                        <p>i</p>
                    </div>
                    <div class="circulo-info-texto">
                        <p>Si quieres recibir<br>Más información</p>
                        <div>
                            <p>CONTACTA CON<br>NOSOTROS</p>
                            <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div>
                        </div>


                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="container-small grey">
            <div class="container-small-width">
                <div class="pensiones-bloque-2 mtb_10vh">
                    <div class="titulo izquierda">
                        <p>Gama de<br>FONDOS</p>
                    </div>
                    <div class="titulo azul">
                        <p>FONDOS DE PENSIONES</p>
                    </div>

                    <div class="tipo-fondos-pensiones">
                        <div class="bloque-pensiones">
                            <div>
                                <img src="img\nuevo\Desktop\03_Areas_Negocio\02_Pensiones\fondos_equilibrado.png" alt="">
                            </div>
                            <div class="bloque-texto-pensiones">
                                <p>Dunas Valor<br><span class="azul">Equilibrado F.P.</span></p>
                                <p>Objetivo de Volatilidad <span class="num">5%</span><br> Volatilidad Máxima <span class="num">8%</span><br> Objetivo Rentabilidad: <span class="num">Euribor 12m + 200 pb</span> <br>Fondo multiactivo con enfoque de retorno absoluto con enfoque de preservación de capital en plazos de 3 años. <br>Comisión de gestión <br><span class="num">Clase I: 0,7%</span><br><span class="num">Clase R: 1,30%</span></p>
                            </div>
                        </div>
                        <div class="bloque-pensiones">
                            <div>
                                <img src="img\nuevo\Desktop\03_Areas_Negocio\02_Pensiones\fondos_flexible.png" alt="">
                            </div>
                            <div class="bloque-texto-pensiones">
                                <p>Dunas Valor<br><span class="azul">Flexible F.P.</span></p>

                                <p>Objetivo de Volatilidad <span class="num">10%</span><br> Volatilidad Máxima <span class="num">15%</span> <br> Objetivo Rentabilidad: <span class="num">Euribor 12m + 400 pb</span> <br> Fondo multiactivo con enfoque de retorno absoluto con enfoque de preservación de capital en plazos de 5 años. <br> Comisión de gestión <br><span class="num">Clase I: 0,80%</span><br><span class="num">Clase R: 1,50%</span></p>
                            </div>
                        </div>
                        <div class="bloque-pensiones">
                            <div>
                                <img src="img\nuevo\Desktop\03_Areas_Negocio\02_Pensiones\fondos_europa.png" alt="">
                            </div>
                            <div class="bloque-texto-pensiones">
                                <p>Dunas Selección<br><span class="azul">Europa F.P.</span></p>
                                <p>Fondo Renta Variable Europea.<br> Objetivo Rentabilidad: <span class="num">batir al Eurostoxx 300</span> <br>Objetivo Volatilidad: <span class="num">15% - Máx 20%</span> <br>Comisión de gestión<br> <span class="num">Clase I: 0,90%</span> <br><span class="num">Clase R: 1,50%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="pensiones-bloque-3 mtb_10vh">
                    <div class="titulo izquierda">
                        <p>Equipo<br>GESTOR</p>
                    </div>
                    <?php if ($isMob != 1) { ?>
                        <div class="bloque-gestores">
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh ">
                                        <p>Alfonso Benito</p>
                                        <p class="num">Director de Gestión de Activos</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num f120vh">Director de Gestión en el Grupo Aviva España durante 10 años, anteriormente fue miembro del Comité de Dirección de Aviva Servicios Compartidos y anteriormente, responsable de riesgos financieros en el Grupo Aviva, Director Técnico y de Riesgos financieros en CajaSur Gestión. Gestor Principal del fondo Aviva Fonvalor Euro, catalogado con 5 estrellas por Morningstar, AAA por Citywire.</p>
                                </div>
                            </div>
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh">
                                        <p>José María Lecube</p>
                                        <p class="num">Director de Renta Fija</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num f120vh">Inició su carrera en 1988 en GVC Sociedad de Valores y Bolsa, pasó a la banca comercial del Banco Guipuzcoano y Banesto, en el área de Mercado de Capitales y en la gestión del libro de bonos. Posteriormente, realizó funciones similares en Banque BNP-Paribas, La Caixa y Cajasur. Desde 2005 ha sido responsable de Renta Fija en AVIVA España para los Planes de Pensiones y Fondos de Inversión con más de 2.500 millones de € bajo gestión.</p>
                                </div>
                            </div>
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh">
                                        <p>Carlos Gutiérrez</p>
                                        <p class="num">Director de Renta Variable</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num f120vh">Trabajó 12 años en el Grupo CIMD, como Director de la Tesorería y Cuenta Propia, como Subdirector del área y como Trader Senior y gestionó la cartera propia de negociación de renta variable de Cajasur. Des 2014 a 2017 ha sido Director de Renta Variable en Aviva España al frente del equipo con el que gestionó 1.200 millones de euros a través de Fondos de Inversión, Fondos de Pensiones y Carteras Propias de Seguros.</p>
                                </div>
                            </div>
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh">
                                        <p>Alberto Díez </p>
                                        <p class="num">Gestor de Renta Fija</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num  f120vh">Inició su carrera en el control de riesgos de Cajastur Gestión SGIIC. Posteriormente se incorporó a la divisón española de Aviva, como analista de riesgos financieros, trabajó para la matriz en Londes con una especialización en riesgo de crédito y participó en el programa de future leaders de la LSE. Fue Director de Riesgos de Liberbank Gestión SGIIC, obteniendo la certificación CFA y desde 2018 forma parte de Dunas Capital Asset Management.</p>
                                </div>
                            </div>
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh">
                                        <p>Rubén López</p>
                                        <p class="num">Gestor de Renta Variable</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num  f120vh">Inició su carrera profesional en 2014 en la red comercial de Liberbank, para después pasar por el bróker de derivados financieros X-Trade Brokers y el área de back office y liquidación de renta variable de BNP Paribas. Se incorporó a Dunas Capital Asset Management en 2019 como gestor de renta variable, tras ocupar dicho cargo en Metagestión durante 2 años.</p>
                                </div>
                            </div>
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh">
                                        <p>Jorge Herrero</p>
                                        <p class="num">Responsable Unidad de Riesgos</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num  f120vh">Comenzó su trayectoria profesional en el departamento de consultoría del Grupo Inverseguros en el año 2008 desempeñando las funciones de controles legales, valoración de activos y riesgos. Desde 2017 pasa a desempeñar la función de Responsable de la Unidad de Riesgos de Dunas Capital Asset Management.</p>
                                </div>
                            </div>
                            <div class="bloque-gestor">
                                <div class="bloque-gestor-top">
                                    <div class="top-img">
                                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/02_Pensiones/img_equipo.png" alt="">
                                    </div>
                                    <div class="top-title f135vh">
                                        <p>Álvaro Suardiaz</p>
                                        <p class="num">Gestor Junior de Renta Fija</p>
                                    </div>
                                </div>
                                <div class="bloque-gestor-bot">
                                    <p class="num  f120vh">Inició su carrera profesional en el área de renta variable en intermoney Valores en 2019. Al año, entró en la consultoría de Analistas Financieros Internacionales. Mientras cursó su máster en Finanzas (MF) por AFI, colaboró en el departamento de control de gestión y riesgos del Banco Sabadell. Tras culminar el máster, se incorporó a Dunas Capital Asset Management como gestor junior de renta fija en enero de 2022.</p>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="swiper swiper-negro">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh ">
                                                <p>Alfonso Benito</p>
                                                <p class="num">Director de Gestión de Activos</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num f120vh">Director de Gestión en el Grupo Aviva España durante 10 años, anteriormente fue miembro del Comité de Dirección de Aviva Servicios Compartidos y anteriormente, responsable de riesgos financieros en el Grupo Aviva, Director Técnico y de Riesgos financieros en CajaSur Gestión. Gestor Principal del fondo Aviva Fonvalor Euro, catalogado con 5 estrellas por Morningstar, AAA por Citywire.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh">
                                                <p>José María Lecube</p>
                                                <p class="num">Director de Renta Fija</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num f120vh">Inició su carrera en 1988 en GVC Sociedad de Valores y Bolsa, pasó a la banca comercial del Banco Guipuzcoano y Banesto, en el área de Mercado de Capitales y en la gestión del libro de bonos. Posteriormente, realizó funciones similares en Banque BNP-Paribas, La Caixa y Cajasur. Desde 2005 ha sido responsable de Renta Fija en AVIVA España para los Planes de Pensiones y Fondos de Inversión con más de 2.500 millones de € bajo gestión.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh">
                                                <p>Carlos Gutiérrez</p>
                                                <p class="num">Director de Renta Variable</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num f120vh">Trabajó 12 años en el Grupo CIMD, como Director de la Tesorería y Cuenta Propia, como Subdirector del área y como Trader Senior y gestionó la cartera propia de negociación de renta variable de Cajasur. Des 2014 a 2017 ha sido Director de Renta Variable en Aviva España al frente del equipo con el que gestionó 1.200 millones de euros a través de Fondos de Inversión, Fondos de Pensiones y Carteras Propias de Seguros.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh">
                                                <p>Alberto Díez </p>
                                                <p class="num">Gestor de Renta Fija</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num  f120vh">Inició su carrera en el control de riesgos de Cajastur Gestión SGIIC. Posteriormente se incorporó a la divisón española de Aviva, como analista de riesgos financieros, trabajó para la matriz en Londes con una especialización en riesgo de crédito y participó en el programa de future leaders de la LSE. Fue Director de Riesgos de Liberbank Gestión SGIIC, obteniendo la certificación CFA y desde 2018 forma parte de Dunas Capital Asset Management.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh">
                                                <p>Rubén López</p>
                                                <p class="num">Gestor de Renta Variable</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num  f120vh">Inició su carrera profesional en 2014 en la red comercial de Liberbank, para después pasar por el bróker de derivados financieros X-Trade Brokers y el área de back office y liquidación de renta variable de BNP Paribas. Se incorporó a Dunas Capital Asset Management en 2019 como gestor de renta variable, tras ocupar dicho cargo en Metagestión durante 2 años.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh">
                                                <p>Jorge Herrero</p>
                                                <p class="num">Responsable Unidad de Riesgos</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num  f120vh">Comenzó su trayectoria profesional en el departamento de consultoría del Grupo Inverseguros en el año 2008 desempeñando las funciones de controles legales, valoración de activos y riesgos. Desde 2017 pasa a desempeñar la función de Responsable de la Unidad de Riesgos de Dunas Capital Asset Management.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="bloque-gestor">
                                        <div class="bloque-gestor-top">
                                            <div class="top-img">
                                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/02_Pensiones/img_equipo.png" alt="">
                                            </div>
                                            <div class="top-title f135vh">
                                                <p>Álvaro Suardiaz</p>
                                                <p class="num">Gestor Junior de Renta Fija</p>
                                            </div>
                                        </div>
                                        <div class="bloque-gestor-bot">
                                            <p class="num  f120vh">Inició su carrera profesional en el área de renta variable en intermoney Valores en 2019. Al año, entró en la consultoría de Analistas Financieros Internacionales. Mientras cursó su máster en Finanzas (MF) por AFI, colaboró en el departamento de control de gestión y riesgos del Banco Sabadell. Tras culminar el máster, se incorporó a Dunas Capital Asset Management como gestor junior de renta fija en enero de 2022.</p>
                                        </div>
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
    </div>

    <?php include('includes/footer.php'); ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/nuevo/main.js"></script>
</body>

</html>
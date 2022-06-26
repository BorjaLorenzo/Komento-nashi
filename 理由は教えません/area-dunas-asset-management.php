<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/inverseguros.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Document</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero equipo-comercial">
        </div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | Dunas | <b>Gestion</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>
    </div>

    <section class="acumulamos-container max-width-1230">
        <article class="title-container">
            <p class="title">
                <quote><span>“</span>Acumulamos más de 30 años de experiencia en la gestión de activos<span>”</span></quote>
        </p>
        </article>
        <div class="text-container">
            <p class="text">Desde 1988, en Dunas Capital Asset Management ofrecemos a cada cliente una alternativa de inversión adaptada a sus necesidades, enfocada a la consecución de retornos positivos en el medio plazo y a la preservación del capital. </p>
            <p class="text">Somos un equipo altamente especializado y con trayectoria profesional contrastada que añade valor mediante un análisis profundo de cada mercado y activo en el que invertimos. Respondemos con flexibilidad y consistencia en la gestión, para obtener resultados sostenibles a largo plazo.</p>
        </div>
        <ul class="list-container">
            <li class="list-item">Aseguramos una alta competitividad en costes gracias a nuestros procesos estables y bien delimitados.</li>
            <li class="list-item">Diseñamos carteras con activos de renta fija, renta variable, derivados, liquidez y fondos, que evaluamos teniendo en cuenta 3 factores: objetivo de rentabilidad, horizonte temporal y gestión del riesgo.</li>
            <li class="list-item">Medimos la gestión con herramientas precisas para seguir la evolución de las carteras y reorientarlas si fuera necesario.</li>
        </ul>
    </section>

    <section class="gama-fondos">
        <article class="gama-fondos__container max-width">

            <h3 class="title">Gama de FONDOS</h3>
            <h4 class="subtitle">DUNAS VALOR</h4>
            <article class="gama_fondos__content-container">
                <div class="content">
                    <figure class="image-container">
                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/fondos_valor_prudente.png" alt="fondos valor prudente">
                    </figure>
                    <div>
                        <h4>Dunas Valor <span class="texto-azul">Prudente</span></h4>
                        <p>Objetivo de volatilidad: <span class="not-bold">1%</span></p>
                        <p>Volatilidad Máxima: <span class="not-bold">2%</span></p>
                        <p>Objetivo rentabilidad: <span class="not-bold">Euribor 12m + 50 pb</span></p>
                        <p>Plazo: <span class="not-bold">18 meses.</span></p>
                        <p>Comisión de gestión:</p>
                        <p class="not-bold">Clase I: 0,25%</p>
                        <p class="not-bold">Clase R: 0,50%</p>
                        <p>Nivel de riesgo CNMV: <span class="not-bold">2</span></p>
                    </div>
                </div>
                <div class="content">
                    <figure class="image-container">
                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/fondos_valor_cauto.png" alt="fondos valor cauto">
                    </figure>
                    <div>
                        <h4>Dunas Valor <span class="texto-azul">Cauto</span></h4>
                        <p>Objetivo de volatilidad: <span class="not-bold">2%</span></p>
                        <p>Volatilidad Máxima: <span class="not-bold">5%</span></p>
                        <p>Objetivo rentabilidad: <span class="not-bold">Euribor 12m + 100 pb</span></p>
                        <p>Plazo: <span class="not-bold">24 meses.</span></p>
                        <p>Comisión de gestión:</p>
                        <p class="not-bold">Clase I: 0,4%</p>
                        <p class="not-bold">Clase R: 0,8%</p>
                        <p>Nivel de riesgo CNMV: <span class="not-bold">3</span></p>
                    </div>
                </div>
                <div class="content">
                    <figure class="image-container">
                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/fondos_valor_equilibrio.png" alt="fondos valor equilibrio">
                    </figure>
                    <div>
                        <h4>Dunas Valor <span class="texto-azul">Equilibrio</span></h4>
                        <p>Objetivo de volatilidad: <span class="not-bold">5%</span></p>
                        <p>Volatilidad Máxima: <span class="not-bold">8%</span></p>
                        <p>Objetivo rentabilidad: <span class="not-bold">Euribor 12m + 200 pb</span></p>
                        <p>Plazo: <span class="not-bold">2 años.</span></p>
                        <p>Comisión de gestión:</p>
                        <p class="not-bold">Clase I: 0,525%</p>
                        <p class="not-bold">Clase R: 1,05%</p>
                        <p class="not-bold">Clase D: 0,525%</p>
                        <p class="not-bold">Clase RD: 1,05%</p>
                        <p>Nivel de riesgo CNMV: <span class="not-bold">4</span></p>
                    </div>
                </div>
                <div class="content">
                    <figure class="image-container">
                        <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/fondos_valor_flexible.png" alt="fondos valor flexible">
                    </figure>
                    <div>
                        <h4>Dunas Valor <span class="texto-azul">Flexible</span></h4>
                        <p>Objetivo de volatilidad: <span class="not-bold">10%</span></p>
                        <p>Volatilidad Máxima: <span class="not-bold">15%</span></p>
                        <p>Objetivo rentabilidad: <span class="not-bold">Euribor 12m + 200 pb</span></p>
                        <p>Plazo: <span class="not-bold">2 años.</span></p>
                        <p>Comisión de gestión:</p>
                        <p class="not-bold">Clase I: 0,525%</p>
                        <p class="not-bold">Clase R: 1,05%</p>
                        <p class="not-bold">Clase D: 0,525%</p>
                        <p class="not-bold">Clase RD: 1,05%</p>
                        <p>Nivel de riesgo CNMV: <span class="not-bold">4</span></p>
                    </div>
                </div>
            </article>
        </article>
    </section>

    <section class="dunas-seleccion">
        <h4 class="title">Dunas selección</h4>
        <article class="dunas-seleccion__container">
            <div class="content">
                <figure class="image-container">
                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/fondos_seleccion_europa.png" alt="fondos seleccion europa">
                </figure>
                <div>
                    <h4>Dunas Selección <span class="texto-azul">Europa</span></h4>
                    <p>Objetivo de volatilidad: <span class="not-bold">15%, máxima 20%</span></p>
                    <p>Objetivo Rentabilidad: <span class="not-bold">Euribor + 600 pb para períodos completos de mínimo 5 años.</span></p>
                    <p>Plazo: <span class="not-bold">2 años.</span></p>
                    <p>Comisión de gestión:</p>
                    <p class="not-bold">Clase I: 0,80%</p>
                    <p class="not-bold">Clase R: 1,70%</p>
                    <p>Nivel de riesgo CNMV: <span class="not-bold">6</span></p>
                </div>
            </div>
            <div class="content">
                <figure class="image-container">
                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/fondos_seleccion_usa.png" alt="fondos seleccion usa">
                </figure>
                <div>
                    <h4>Dunas Selección <span class="texto-azul">USA</span></h4>
                    <p class="subtitle">ESG CUBIERTO</p>
                    <p>Fondo indexado de renta variable americana y gestión pasiva.</p>
                    <p> <span class="not-bold">Réplica física del índice S&P 500 ESG</span>, totalmente cubierto al Euro. Traspasable, <span class="not-bold">con domicilio fiscal en España.</span></p>
                    <p>Fondo 100% sostenible.</p>
                    <p>Comisión de gestión:</p>
                    <p class="not-bold">Clase C: 0,18%</p>
                    <p class="not-bold">Clase I: 0,20%</p>
                    <p class="not-bold">Clase R: 0,90%</p>
                    <p>Nivel de riesgo CNMV: <span class="not-bold">6</span></p>
                </div>
        </article>
        <button class="btn-center">
            <figure>
                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/btn_informes.jpg" alt="">
            </figure>
        </button>
    </section>




    <section class="equipo-gestor">
        <article class="equipo-gestor__container max-width">

            <h4 class="title">Equipo GESTOR</h4>

            <?php
            if ($isMob != 1) { ?>
                <article class="equipo-details__container">
                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Alfonso Benito</h6>
                                <p>Director de gestiónde Activos</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Director de Gestión en el Grupo Aviva España durante 10 años, anteriormente fue miembro del Comité de Dirección de Aviva Servicios Compartidos y anteriormente, responsable de riesgos financieros en el Grupo Aviva, Director Técnico y de Riesgos financieros en CajaSur Gestión. Gestor Principal del fondo Aviva Fonvalor Euro, catalogado con 5 estrellas por Morningstar, AAA por Citywire.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>José María Lecube</h6>
                                <p>Director de Renta Fija</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Inició su carrera en 1988 en GVC Sociedad de Valores y Bolsa, pasó a la banca comercial del Banco Guipuzcoano y Banesto, en el área de Mercado de Capitales y en la gestión del libro de bonos. Posteriormente, realizó funciones similares en Banque BNP-Paribas, La Caixa y Cajasur. Desde 2005 ha sido responsable de Renta Fija en AVIVA España para los Planes de Pensiones y Fondos de Inversión con más de 2.500 millones de € bajo gestión.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Carlos Gutiérrez</h6>
                                <p>Director de Renta Variable</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Trabajó 12 años en el Grupo CIMD, como Director de la Tesorería y Cuenta Propia, como Subdirector del área y como Trader Senior y gestionó la cartera propia de negociación de renta variable de Cajasur. Des 2014 a 2017 ha sido Director de Renta Variable en Aviva España al frente del equipo con el que gestionó 1.200 millones de euros a través de Fondos de Inversión, Fondos de Pensiones y Carteras Propias de Seguros.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Alberto Díez </h6>
                                <p>Gestor de Renta Fija</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Inició su carrera en el control de riesgos de Cajastur Gestión SGIIC. Posteriormente se incorporó a la divisón española de Aviva, como analista de riesgos financieros, trabajó para la matriz en Londes con una especialización en riesgo de crédito y participó en el programa de future leaders de la LSE. Fue Director de Riesgos de Liberbank Gestión SGIIC, obteniendo la certificación CFA y desde 2018 forma parte de Dunas Capital Asset Management.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Rubén López </h6>
                                <p>Gestor de Renta Variable</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Inició su carrera profesional en 2014 en la red comercial de Liberbank, para después pasar por el bróker de derivados financieros X-Trade Brokers y el área de back office y liquidación de renta variable de BNP Paribas. Se incorporó a Dunas Capital Asset Management en 2019 como gestor de renta variable, tras ocupar dicho cargo en Metagestión durante 2 años.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Jorge Herrero</h6>
                                <p>Responsable Unidad de Riesgos</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Comenzó su trayectoria profesional en el departamento de consultoría del Grupo Inverseguros en el año 2008 desempeñando las funciones de controles legales, valoración de activos y riesgos. Desde 2017 pasa a desempeñar la función de Responsable de la Unidad de Riesgos de Dunas Capital Asset Management.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Álvaro Suardiaz </h6>
                                <p>Gestor Junior de Renta Fija</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Inició su carrera profesional en el área de renta variable en intermoney Valores en 2019. Al año, entró en la consultoría de Analistas Financieros Internacionales. Mientras cursó su máster en Finanzas (MF) por AFI, colaboró en el departamento de control de gestión y riesgos del Banco Sabadell. Tras culminar el máster, se incorporó a Dunas Capital Asset Management como gestor junior de renta fija en enero de 2022.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Miguel Cacho </h6>
                                <p>Director de Inversiones Alternativas</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Con más de 14 años de experiencia en el sector, fue responsable global de la rama de transporte en Banco Santander. Ha estructurado y ejecutado numerosas operaciones en las industrias de aviation y shipping. Ha participado en multitud de operaciones de Tax equity en los sectores de cine y construcción naval.</p>
                        </div>

                    </div>

                    <div class="equipo-content">
                        <div class="equipo-info">

                            <figure class="image-container">
                                <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                            </figure>
                            <div>
                                <h6>Guillermo Giménez Sánchez </h6>
                                <p>Gestor de Inversiones Alternativas</p>
                            </div>
                        </div>
                        <div class="equipo-details">
                            <p>Se incorporó a Dunas Capital en 2020. En su etapa previa trabajó en Duff and Phelps (Londres) en valoración de inversiones de private equity y de deuda privada. Licenciado en ingeniería industrial por la Universidad Politécnica de Valencia. Máster en Finanzas por el IE.</p>
                        </div>

                    </div>
                </article>
            <?php } else { ?>
                <div class="swiper swiper-blanco">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper equipo-details__container">
                        <!-- Slides -->
                        <div class="swiper-slide equipo-content">
                           
                                <div>
                                    <div class="equipo-info">
                                        <figure class="image-container">
                                            <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                        </figure>
                                        <div>
                                            <h6>Alfonso Benito</h6>
                                            <p>Director de gestiónde Activos</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="equipo-details">
                                    <p>Director de Gestión en el Grupo Aviva España durante 10 años, anteriormente fue miembro del Comité de Dirección de Aviva Servicios Compartidos y anteriormente, responsable de riesgos financieros en el Grupo Aviva, Director Técnico y de Riesgos financieros en CajaSur Gestión. Gestor Principal del fondo Aviva Fonvalor Euro, catalogado con 5 estrellas por Morningstar, AAA por Citywire.</p>
                                </div>
                        
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">
                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>José María Lecube</h6>
                                    <p>Director de Renta Fija</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Inició su carrera en 1988 en GVC Sociedad de Valores y Bolsa, pasó a la banca comercial del Banco Guipuzcoano y Banesto, en el área de Mercado de Capitales y en la gestión del libro de bonos. Posteriormente, realizó funciones similares en Banque BNP-Paribas, La Caixa y Cajasur. Desde 2005 ha sido responsable de Renta Fija en AVIVA España para los Planes de Pensiones y Fondos de Inversión con más de 2.500 millones de € bajo gestión.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Carlos Gutiérrez</h6>
                                    <p>Director de Renta Variable</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Trabajó 12 años en el Grupo CIMD, como Director de la Tesorería y Cuenta Propia, como Subdirector del área y como Trader Senior y gestionó la cartera propia de negociación de renta variable de Cajasur. Des 2014 a 2017 ha sido Director de Renta Variable en Aviva España al frente del equipo con el que gestionó 1.200 millones de euros a través de Fondos de Inversión, Fondos de Pensiones y Carteras Propias de Seguros.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Alberto Díez </h6>
                                    <p>Gestor de Renta Fija</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Inició su carrera en el control de riesgos de Cajastur Gestión SGIIC. Posteriormente se incorporó a la divisón española de Aviva, como analista de riesgos financieros, trabajó para la matriz en Londes con una especialización en riesgo de crédito y participó en el programa de future leaders de la LSE. Fue Director de Riesgos de Liberbank Gestión SGIIC, obteniendo la certificación CFA y desde 2018 forma parte de Dunas Capital Asset Management.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Rubén López </h6>
                                    <p>Gestor de Renta Variable</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Inició su carrera profesional en 2014 en la red comercial de Liberbank, para después pasar por el bróker de derivados financieros X-Trade Brokers y el área de back office y liquidación de renta variable de BNP Paribas. Se incorporó a Dunas Capital Asset Management en 2019 como gestor de renta variable, tras ocupar dicho cargo en Metagestión durante 2 años.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Jorge Herrero</h6>
                                    <p>Responsable Unidad de Riesgos</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Comenzó su trayectoria profesional en el departamento de consultoría del Grupo Inverseguros en el año 2008 desempeñando las funciones de controles legales, valoración de activos y riesgos. Desde 2017 pasa a desempeñar la función de Responsable de la Unidad de Riesgos de Dunas Capital Asset Management.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Álvaro Suardiaz </h6>
                                    <p>Gestor Junior de Renta Fija</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Inició su carrera profesional en el área de renta variable en intermoney Valores en 2019. Al año, entró en la consultoría de Analistas Financieros Internacionales. Mientras cursó su máster en Finanzas (MF) por AFI, colaboró en el departamento de control de gestión y riesgos del Banco Sabadell. Tras culminar el máster, se incorporó a Dunas Capital Asset Management como gestor junior de renta fija en enero de 2022.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Miguel Cacho </h6>
                                    <p>Director de Inversiones Alternativas</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Con más de 14 años de experiencia en el sector, fue responsable global de la rama de transporte en Banco Santander. Ha estructurado y ejecutado numerosas operaciones en las industrias de aviation y shipping. Ha participado en multitud de operaciones de Tax equity en los sectores de cine y construcción naval.</p>
                            </div>
                        </div>

                        <div class="swiper-slide equipo-content">
                            <div class="equipo-info">

                                <figure class="image-container">
                                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/img_equipo.png" alt="equipo">
                                </figure>
                                <div>
                                    <h6>Guillermo Giménez Sánchez </h6>
                                    <p>Gestor de Inversiones Alternativas</p>
                                </div>
                            </div>
                            <div class="equipo-details">
                                <p>Se incorporó a Dunas Capital en 2020. En su etapa previa trabajó en Duff and Phelps (Londres) en valoración de inversiones de private equity y de deuda privada. Licenciado en ingeniería industrial por la Universidad Politécnica de Valencia. Máster en Finanzas por el IE.</p>
                            </div>

                        </div>




                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>

            <?php } ?>
        </article>
    </section>



    <section class="premios">
        <h4 class="title">Premios y RECONOCIMIENTOS</h4>
        <article class="premios-container">
            <div class="premio">
                <figure class="image-container">
                    <img class="icono" src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/ico_premios.svg" alt="">
                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/premio_UCITS.jpg" alt="premio UCITS">
                </figure>
                <div class="premio-content">
                    <h6>Dunas valor prudente</h6>
                    <p>DUNAS VALOR PRUDENTE Premio al mejor rendimiento y el mejor ratio de sharpe, en la categoría de Retorno Absoluto Multiactivos, a 1, 2 y 3 años. Dunas Capital Asset Management fue la única gestora española en obtener el premio en 2021.</p>
                </div>
            </div>

            <div class="premio">
                <figure class="image-container">
                    <img class="icono" src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/ico_premios.svg" alt="">
                    <img src="./img/nuevo/Desktop/03_Areas_Negocio/01_Asset_Management/premio_ABC.jpg" alt="premio ABC">
                </figure>
                <div class="premio-content">
                    <h6>Dunas valor prudente fi</h6>
                    <p>Sello Consistencia 2020 y 2021 Sello Blockbuster 2021</p>
                </div>
            </div>
        </article>

        <div class="disclaimer">
                    <div class="disclaimer-titulo">
                        <p>DISCLAIMER</p>
                        <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt=""></div>
                    </div>
                    <!-- <p class="disc-content hide">AVISO IMPORTANTE: En relación con el contenido publicado (en adelante, los “Contenidos”) en esta sección, que tenga carácter publicitario de acuerdo con la normativa…</p> -->
                    <span>AVISO IMPORTANTE: En relación con el contenido publicado (en adelante, los “Contenidos”) en esta sección, que tenga carácter publicitario de acuerdo con la normativa…<br><br></span>
                    <p class="disc-content hide">
                        AVISO IMPORTANTE: En relación con el contenido publicado (en adelante, los “Contenidos”) en esta sección, que tenga carácter publicitario de acuerdo con la normativa aplicable, Orden EHA/1717/2020, y el resto de normativa que la desarrolle y complete, realizamos las siguientes advertencias a los receptores del mismo:
                        <br><br>
                        (i) Los Contenidos tienen carácter comercial/publicitario y se suministran solo con fines informativos y no constituye ni puede interpretarse, en ningún caso, como un elemento contractual, una recomendación, un asesoramiento personalizado, una oferta o un documento legal y/o contractual. Tampoco puede considerarse como sustitutivo de los Datos Fundamentales para el Inversor (DFI), Folleto o de cualquier otra información legal preceptiva que deberá ser consultada con carácter previo a cualquier decisión de inversión, por lo que, en caso de discrepancia entre ambas, la información legal prevalece siempre. La información legal completa puede ser consultada en la sede social de Dunas Capital Asset Management SGIIC, SA, (Calle Fernán Flor 4, 4ª Planta, 28014 Madrid/ Teléfono: 91-426.38.20). y a través de la página web corporativa de Dunas Capital, en la sección “Productos”, situada en la parte superior de la página principal.
                        <br><br>
                        (ii) Los productos/servicios financieros mencionados en los Contenidos pueden no ser adecuados a las circunstancias particulares de cada receptor y, más concretamente, para sus objetivos de inversión, su posición financiera o patrimonial, su perfil de riesgo y/o su clasificación como inversor (minorista, profesional o contraparte elegible).
                        <br><br>
                        (iii) El tratamiento fiscal de cada producto financiero depende de las circunstancias individuales de cada inversor.
                        <br><br>
                        (iv) Las rentabilidades pasadas a las que se puedan haber hecho referencia en los Contenidos, no constituyen un indicador fiable de las rentabilidades futuras.
                        <br><br>
                        (v) El receptor de los contenidos debe ser consciente de que existen determinados riesgos (de mercado, de tipos de interés, de cambio de divisas, de contraparte, de concentración, entre otros) que afectan a cada producto financiero y que son condicionantes de sus rentabilidades y costes. Todos los riesgos asociados a los productos financieros se encuentran recogidos en su Folleto y en los Datos Fundamentales para el Inversor (DFI), que deberá conocer previamente a tomar cualquier decisión de inversión.
                        <br><br>
                        (vi) Los Productos financieros mencionados en los Contenidos han sido autorizados, registrados y pueden consultarse en el Organismo Supervisor, la CNMV (www.cnmv.es).
                        <br><br>
                        (vii) Ninguno de los Contenidos incluidos en esta sección, puede ser copiado, fotocopiado, reproducido en modo, forma o medio alguno, no siendo admisible su cita, mención, tratamiento o su transmisión o redistribución a terceros sin el consentimiento por escrito del Grupo Dunas Capital.
                    </p>
                </div>


    </section>


    <?php include('includes/footer.php'); ?>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/nuevo/main.js"></script>
</body>

</html>
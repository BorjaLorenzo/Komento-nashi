<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


    <title>Dunas - Home</title>
</head>

<body>
    <?php #include('metas-head.php'); 
    ?>


    
    <?php include('includes/navbar.php'); ?>
    



    <div class="container">
        <?php include('includes/sidebar.php'); ?>
        <div class="hero">

            <h1>Gestión de activos innovadora adaptada a las necesidades de los clientes</h1>
            <div class="cajas">
                <div class="caja">
                    <div class="img-container">
                        <img src="img/nuevo/Desktop/01_Home/esg_icon.svg" alt="" class="icono-caja">
                        <a href="https://takeaway-dev.es/dunas/esg.php" style="display: none;" id="manolo"></a>
                    </div>
                    <p class="titulo-caja-negra-hero">ESG</p>
                    <p class="texto-caja-negra-hero">Compromiso Social</p>
                </div>
                <div class="caja">
                    <div class="img-container">
                        <img src="img/nuevo/Desktop/01_Home/productos_icon.svg" alt="" class="icono-caja">
                        <a href="https://takeaway-dev.es/dunas/productos.php" style="display: none;"></a>
                    </div>
                    <p class="titulo-caja-negra-hero">Productos</p>
                    <p class="texto-caja-negra-hero">Gestionados <br> y administrados</p>
                    <!-- <p class="texto-caja-negra-hero">Gestionados</p>
                    <p class="texto-caja-negra-hero">y administrados</p> -->
                </div>
                <div class="caja">
                    <div class="img-container">
                        <img src="img/nuevo/Desktop/01_Home/cliente_icon.svg" alt="" class="icono-caja">
                        <a href="https://takeaway-dev.es/dunas/" style="display: none;"></a>
                    </div>
                    <p class="titulo-caja-negra-hero">Hazte Cliente</p>
                    <p class="texto-caja-negra-hero">Regístrate aquí</p>
                </div>
            </div>
        </div>
        <div class="container-small">
            <div class="container-small-width">

                <div class="s-home-1">
                    <div class="img-container-dunas">
                        <img src="img/nuevo/Desktop/01_Home/dunas_img.png" alt="">
                    </div>
                    <div class="texto-dunas">
                        <p>Somos un grupo financiero independiente español que aspira ser el referente en la gestión de activos mobiliarios e inmobiliarios para el mercado ibérico, a través de una gama de productos de alta calidad y valor añadido.</p>
                        <button class="href">Sobre nosotros <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt=""></div></button>
                        <a href="https://takeaway-dev.es/dunas/quienes-somos.php" ></a>
                    </div>
                </div>
                <div class="s-home-2">

                    <?php
                    if ($isMob != 1) { ?>
                        <div class="circulo 1">
                            <div class="circulo-interior">
                                <p>1.750 M €</p>
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
                                <p>17.800 M € </p>
                                <p>Activos Intermediados.</p>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="swiper swiper-blanco">
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
                <div class="p-datos">
                    <p>Datos a 31 de diciembre de 2021.</p>
                </div>


            </div>

        </div>
        <div class="container-small white white-video">
            <div class="container-small-width">

                <div class="s-home-3">
                    <div class="video-home">
                        <video src="img/nuevo/Desktop/01_Home/video-home.mp4" poster="img/nuevo/duna.jpg" id="video-home"></video>
                        <div>
                            <img src="img/nuevo/Desktop/01_Home/Play.svg" alt="" id="video-start">
                        </div>
                    </div>
                </div>

                <div class="s-home-4">
                    <?php
                    $ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
                    $isMob = is_numeric(strpos($ua, "mobile"));
                    if ($isMob == 1) { ?>
                        <div>
                            <img src="img/nuevo/01_Home/areas_img.png" alt="">
                        </div>
                    <?php } ?>
                    <div class="bloque">
                        <div>
                            <img src="img/nuevo/01_Home/asset_management_logo.svg" alt="">
                        </div>
                        <p>Llevamos trabajando desde 1988 para ofrecer una alternativa de inversión adaptada a las necesidades del cliente, enfocada a la consecución de retornos positivos en el medio plazo y a la preservación de capital.</p>
                        <button class="boton-colores b1 href">Asset Management <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        <a href="https://takeaway-dev.es/dunas/area-dunas-asset-management.php" ></a>
                    </div>
                    <?php
                    $ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
                    $isMob = is_numeric(strpos($ua, "mobile"));
                    if ($isMob != 1) { ?>
                        <div>
                            <img src="img/nuevo/01_Home/areas_img.png" alt="">
                        </div>
                    <?php } ?>

                    <div class="bloque">
                        <div>
                            <img src="img/nuevo/01_Home/pensiones_logo.svg" alt="">
                        </div>
                        <p>Facilitamos la gestión y administración de fondos y planes de pensiones encargándonos de todos los procedimientos necesarios como gestora.</p>
                        <button class="boton-colores b2 href">Pensiones <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        <a href="https://takeaway-dev.es/dunas/area-pensiones.php" ></a>
                    </div>
                    <div class="bloque">
                        <div>
                            <img src="img/nuevo/01_Home/real_estate_logo.svg" alt="">
                        </div>
                        <p>Creamos estrategias sólidas de inversión en todo tipo de activos inmobiliarios. Buscamos la creación de valor a través de una rigurosa selección de segmentos y activos mediante una gestión activa de la cartera.</p>
                        <button class="boton-colores b3 href">Real Estate <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        <a href="https://takeaway-dev.es/dunas/area-dunas-real-estate.php" ></a>
                    </div>

                    <div class="bloque">
                        <div>
                            <img src="img/nuevo/01_Home/real_assets_logo.svg" alt="">
                        </div>
                        <p>Contamos con un equipo especializado con más de 15 años de experiencia en la inversión de activos reales con objetivos tangibles.</p>
                        <button class="boton-colores b4 href">Real Assets <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        <a href="https://takeaway-dev.es/dunas/area-dunas-real-assets.php" ></a>
                    </div>
                    <div class="bloque">
                        <div>
                            <img src="img/nuevo/01_Home/inverseguros_logo.svg" alt="">
                        </div>
                        <p>Innovamos y personalizamos la gestión de renta fija para clientes institucionales y corporativos. Siendo un asesor personal y experto en un mercado de cambios constantes ofreciendo los productos más rentables, exclusivos y personalizados.</p>
                        <button class="boton-colores b5 href">Inverseguros S.V. <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-white.svg" alt=""></div></button>
                        <a href="https://takeaway-dev.es/dunas/area-inverseguros-sv.php" ></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small grey">
            <div class="container-small-width">
                <p class="titulo-actualidad">Actualidad Dunas Capital</p>
                <div class="bloques-actualidad">


                    <?php
                    if ($isMob != 1) { ?>

                        <div class="bloque-actualidad">
                            <img src="img/nuevo/Desktop/01_Home/Img_cabecera.jpg" alt="">
                            <div class="textos-bloque">
                                <p class="bloque-texto">Dunas Capital AM vaticina una desaceleración de la economía y se mantiene prudente en la asignación de activos.</p>
                                <p class="bloque-texto-fecha">Notas de Prensa<br>02/02/2022</p>
                            </div>
                        </div>
                        <div class="bloque-actualidad">
                            <img src="img/nuevo/Desktop/01_Home/Img_cabecera.jpg" alt="">
                            <div class="textos-bloque">
                                <p class="bloque-texto">¿Cómo evolucionan los fondos en este contexto de guerra? - Negocios TV</p>
                                <p class="bloque-texto-fecha">Medios<br>08/03/2022</p>
                            </div>
                        </div>
                        <div class="bloque-actualidad">
                            <img src="img/nuevo/Desktop/01_Home/Img_cabecera.jpg" alt="">
                            <div class="textos-bloque">
                                <p class="bloque-texto">Desayunos Capitales: Miguel Cacho, Director de Inversiones Alternativas</p>
                                <p class="bloque-texto-fecha">Blog<br>14/12/2021</p>
                            </div>
                        </div>
                </div>
            <?php } else { ?>
                <div class="swiper swiper-negro">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="bloque-actualidad bloque-primero">
                                <img src="img/nuevo/Desktop/01_Home/Img_cabecera.jpg" alt="">
                                <div class="textos-bloque">
                                    <p class="bloque-texto">Dunas Capital AM vaticina una desaceleración de la economía y se mantiene prudente en la asignación de activos.</p>
                                    <p class="bloque-texto-fecha">Notas de Prensa<br>02/02/2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bloque-actualidad bloque-primero">
                                <img src="img/nuevo/Desktop/01_Home/Img_cabecera.jpg" alt="">
                                <div class="textos-bloque">
                                    <p class="bloque-texto">¿Cómo evolucionan los fondos en este contexto de guerra? - Negocios TV</p>
                                    <p class="bloque-texto-fecha">Medios<br>08/03/2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bloque-actualidad bloque-primero">
                                <img src="img/nuevo/Desktop/01_Home/Img_cabecera.jpg" alt="">
                                <div class="textos-bloque">
                                    <p class="bloque-texto">Desayunos Capitales: Miguel Cacho, Director de Inversiones Alternativas</p>
                                    <p class="bloque-texto-fecha">Blog<br>14/12/2021</p>
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
        <div class="container-small white">
            <div class="container-small-width">

                <!-- <div class="disclaimer">
                    <div class="disc-title">
                        <h6>DISCLAIMER</h6>
                        <figure class="black-arrow">
                            <img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt="">
                        </figure>
                    </div>
                    <p class="disc-content hide">AVISO IMPORTANTE: En relación con el contenido publicado (en adelante, los “Contenidos”) en esta sección, que tenga carácter publicitario de acuerdo con la normativa…</p>

                </div> -->

                <div class="disclaimer">
                    <div class="disclaimer-titulo">
                        <p>DISCLAIMER</p>
                        <div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt=""></div>
                    </div>
                    <!-- <p class="disc-content hide">AVISO IMPORTANTE: En relación con el contenido publicado (en adelante, los “Contenidos”) en esta sección, que tenga carácter publicitario de acuerdo con la normativa…</p> -->
                    <span>AVISO IMPORTANTE: En relación con el contenido publicado (en adelante, los “Contenidos”) en esta sección, que tenga carácter publicitario de acuerdo con la normativa…<br><br></span>
                    <p class="disc-content hidden">
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
            </div>
        </div>
        <?php include('includes/footer.php') ?>
        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="js/nuevo/main.js"></script>
        <script src="js/nuevo/index.js"></script>
</body>

</html>







<?php
include 'services/class/noticias.php';
$noticias = new noticias();
$articulo = $noticias->getLastArticuloHome();
if ($articulo[0]->tipo == 2 && isset($articulo[0]->pdf)) {
    $enlace_noticia = '<a target="_blank" href="files/' . $articulo[0]->pdf . '">';
} else {
    if ($articulo[0]->tipo == 3) {
        $enlace_noticia = '<a target="_blank" href="' . $articulo[0]->enlace_externo . '">';
    } else {
        $enlace_noticia = '<a href="actualidad/' . $articulo[0]->url . '">';
    }
}
?>

<?php #include('includes/footer.php') 
?>
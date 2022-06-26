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
        <div class="hero nuestra-estrategia"></div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | Dunas | <b>Estrategia</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="s-dunas">
                    <div class="contenido-quienes-1">
                        <div>
                            <p><span>“</span>La evolución demográfica, las necesidades de los clientes, las perspectivas sobre las pensiones públicas y los cambios regulatorios favorecen el desarrollo del segmento de negocio en el que nos encontramos fuertemente posicionados<span>”</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-small grey">
        <div class="container-small-width">
            <div class="texto-sobre-iconos">
                <p>Somos una gestora de activos financieros que aspira a convertirse en la entidad de referencia para clientes institucionales en el mercado ibérico y para ello, centramos nuestra estrategia en:</p>
            </div>
            <?php if ($isMob != 1) { ?>
                <div class="iconos-estrategia">
                    <div class="bloque-icono">
                        <div>
                            <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_activos_mobiliarios_tradicionales.svg" alt="">
                        </div>
                        <p class="titulo-icono">ACTIVOS MOBILIARIOS<br>TRADICIONALES </p>
                        <p class="texto-icono">Activos Mobiliarios Tradicionales que gestionamos y administramos a través de Fondos de Inversión y Fondos de Pensiones para nuestros clientes: gestoras, inversores cualificados, compañías aseguradoras, bancos privados, etc.</p>
                    </div>
                    <div class="bloque-icono">
                        <div>
                            <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_activos_inmobiliarios.svg" alt="">
                        </div>
                        <p class="titulo-icono">ACTIVOS<br>INMOBILIARIOS</p>
                        <p class="texto-icono">Activos Inmobiliarios: contamos con un Asset Manager que gestiona activos inmobiliarios para nuestros clientes institucionales, compañías aseguradoras y fondos de private equity.</p>
                    </div>
                    <div class="bloque-icono">
                        <div>
                            <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_activos_alternativos.svg" alt="">
                        </div>
                        <p class="titulo-icono">ACTIVOS<br>ALTERNATIVOS</p>
                        <p class="texto-icono">Activos Alternativos para clientes institucionales: Activos Reales Fondo de aviones y fondos renovables Tax Equity</p>
                    </div>
                    <div class="bloque-icono">
                        <div>
                            <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_servicios_auxiliares.svg" alt="">
                        </div>
                        <p class="titulo-icono">SERVICIOS<br>AUXILIARES</p>
                        <p class="texto-icono">Sociedad de Valores: Mesa de Ejecución Renta Fija y Depositaría de Títulos.</p>
                    </div>
                </div>
            <?php } else { ?>
                <div class="swiper swiper-negro">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="bloque-icono">
                                <div>
                                    <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_activos_mobiliarios_tradicionales.svg" alt="">
                                </div>
                                <p class="titulo-icono">ACTIVOS MOBILIARIOS<br>TRADICIONALES </p>
                                <p class="texto-icono">Activos Mobiliarios Tradicionales que gestionamos y administramos a través de Fondos de Inversión y Fondos de Pensiones para nuestros clientes: gestoras, inversores cualificados, compañías aseguradoras, bancos privados, etc.</p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="bloque-icono">
                                <div>
                                    <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_activos_inmobiliarios.svg" alt="">
                                </div>
                                <p class="titulo-icono">ACTIVOS<br>INMOBILIARIOS</p>
                                <p class="texto-icono">Activos Inmobiliarios: contamos con un Asset Manager que gestiona activos inmobiliarios para nuestros clientes institucionales, compañías aseguradoras y fondos de private equity.</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bloque-icono">
                                <div>
                                    <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_activos_alternativos.svg" alt="">
                                </div>
                                <p class="titulo-icono">ACTIVOS<br>ALTERNATIVOS</p>
                                <p class="texto-icono">Activos Alternativos para clientes institucionales: Activos Reales Fondo de aviones y fondos renovables Tax Equity</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bloque-icono">
                                <div>
                                    <img src="img\nuevo\Desktop\02_Dunas_Capital\03_Estrategia\ico_servicios_auxiliares.svg" alt="">
                                </div>
                                <p class="titulo-icono">SERVICIOS<br>AUXILIARES</p>
                                <p class="texto-icono">Sociedad de Valores: Mesa de Ejecución Renta Fija y Depositaría de Títulos.</p>
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
            <div class="texto-sobre-iconos">
                <p>La innovación continua forma parte de nuestro ADN. Creemos firmemente que la tecnología nos ayuda a mejorar, a estar más cerca y a ser accesibles a nuestros clientes. Nuestra estrategia digital ya ha cumplido varios hitos:</p>
            </div>
            <div class="titulo verde">
                <p>ESTAMOS A LA CABEZA EN ESTRATEGIA DIGITAL</p>
            </div>
            <div class="lista-img estrategia">
                <div>
                    <div>
                        <p class="numero-verde">1</p>
                        <p>La digitalización del 100% de la operativa sobre fondos de inversión y planes de pensiones.</p>
                    </div>
                    <div>
                        <p class="numero-verde">2</p>
                        <p>La inclusión de la Gama de producto en las principales plataformas online de contratación de fondos.</p>
                    </div>
                    <div>
                        <p class="numero-verde">3</p>
                        <p>Ser gestora líder en la implementación de cuentas ómnibus en España tanto con Inversis como Allfunds.</p>
                    </div>
                    <div>
                        <p class="numero-verde invisible">4</p>
                        <p>Por supuesto, cualquier inversor puede acceder a toda nuestra oferta de productos y consultar el estado de sus posiciones.</p>
                    </div>

                </div>
                <div>
                    <img src="https://takeaway-dev.es/dunas/img/nuevo/Desktop/02_Dunas_Capital/03_Estrategia/img_digital.png" alt="">
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
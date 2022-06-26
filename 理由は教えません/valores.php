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
        <div class="hero valores">
        </div>
        <?php if ($isMob != 1) { ?>
            <div class="historial">
                <div class="sub-historial">
                    <p>Home | Dunas | <b>Visión y Valores</b></p>
                </div>
                <div></div>
            </div>
        <?php } ?>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="s-dunas">
                    <div class="contenido-quienes-1">
                        <div>
                            <p><span>“</span>El Grupo Dunas Capital surge como una respuesta clara y decidida a los nuevos desafíos de la gestión de activos a nivel global<span>”</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small grey">
            <div class="container-small-width">
                <div class="titulo izquierda">
                    <p>Nuestra<br>Visión</p>
                </div>
                <div class="titulo verde">
                    <p>ANALIZAMOS LA REALIDAD CON VISTAS AL FUTURO</p>
                </div>
                <div class="lista-img">
                    <div>
                        <div>
                            <p class="numero-verde">1</p>
                            <p>El envejecimiento de la población está cambiando la forma de ahorrar impulsando los negocios de acumulación.</p>
                        </div>
                        <div>
                            <p class="numero-verde">2</p>
                            <p>El nuevo marco regulatorio, más restrictivo para operadores financieros (MIFID II, Solvencia II y Basilea III), supone una oportunidad para las gestoras independientes como Dunas Capital, más competitivas y con productos de alto valor añadido.</p>
                        </div>
                        <div>
                            <p class="numero-verde">3</p>
                            <p>Los tipos de interés bajos impulsan a los inversores a tomar decisiones de inversión más alejadas de lo tradicional, buscando rentabilidad sin asumir un mayor riesgo.</p>
                        </div>
                        <div>
                            <p class="numero-verde">4</p>
                            <p>La aparición de nuevos actores como Fintech, Robo Advisors, ETFs etc ponen en tela de juicio los modelos de gestión y distribución actuales, en favor de entidades que ofrezcan una verdadera gestión global, activa y flexible.</p>
                        </div>
                        </ol>
                    </div>
                    <div>
                        <img src="https://takeaway-dev.es/dunas/img/nuevo/Desktop/02_Dunas_Capital/02_Vision_Valores/Img_vision.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-small white">
            <div class="container-small-width">
                <div class="titulo izquierda">
                    <p>Nuestros<br>Valores</p>
                </div>
                <div class="valores-1 lista-img">
                    <?php if ($isMob != 1) { ?>
                        <div class="img-lista-valores">
                            <img src="https://takeaway-dev.es/dunas/img/nuevo/Desktop/02_Dunas_Capital/02_Vision_Valores/Img_valores.png" alt="">
                        </div>
                    <?php } ?>
                    <div class="bloque-v-textos">
                        <div class="v-texto">
                            <p>INDENPENDENCIA</p>
                            <br>
                            <p>Dunas Capital, propiedad de un conjunto de socios, esta desvinculada de cualquier grupo financiero. Esto nos permite garantizar la independencia total en la gestión de activos y en nuestros análisis, sin entrar en conflictos de interés.</p>
                        </div>
                        <div class="v-texto">
                            <p>INNOVACIÓN</p>
                            <br>
                            <p>Los profesionales que formamos el equipo de Dunas Capital aportamos un conocimiento profundo de la industria de gestión de activos. Esto nos permite ser creativos a la hora de diseñar y ofrecer productos novedosos y exclusivos, que suponen oportunidades únicas en el mercado.</p>
                        </div>
                    </div>
                </div>
                <div class="valores-2">
                    <div class="bloque-v-textos">
                        <div class="v-texto">
                            <p>FLEXIBILIDAD</p>
                            <br>
                            <p>En Dunas Capital sabemos que cada cliente es único. Trabajamos para ofrecer soluciones adaptadas a sus necesidades específicas. Nuestra estructura nos permite gestionar rápida y eficazmente las peticiones de cualquiera de nuestros clientes, ya que somos multimarca y multicanal.</p>
                        </div>
                        <?php if ($isMob != 1) { ?>
                            <div class="v-texto">
                                <p>EXPERIENCIA</p>
                                <br>
                                <p>Somos profesionales con una media de más de 20 años de experiencia, con una exitosa trayectoria profesional en el sector. Tenemos un amplio conocimiento en mercados tanto locales como globales.</p>
                            </div>
                        <?php } else { ?>
                            <div class="v-texto">
                                <p>SOSTENIBILIDAD</p>
                                <br>
                                <p>En Dunas Capital estamos muy comprometidos con el respeto y la preservación del medio ambiente, con la generación de impactos positivos en la sociedad y con el buen gobierno empresarial. Hemos incorporado el concepto de sostenibilidad financiera como un factor determinante de nuestro proceso de inversión y hemos creado un comité denominado Dunas ESGreen que será responsable de velar por el buen funcionamiento interno y de vigilar que la creación de valor a largo a plazo se haga de manera responsable y sostenible en todos nuestros vehículos gestionados.</p>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="bloque-v-textos">
                        <?php if ($isMob != 1) { ?>

                            <div class="v-texto">
                                <p>SOSTENIBILIDAD</p>
                                <br>
                                <p>En Dunas Capital estamos muy comprometidos con el respeto y la preservación del medio ambiente, con la generación de impactos positivos en la sociedad y con el buen gobierno empresarial. Hemos incorporado el concepto de sostenibilidad financiera como un factor determinante de nuestro proceso de inversión y hemos creado un comité denominado Dunas ESGreen que será responsable de velar por el buen funcionamiento interno y de vigilar que la creación de valor a largo a plazo se haga de manera responsable y sostenible en todos nuestros vehículos gestionados.</p>
                            </div>
                        <?php } else { ?>
                            <div class="v-texto">
                                <p>EXPERIENCIA</p>
                                <br>
                                <p>Somos profesionales con una media de más de 20 años de experiencia, con una exitosa trayectoria profesional en el sector. Tenemos un amplio conocimiento en mercados tanto locales como globales.</p>
                            </div>
                        <?php } ?>
                        <div class="v-texto">
                            <p>TRANSPARENCIA</p>
                            <br>
                            <p>Todos nuestros procesos son trazables. En Dunas Capital trabajamos con los máximos estándares de transparencia y claridad en nuestros productos.</p>
                        </div>
                        <?php if ($isMob == 1) { ?>
                            <div class="img-lista-valores">
                                <img src="https://takeaway-dev.es/dunas/img/nuevo/Desktop/02_Dunas_Capital/02_Vision_Valores/Img_valores.png" alt="">
                            </div>
                        <?php } ?>
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
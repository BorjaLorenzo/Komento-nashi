<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/fondo-administrado-pensiones.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Document</title>

</head>



<body>

    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>

        <div class="hero fondos-pensiones"></div>

        <?php if ($isMob != 1) { ?>

            <div class="historial">

                <div class="sub-historial">

                    <p>Home | Productos | Administrados | <b>Fondos de Pensiones</b></p>

                </div>

                <div></div>

            </div>

        <?php } ?>

        <div class="container-small white">

            <div class="container-small-width">

                <div class="productos-gestionados mtb_5vh blue">

                    <p>ADMINISTRADOS</p>

                </div>

                <div class="iconos-estrategia">

                    <div class="bloque-icono">

                        <div>

                            <img src="img\nuevo\Desktop\04_Productos\03_Gestionados_Fondos_Pensiones\ico_gestionados.svg" alt="">

                        </div>

                        <p class="titulo-icono">PROFIT PREVISIÓN P.P.</p>

                        <p class="texto-icono">Fondo de pensiones con un perfil de inversión moderado con cierta tolerancia al riesgo , cuya inversión en renta variable no superará el 50% del patrimonio, pudiendo fluctuar este porcentaje sin un mínimo preestablecido en función de las condiciones del mercado. Ello coloca al fondo dentro de la categoría de Renta Variable Mixta según establece Inverco.</p>

                        <a href="" class="inline-arrow ver-fondo">Ver Fondo &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt=""></div></a>

                    </div>

                    <div class="bloque-icono">

                        <div>

                            <img src="img\nuevo\Desktop\04_Productos\03_Gestionados_Fondos_Pensiones\ico_gestionados.svg" alt="">

                        </div>

                        <p class="titulo-icono">AZVALOR GLOBAL VALUE P.P.</p>

                        <p class="texto-icono">Fondo de pensiones con una vocación inversora Renta Variable. Al menos un 75% del patrimonio del fondo se invertirá en renta variable de cualquier capitalización y sector, principalmente de emisores/mercados de la OCDE, pudiendo invertir hasta un 35% del patrimonio total en emisores/mercados de países emergentes. El resto de la inversión se invertirá en renta fija principalmente pública aunque también privada.</p>

                        <a href="" class="inline-arrow ver-fondo">Ver Fondo &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt=""></div></a>

                    </div>

                    <div class="bloque-icono">

                        <div>

                            <img src="img\nuevo\Desktop\04_Productos\03_Gestionados_Fondos_Pensiones\ico_gestionados.svg" alt="">

                        </div>

                        <p class="titulo-icono">AZVALOR CONSOLIDACION P.P.</p>

                        <p class="texto-icono">Fondo de pensiones con una vocación inversora Renta Variable Mixto. Un máximo del 50% del patrimonio total del fondo será en inversiones en renta variable de cualquier capitalización y sector, principalmente de emisores/mercados de la OCDE, pudiendo invertir hasta un 35% de dicho 50% del patrimonio en emisores/mercados de países emergentes. El resto de la inversión se invertirá en renta fija principalmente pública aunque también privada.</p>

                        <a href="" class="inline-arrow ver-fondo">Ver Fondo &nbsp;<div class="arrow-button"><img src="img/nuevo/Desktop/00_Comunes/arrow-black.svg" alt=""></div></a>

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
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/analisis.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Document</title>

</head>



<body>

    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero analisis"></div>

        <?php if ($isMob != 1) { ?>

            <div class="historial">

                <div class="sub-historial">

                    <p>Home | Documentación | <b>Notas de Análisis</b></p>

                </div>

                <div></div>

            </div>

        <?php } ?>

        <div class="container-small white">

            <div class="container-small-width mtb_5vh">

                <div class="titulo-principal book mb_5vh">

                    <p>La información financiera actualizada</p>

                </div>

                <div class="buscador mb_5vh">

                    <select name="sector" id="sector">

                        <option selected="selected" value="">SECTOR</option>

                        <option value="inverseguros_sa">Inverseguros S.A</option>

                        <option value="inverseguros_sv">Inverseguros S.V</option>

                        <option value="inverseguros_gestion">Inverseguros Gestión</option>

                        <option value="consulting_solvencia_2">Consulting y Solvencia II</option>

                        <option value="inverseguros_pensiones">Inverseguros Pensiones</option>

                        <option value="inmoseguros">Inmoseguros</option>

                        <option value="inmoseguros_tasaciones">Inmoseguros Tasaciones</option>

                        <option value="birdie_capital">Birdie Capital</option>

                        <option value="dunas_real_state">Dunas Real State</option>

                        <option value="dunas_real_assets">Dunas Real Assets</option>

                    </select>

                    <input type="text" onfocus="(this.type = 'date')" name="fecha" id="fecha" placeholder="Fecha de inicio" value="FECHA DE INICIO">

                    <input type="text" onfocus="(this.type = 'date')" name="fechafin" id="fechafin" placeholder="Fecha fin" value="FECHA DE FIN">



                    <input type="text" name="palabra" id="palabra" value="PALABRA CLAVE" placeholder="PALABRA CLAVE">



                    <?php if ($isMob != 1) { ?>

                        <div>

                            <img src="img/nuevo/Desktop/05_Actualidad/02_Medios/ico_lupa.svg" alt="">

                        </div>

                    <?php } else { ?>

                        <button class="boton-colores bb">APLICAR</button>

                    <?php } ?>

                </div>

                <div class="bloque-prensa">

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa mb_5vh">FED: ¿Bajadas de tipos para 2024? Impacto en curva.</p>

                        <p><span>Notas de Análisis</span><br>11/04/2022</p>

                    </div>

                </div>

                <?php include('includes/pagination.php'); ?>



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
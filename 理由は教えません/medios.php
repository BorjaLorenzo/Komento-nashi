<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/fonts.css">

    <link rel="stylesheet" href="css/medios.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <title>Document</title>

</head>



<body>

    <?php include('includes/navbar.php'); ?>

    <div class="container">
    <?php include('includes/sidebar.php'); ?>
        <div class="hero medios"></div>

        <?php if ($isMob != 1) { ?>

            <div class="historial">

                <div class="sub-historial">

                    <p>Home | Actualidad | <b>Medios</b></p>

                </div>

                <div></div>

            </div>

        <?php } ?>

        <div class="container-small white">

            <div class="container-small-width mtb_5vh">

                <div class="titulo-principal book mb_5vh">

                    <p>Nuestros expertos responden</p>

                </div>

                <div class="buscador mb_5vh">

                    <select name="sector" id="sector">

                        <option selected="selected" value="">SECTOR</option>

                        <option value="inverseguros_sa">DUNAS CAPITAL</option>

                        <option value="inverseguros_sv">INVERSEGUROS S.V</option>

                        <option value="inverseguros_gestion">DUNAS CAPITAL ASSET MANAGEMENT</option>

                        <option value="inverseguros_pensiones"> DUNAS CAPITAL PENSIONES</option>

                        <option value="inmoseguros">INMOSEGURO</option>

                        <option value="dunas_real_state">DUNAS REAL ESTATE</option>

                        <option value="dunas_real_assets">DUNAS REAL ASSETS</option>

                        <option value="rainforest">DUNAS CAPITAL RAINFOREST</option>

                    </select>

                    <select name="tipo" id="tipo">

                        <option selected="selected" value="">TIPO</option>

                        <option value="entrevistas">ENTREVISTAS</option>

                        <option value="articulos">ARTICULOS</option>

                        <option value="noticias">NOTICIAS</option>

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

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                    <div class="prensa mb_5vh">

                        <div>

                            <img src="img/nuevo/Desktop/04_Productos/05_Administrado_Fondos_Pensiones/absolute_impact.png" alt="">

                        </div>

                        <p class="texto-prensa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis quo veniam. Eaque, unde adipisci! Nulla deleniti tenetur cumque inventore minima praesentium, eos laudantium consequuntur, quod vitae veritatis quia maiores!</p>

                        <p><span>Medios</span><br>11/04/2022</p>

                    </div>

                </div>

                <?php include('includes/pagination.php'); ?>

                <?php if ($isMob != 1) { ?>

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
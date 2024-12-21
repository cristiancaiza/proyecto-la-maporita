<?php 

/*Variables*/
$meta_description = "Trabajamos para cumplir con las políticas ambientales de Colombia implementando buenas prácticas de producción lechera.";
$meta_keywords = "queso, lácteos, derivados lácteos, Caquetá, Colombia, Queso del Caquetá, queso artesanal";


$og_image = "img/home/queso-caqueta-hilado-artesanal.jpg";
$og_url = "https://lacteoslamaporita.com/acerca"; 

$page_title = "Política Ambiental || Industria de Lácteos, La Maporita";


/*Descripcion pagina*/

$titulo_pagina = "Política <br>Ambiental";
$descripcion_pagina = "En el camino hacia el fortalecimiento de nuestra cadena de valor, en la familia Maporita, trabajamos por aumentar la productividad con calidad, optimizando los recursos en las fincas de manera responsable, a través de buenas prácticas en la producción lechera.<br><br>La ganadería es una de las principales actividades económicas del sector agropecuario, siendo la “ganadería extensiva de pastoreo continuo”, la más utilizada, pero también, la que más afecta al medio ambiente.<br><br>Por esta razón, y queriendo dejar atrás la manera tradicional de la “ganadería extensiva”, la alianza comercial “Agromercado Los Potrillos – Industria de Lácteos La Maporita SAS”, busca promover las principales prácticas de producción ganadera, que permiten resultados de manera rápida y eficiente.<br><br>El compromiso ambiental de Industria de Lácteos La Maporita SAS, es lograr que sus proveedores de leche alcancen mayor productividad, con mayor calidad, para que sus empresas ganaderas sean sostenibles y más competitivas.<br><br>Como reconocimiento a la calidad de productos comprometidos con la conservación del medio ambiente y nuestro Piedemonte Amazónico, Industria de Lácteos La Maporita SAS, cuenta con el sello de Denominación de Origen Protegida \"Queso del Caquetá\", y el respaldo como miembros y pioneros de la Marca Colectiva QC.";

$descripcion_inf_1 = "Tras este compromiso de mantener el equilibrio en el ecosistema y brindar a sus territorios oportunidades de desarrollo agroindustrial, orientamos la producción de nuestros proveedores de manera responsable, a través de:";
$descripcion_inf_2 = "✓ Implementar un sistema de Gestión ambiental SGA que permita establecer una estructura ambiental encaminada a controlar y mitigar prácticas que puedan producir efectos negativos en el medio ambiente.";
$descripcion_inf_3 = "✓ Una adecuada clasificación de los residuos, sensibilizando a todos los actores sobre la importancia de hacerlo.";
$descripcion_inf_4 = "✓ Dar cumplimiento a las responsabilidades ambientales, enmarcadas en la legislación ambiental vigente en el país.";
$descripcion_inf_5 = "✓ Sensibilizar a nuestro personal, proveedores, contratistas y clientes, sobre el compromiso con el medio ambiente, por medio de estrategias de concientización en el consumo de los recursos ambientales, al optimizar las acciones, generando mejoras y modernización en los equipos por modelos más eficientes.";

?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="<?= $meta_keywords ?>">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:image" content="<?= $og_image ?>">
    <meta property="og:url" content="<?= $og_url ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/android-icon-192x192.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/revoulation.css">
    <link rel="stylesheet" href="css/plugins.css">

    <!-- Style Css -->
    <link rel="stylesheet" href="scss/style.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="template-color-1 template-font-1">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <?php
            include_once 'header.php';
        ?>

        <!-- Start Breadcaump Area -->
        <div class="brook-breadcaump-area bg_image--13 fullscreen breadcaump-title-bar breadcaump-title-white d-flex align-items-center pt_md--70 pt_sm--100 pb_sm--50"
            data-black-overlay="6">
            <div class="container-fluid plr--180 plr_lg--100 plr_md--50 plr_sm--50">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-12">
                        <div class="breadcaump-inner text-start">
                            <h1 class="heading heading-h1 font-60 text-white"><?= $titulo_pagina ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-12 mt_md--30 mt_sm--30">
                        <div class="row">
                            <!-- Strat Single Speach -->
                            <div class="">
                                <div class="single-motive-speach wow move-up">
                                    <div class="content politica-ambiental-txt">
                                        <p class="bk_pra heading-font pr--40 text-white"><?= $descripcion_pagina ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Speach -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->
        <!-- Page Conttent -->
        <main class="page-content">
            <!-- Start Work area -->
            <div class="brook-whatdo-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--3 textura-2">
                <div class="container">
                    <div class="row align-items-center">                        
                        <div class="col-lg-12 mt_sm--40 mt_md--40 texto-blanco">
                            <div class="bk-title--default text-start">
                                <!--<div class="bkseparator--30"></div>-->
                                <p class="wow move-up pr--40"><?= $descripcion_inf_1 ?></p>
                            </div>
                            <div class="row">
                                <!-- Start Single -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <div class="bkseparator--20"></div>
                                            <p class="wow move-up pr--40"><?= $descripcion_inf_2 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->
                                <!-- Start Single -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <div class="bkseparator--20"></div>
                                            <p class=" wow move-up pr--40"><?= $descripcion_inf_3 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->
                                 <!-- Start Single -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <div class="bkseparator--20"></div>
                                            <p class="wow move-up pr--40"><?= $descripcion_inf_4 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->
                                  <!-- Start Single -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="what-do mt--30">
                                        <div class="content">
                                            <div class="bkseparator--20"></div>
                                            <p class="wow move-up pr--40"><?= $descripcion_inf_5 ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Work area -->

            <!-- Start Call To Action -->
            <div class="brook-call-to-action bg_color--43 ptb--70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="call-content text-center text-md-start text-center">
                                <h4 class="heading heading-h4 text-black">Quiero mantenerme actualizado de novedades</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-12">
                            <div class="text-center text-md-end text-center mt_sm--30 mt_md--40 contact-form contact-form--4 yellow-color-2">
                                <form action="#">
                                    <div class="input-box">
                                        <input type="email" placeholder="Tu Correo Electrónico">
                                        <button>Subscríbete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action -->
        </main>
        <!--// Page Conttent -->
    </div>

    <?php
            include_once 'footer.php';
    ?>
    <!--// Wrapper -->
    <!-- Js Files -->
    <!-- <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script> -->
    <!-- REVOLUTION JS FILES -->
    <!-- <script src="js/jquery.themepunch.tools.min.js"></script>
    <script src="js/jquery.themepunch.revolution.min.js"></script> -->
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <!-- <script src="js/revolution.extension.actions.min.js"></script>
    <script src="js/revolution.extension.carousel.min.js"></script>
    <script src="js/revolution.extension.kenburn.min.js"></script>
    <script src="js/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution.extension.migration.min.js"></script>
    <script src="js/revolution.extension.navigation.min.js"></script>
    <script src="js/revolution.extension.parallax.min.js"></script>
    <script src="js/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution.extension.video.min.js"></script> -->
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="js/vendor/vendor.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="js/revolution.tools.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="js/revolution.extension.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/revoulation.js"></script>

</body>

</html>
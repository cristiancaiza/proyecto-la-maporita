<?php 

/*Conf siguiente y atras*/
$productos = ["quesillo.php", "queso-cuajada.php", "queso-fiesta.php", "queso-finas-hierbas.php", "queso-picado-salado.php", "queso-tipo-cheddar.php"];
$current_index = array_search(basename($_SERVER['PHP_SELF']), $productos);
$prev_index = ($current_index - 1 + count($productos)) % count($productos);
$next_index = ($current_index + 1) % count($productos);
$prev_product = $productos[$prev_index];
$next_product = $productos[$next_index];


$nombre_producto = "Queso Picado Salado";
$titulo_producto = "Queso Picado Salado La Maporita";
$descripcion_producto = "Queso prensado, no ácido, con calidad fresca, alto contenido de sal, de consistencia semidura. Es un producto de uso industrial utilizado como materia prima, no apto para el consumo humano directo.";
$presentaciones_producto = "125g, 250g, 450g, 500g y bloque de 12,5Kg. Entero - Molido.";
$rs_pdto = "RSA-0031470-2024";
$normatividad_pdto = "NTC - 750 <br> Resolución 1804 de 1989<br>Resolución 2310 de 1986";
$generalidades_pdto = "Producto lácteo obtenido al coagular la leche por acción del cuajo y la eliminación del lactosuero.";
$info_nutricional_pdto = "  • Calorías: 341 kcal <br>
                            • Grasa Total: 25 g <br>
                            • Grasa Saturada: 16 g <br>
                            • Carbohidratos Totales: 7.1 g <br>
                            • Proteína: 22 g <br>
                            • Sodio: 932 mg <br>
                            • Vitamina A: 648 μg ER <br>
                            • Calcio: 740 mg <br>
                            • Zinc: 3.4 mg";
$lugar_elab_pdto = "Producto elaborado en la planta de procesamiento INDUSTRIA DE LÁCTEOS LA MAPORITA S.A.S. Ubicada en la Calle 6A N 7-76 Barrio El Prado del municipio del Paujil-Caquetá.";
$compos_pdto = "Leche entera fresca, sal (cloruro de sodio) y cuajo.";
$pres_comercial_pdto = "• 125g, 250g, 450g, 500g y bloque de 12,5Kg.<br>• Formatos: Entero o Molido.";
$tipo_material_env_pdto = "• Bolsa plástica grado alimentario termoformable.<br>• Bolsa en polietileno de baja densidad.";
$cond_conserv_transp_pdto = "Almacenamiento en refrigeración a 4 ± 2 °C.";
$proces_alab_pdto = "1. Recepción y filtrado de la leche fresca de vaca entera.<br>2. Pruebas de plataforma a la leche, según el Decreto 616 de 2006.<br>3. Adición de cuajo, dejando reposar por 30 minutos.<br>4. Corte de la cuajada en cuadros de 2 cm x 2 cm, reposo de 10 minutos.<br>5. Adición de agua caliente a 60 °C.<br>6. Prensado con ayuda de remos.<br>7. Recolección de la cuajada en la mesa de corte.<br>8. Corte adicional en cuadros de 2 x 2 cm.<br>9. Inmersión en salmuera por 1 hora.<br>10. Prensado mecánico por 17 horas en refrigeración.<br>11. Empaque final.";
$vida_util_pdto = "30 días refrigerado entre 2 y 4°C.";
$instrucc_consum_pdto = "Materia prima base para la elaboración de productos de panadería y otras preparaciones culinarias. Una vez abierto el empaque, utilizar en el menor tiempo posible, dejando en condiciones de refrigeración debidamente tapado.";
$cat_producto = "Quesos";


?>


<!doctype html>
<html class="no-js" lang="zxx"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Queso Picado Salado || Industria de Lácteos, La Maporita</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/android-icon-192x192.png">


    <!-- CSS
	============================================ -->
    <!-- Plugins -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/revoulation.css">
    <link rel="stylesheet" href="css/plugins.css"> -->

    <!-- Style Css -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Custom Styles -->
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/revoulation.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="template-color-39 template-font-1 bg_color--3">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <?php
        include_once 'header.php';
        ?>
        <!-- Start Breadcaump Area --> 
        <div class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--133 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white">Queso Picado Salado</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->
        <!-- Page Conttent -->
        <main class="page-content">
            <!-- Start Single Product -->
            <div class="brook-single-product mt--100 mt_md--80 mt_sm--60 plr--160 plr_lg--100 plr_md--50 plr_sm--50 bg_color--3 textura-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nextprev-btn">
                            <div class="navlist">
                                <div class="navitem prev">
                                    <a id="backLink" class="text-white" href="<?= $prev_product ?>">Anterior</a>
                                </div>
                                <div class="navitem next">
                                    <a id="nextLink" class="text-white" href="<?= $next_product ?>">Siguiente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="single-product-left-side">
                            <div class="product__details__container">
                                <div class="tab_container big_img_container">
                                    <div class="big_img tab-pane fade show active" id="img1" role="tabpanel">
                                        <img class="w-100" src="img/productos/grandes/760-x-760-picado-salado.jpg" alt="Queso Picado Salado">
                                    </div>
                                </div>
                                <div class="sm_roduct_nav nav nav-tabs" role="tablist">
                                    <a class="active" id="img1-tab" data-bs-toggle="tab" href="#img1" role="tab"
                                        aria-controls="img1" aria-selected="true">
                                        <img src="img/productos/mini/210-x-210-picado-salado.jpg" alt="Queso Cuajada">
                                    </a>
                                    <!--
                                    <a id="nav-img2-tab" data-bs-toggle="tab" href="#img2" role="tab" aria-controls="img2"
                                        aria-selected="false">
                                        <img src="img/restaurant-two/product/small2.jpg" alt="gomes restaurant">
                                    </a>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--40">
                        <div class="single-product-details-side">
                            <div class="product-details">
                            <div class="inner">
                                    <div class="header">
                                        <h4 class="heading heading-h4 text-white"><?= $titulo_producto ?></h4>
                                    </div>
                                    <!--
                                    <div class="price">
                                        <p class="theme-color text-white">$112.00</p>
                                    </div>
                                    -->
                                     <!--descrip-producto-->
                                     <div class="description">
                                        <div class="bk-accordion-style--2 color-white bg_color--3" id="accordionExampl3">
                                            <div class="card">
                                                <div class="card-header" id="headingsix">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">
                                                        Descripción
                                                        </a>
                                                    </h5>
                                                </div>

                                                <div id="collapsesix" class="collapse show" aria-labelledby="headingsix" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $descripcion_producto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingseven">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                        Presentaciones
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseseven" class="collapse " aria-labelledby="headingseven" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $presentaciones_producto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingeight">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                        Registro Sanitario
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseeight" class="collapse " aria-labelledby="headingeight" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $rs_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingnine">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                                        Normatividad
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsenine" class="collapse " aria-labelledby="headingnine" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $normatividad_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingten">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                                        Generalidades
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseten" class="collapse " aria-labelledby="headingten" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $generalidades_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingeleven">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                                        Información nutricional
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseeleven" class="collapse " aria-labelledby="headingeleven" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $info_nutricional_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingtwelve">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                        Lugar de elaboración
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsetwelve" class="collapse " aria-labelledby="headingtwelve" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $lugar_elab_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingthirteen">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
                                                        Composición
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsethirteen" class="collapse " aria-labelledby="headingthirteen" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $compos_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingfourteen">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
                                                        Tipo y material de envase
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsefourteen" class="collapse " aria-labelledby="headingfourteen" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $tipo_material_env_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingfifteen">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
                                                        Condiciones de conservación y transporte
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsefifteen" class="collapse " aria-labelledby="headingfifteen" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $cond_conserv_transp_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingsixteen">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
                                                        Proceso de elaboración
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapsesixteen" class="collapse " aria-labelledby="headingsixteen" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $proces_alab_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingseventeen">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseseventeen" aria-expanded="false" aria-controls="collapseseventeen">
                                                        Vida útil estimada
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseseventeen" class="collapse " aria-labelledby="headingseventeen" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $vida_util_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingeighteen">
                                                    <h5 class="mb-0">
                                                        <a href="#" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseeighteen" aria-expanded="false" aria-controls="collapseeighteen">
                                                        Instrucciones de consumo
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseeighteen" class="collapse " aria-labelledby="headingeighteen" data-bs-parent="#accordionExampl3" style="">
                                                    <div class="card-body"><?= $instrucc_consum_pdto ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--fin descrip-producto-->
                                    </div>
                                    <div class="product-meta">
                                        <div class="meta-item">
                                            <h6 class="heading heading-h6 text-white">Categoría:</h6>
                                            <div class="item-list">
                                                <a class="text-white" href="#"><?= $cat_producto ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bkseparator--100"></div>
            <!-- End Single Product -->
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

        <?php
            include_once 'footer.php';
        ?>

    </div>
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
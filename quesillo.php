<?php 

$meta_description = "El Quesillo La Maporita es un queso fresco, de pasta hilada, semigraso y semiduro. Elaborado bajo los más altos estándares de calidad para lograr las características propias de hilado, sabor, aroma y color. Ideal para platos gourmet como pizza, gratinados y demás. Producto listo para consumo.";
$meta_keywords = "queso, lácteos, derivados lácteos, Caquetá, Colombia, Queso del Caquetá, queso artesanal";


$og_image = "img/home/queso-caqueta-hilado-artesanal.jpg";
$og_url = "https://lacteoslamaporita.com/acerca"; 


$page_title = "Quesillo | La Maporita";


/*Conf siguiente y atras*/
$productos = ["quesillo.php", "queso-cuajada.php", "queso-fiesta.php", "queso-finas-hierbas.php", "queso-picado-salado.php", "queso-tipo-cheddar.php"];
$current_index = array_search(basename($_SERVER['PHP_SELF']), $productos);
$prev_index = ($current_index - 1 + count($productos)) % count($productos);
$next_index = ($current_index + 1) % count($productos);
$prev_product = $productos[$prev_index];
$next_product = $productos[$next_index];


/*Productos descripcion*/

$nombre_producto = "Quesillo";
$titulo_producto = "Quesillo La Maporita";
$descripcion_producto = "Queso de pasta hilada, cremoso, su textura es cerrada sin ojos y se observa en capas cuando está muy fresco, de color blanco crema brillante, sabor característico. Es un alimento con un contenido de humedad y grasa alta, lo que hace un queso semigraso, semiduro. El quesillo tiene un contenido de humedad desgrasado máximo de 67% y de materia grasa en materia  seca de 52%. Producto listo para el consumo.";
$presentaciones_producto = "40g, 125g, 250g, 450g, 500g y bloque de 500g. Entero - Tajado.";
$rs_pdto = "RSA-0031470-2024";
$normatividad_pdto = "NTC - 750 <br> Resolución 1804 de 1989<br>Resolución 2310 de 1986";
$generalidades_pdto = "Queso fresco, acido, no madurado de pasta hilada, elaborado a partir de la coagulación de la leche entera y fresca por la acción del cuajo y del suero acido.";
$info_nutricional_pdto = "  • Calorías: 293 kcal <br>
                            • Grasa Total: 22 g <br>
                            • Grasa Saturada: 14 g <br>
                            • Carbohidratos Totales: 6.6 g <br>
                            • Proteína: 18 g <br>
                            • Sodio: 443 mg <br>
                            • Vitamina A: 266 μg ER <br>
                            • Calcio: 527 mg <br>
                            • Zinc: 2.7 mg";
$lugar_elab_pdto = "Producto elaborado en la planta de procesamiento INDUSTRIA DE LACTEOS LA MAPORITA S.A.S. Ubicada en la Calle 6A N 7-76 Barrio El Prado del municipio del Paujil-Caquetá Teléfono: 313 455 52 07-310 752 87 24.";
$compos_pdto = "Leche entera tresca, Lactosuero (fermento láctico), sal (cloruro de sodio), estabilizante (citrato de sodio) y cuajo.";
$pres_comercial_pdto = "• 40g, 125g, 250g, 450g, 500g y bloque de 2500g.<br>• Formatos: Entero o tajado.";
$tipo_material_env_pdto = "• Bolsa plástica de polietileno de baja densidad. <br>• Empaque al vacío. <br>• Bolsa plástica grado alimentario termoformable.";
$cond_conserv_transp_pdto = "Almacenamiento en refrigeración a 4 ± 2 °C.";
$proces_alab_pdto = "1. Recepción y filtrado de la leche fresca de vaca entera.<br>2. Pruebas de plataforma a la leche, según el Decreto 616 de 2006.<br>3. Estandarización de la acidez, calculando las cantidades de leche fresca y suero ácido mediante el método de cuadrado de Pearson, para obtener una mezcla con acidez de 45 ºD.<br>4. Adición de cuajo, según las especificaciones del fabricante, dejando reposar por 10 minutos. Luego, se aplica el suero ácido lentamente.<br>5. Corte de la cuajada en cuadros de 10 cm x 10 cm.<br>6. Desuerado y recolección de la cuajada.<br>7. Maduración de la cuajada, dejándola sobre la mesa de trabajo durante 15 minutos para que acidifique.<br>8. Hilado, calentando la cuajada hasta que se funda y forme una pasta elástica, firme y lisa, con aspecto brillante. En esta etapa se adicionan la sal y el citrato.<br>9. Moldeo y empaque del producto.";
$vida_util_pdto = "42 días refrigerado entre 2 y 4°C, en empaque al vacío.";
$instrucc_consum_pdto = "Una vez abierto el empaque, utilizar en el menor tiempo posible, dejando en condiciones de refrigeración debidamente tapado.";
$cat_producto = "Quesos";
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
    <link rel="stylesheet" href="scss/style.css">
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
                            <h2 class="heading heading-h2 font-60 text-white"><?= $nombre_producto ?></h2>
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
                                        <img class="w-100" src="img/productos/grandes/760-x-760-quesillo.jpg" alt="Quesillo">
                                    </div>
                                </div>
                                <div class="sm_roduct_nav nav nav-tabs" role="tablist">
                                    <a class="active" id="img1-tab" data-bs-toggle="tab" href="#img1" role="tab"
                                        aria-controls="img1" aria-selected="true">
                                        <img src="img/productos/mini/210-x-210-quesillo.jpg" alt="Quesillo">
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
                                    <div class="description">
                                        <p class="bk_pra text-white"><?= $descripcion_producto ?>
                                        <br><br><strong>Presentaciones:</strong> <?= $presentaciones_producto ?><br>
                                        <strong>Registro Sanitario: </strong><?= $rs_pdto ?><br>
                                        <strong>Normatividad: </strong><?= $normatividad_pdto ?><br>
                                        <strong>Generalidades: </strong><?= $generalidades_pdto ?><br>
                                        <strong>Información nutricional: </strong><br><?= $info_nutricional_pdto ?><br>
                                        <strong>Lugar de elaboración: </strong><br><?= $lugar_elab_pdto ?><br>
                                        <strong>Composición: </strong><br><?= $compos_pdto ?><br>
                                        <strong>Tipo y material de envase: </strong><br><?= $tipo_material_env_pdto ?><br>
                                        <strong>Condiciones de conservación y transporte: </strong><br><?= $cond_conserv_transp_pdto ?><br>
                                        <strong>Proceso de elaboración </strong><br><?= $proces_alab_pdto ?><br>
                                        <strong>Vida útil estimada</strong><br><?= $vida_util_pdto ?><br>
                                        <strong>Instrucciones de consumo</strong><br><?= $instrucc_consum_pdto ?><br>
                                       
                                    </p>
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
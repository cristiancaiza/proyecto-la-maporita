<?php 
/*Variables*/
$meta_description = "Somos una familia conformada por proveedores y campesinos comprometidos con el medio ambiente, que al pertenecer a las actividades económicas de Colombia más importantes, buscamos impulsar el desarrollo en nuestro municipio Paujil, Caquetá.";
$meta_keywords = "queso, lácteos, derivados lácteos, Caquetá, Colombia, Queso del Caquetá, queso artesanal";


$og_image = "img/home/queso-caqueta-hilado-artesanal.jpg";
$og_url = "https://lacteoslamaporita.com/acerca"; 

$page_title = "ALMOM | La Maporita";

/*Acerca textos*/

$txt_acerca_1 = "En ALMOM, llevamos a tu mesa el auténtico sabor de la tradición. Nuestras almojábanas son horneadas con amor y dedicación, utilizando ingredientes cuidadosamente seleccionados y una receta que ha pasado de generación en generación.<br><br>El secreto de su sabor único está en el queso con el que las elaboramos: un queso galardonado con la medalla de plata en el Premio Nacional del Queso 2024. Este reconocimiento avala su calidad y resalta el compromiso que tenemos por ofrecerte lo mejor.<br><br>Perfectas para acompañar tus comidas, compartir momentos especiales o simplemente disfrutar solas, nuestras almojábanas son la combinación ideal de tradición, calidad y un toque de excelencia.<br><br><strong>¡Descubre el placer de un bocado lleno de historia con ALMOM!</strong>";
$txt_acerca_2 = "Lunes a viernes 6:30 a.m. - 9:00 p.m.<br><br>Fin de semana y festivos 7:00 a.m. - 9:00 p.m.<br><br>Contacto 314 842 0509 / Cra. 82A #30-61 Medellín<br><br>Frente al C.C. Los Molinos entrada del Éxito<br><br>ALMOM es punto de venta autorizado para los Quesos de La Maporita en Medellín";

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

<body class="template-color-39 template-font-1 bg_color--42">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->
    <!--
    <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                    <div class=""> <img src="img/icons/brook-preloader.gif" alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div>
    -->
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <?php
            include_once 'header.php';
        ?>
        <!-- Start Breadcaump Area --> 
        <div class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--5 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white">ALMOM</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->
        <!-- Page Conttent -->
        <main class="page-content bg_color--3">
            <!-- Start Service Modern -->
            <div class="textura-1 brook-service-modern ptb--120 ptb-md--80 ptb-sm--60 bg_color--3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="modern-service">
                                <h2 class="heading heading-h2 text-white">Almojábanas de Mamá</h2>
                            </div>
                            <div class="bkseparator--20"></div>
                            <img src="img/almom/almom-medellin.jpg" alt="ALMOM" alt="ALMOM">
                        </div>
                        <div class="col-lg-7 offset-lg-1 col-12 mt_md--30 mt_sm--30">
                            <div class="modern-service wow move-up">
                                <!--<h5 class="heading heading-h5 text-white">Our story</h5>-->
                                <!--<div class="bkseparator--20"></div>-->
                                <!--<h5 class="heading heading-h5 body-color text-white line-height-1-62"></h5>-->
                                <p class="bk_pra text-white font-16"><?= $txt_acerca_1 ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="textura-2  brook-service-modern ptb--120 ptb-md--80 ptb-sm--60 bg_color--3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="modern-service">
                               <h2 class="heading heading-h2 text-white">Horario de Atención</h2>
                               <img src="img/almom/almom-medellin.jpg" alt="ALMOM">
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1 col-12 mt_md--30 mt_sm--30">
                            <div class="modern-service wow move-up">
                             <h5 class="heading heading-h5 text-white"></h5>
                                <!--<div class="bkseparator--20"></div>-->
                                <!--<h5 class="heading heading-h5 body-color text-white line-height-1-62"></h5>-->
                                
                                <p class="bk_pra text-white font-16">
                                    <?= $txt_acerca_2 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Modern -->
            <!--timeline-->
            <!--end-timeline-->
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
                                        <input type="email" placeholder="Tu e-mail">
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
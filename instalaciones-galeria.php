<?php 

/*SEO*/
$meta_description = "Somos una empresa familiar dedicada a la producción de derivados lácteos en el Caquetá. Impulsamos la industria colombiana y llevamos el mejor queso con el sello de Denominación de Origen Queso del Caquetá y la Marca Colectiva QC.";
$meta_keywords = "queso, lácteos, derivados lácteos, Caquetá, Colombia, Queso del Caquetá, queso artesanal";


$og_image = "img/home/queso-caqueta-hilado-artesanal.jpg";
$og_url = ""; 


$page_title = "Galería - Instalaciones  || Industria de Lácteos, La Maporita";

/*Galeria* */

$titulo_catGaleria = "Instalaciones"; 

$directory = 'img/galeria/instalaciones/';
$images = glob($directory . 'grande-*.jpg');

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $page_title ?></title>
    <meta name="description" content="">
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
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- css galeria -->
    <style>
        .gallery_ {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }
        .gallery_ img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>
     <!-- css end galeria -->
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
        <div class="brook-breadcaump-area pt--200 pt_md--250 pt_sm--200 pb--200 pb_md--250 pb_sm--200 bg_image--133 breadcaump-title-bar breadcaump-title-white" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white"><?= $titulo_catGaleria ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->

        <!-- Page Conttent -->
        <main class="page-content">
            

            <!-- Start Gallery Area -->
            <div class="brook-gallery-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--3 basic-thine-line bg_color--3 textura-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="gallery-wrapper gallery-grid" id="animated-thumbnials2">
                                <?php foreach ($images as $image): ?>
                                <?php
                                $thumbnail = str_replace('grande-', 'pequena-', $image);
                                $alt_text = pathinfo($image, PATHINFO_FILENAME); // Use the filename as alt text
                                ?>
                                <!-- Start Single Gallery -->
                                <a class="gallery" href="<?= $image ?>">
                                    <div class="thumb">
                                        <img src="<?= $thumbnail ?>" alt="<?= $alt_text ?>">
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="inner">
                                            <span class="ion ion-android-add"></span>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                                <!-- End Single Gallery -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Gallery Area -->
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
<?php
$blog_post = [
    'title' => 'Lácteos La Maporita en Alimentarte Food Festival 2023',
    'date' => 'Febrero 10, 2023',
    'category' => 'Categoría',
    'image' => 'img/novedades/grandes/lacteos-la-maporita-en-alimentarte-food-festival-2023-g.jpg',
    'alt' => 'Lácteos La Maporita en Alimentarte Food Festival 2023',
    'description' => 'Descubre los deliciosos quesos caqueteños con Denominación de Origen Queso del Caquetá en la edición 20 del Alimentarte Food Festival, la ventana gastronómica más importante del país.',
    'content' => '
        Alimentarte Food Festival es la vitrina gastronómica más importante del país, y en este 2023, cuenta con la participación de Industria de Lácteos La Maporita.
        <br><br>Este importante evento se celebra ininterrumpidamente, desde hace 20 años; es un espacio donde importantes restaurantes de la ciudad de Bogotá trasladan sus deliciosos platos al aire libre. Este importante evento, hace parte de la agenda de eventos de la ciudad de Bogotá, por lo que si se encuentra en la ciudad, no puede perderse este delicioso espacio en el que estaremos participando con un stand, donde los esperamos con los brazos abiertos, para que disfrute el Origen del Sabor de los quesos con Denominación de Origen, que producimos de forma amigable con el medio ambiente en el departamento del Caquetá.
        <br><br>Recuerde, del 10 al 12 de febrero, en el Parque El Virrey de la ciudad de Bogotá.
    '
];
include_once 'func-articulos.php';
?>

<!doctype html>
<html class="no-js" lang="zxx"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $blog_post['title'] ?> | La Maporita</title>
    <meta name="description" content="<?= $blog_post['description'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="queso, premios, Salón del Queso, La Maporita">
    <meta property="og:title" content="<?= $blog_post['title'] ?> | La Maporita">
    <meta property="og:description" content="<?= $blog_post['description'] ?>">
    <meta property="og:image" content="<?= $blog_post['image'] ?>">
    <meta property="og:url" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $blog_post['title'] ?> | La Maporita">
    <meta name="twitter:description" content="<?= $blog_post['description'] ?>">
    <meta name="twitter:image" content="<?= $blog_post['image'] ?>">

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

<body class="template-color-39 template-font-1 bg_color--42">
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
        <div class="brook-breadcaump-area pt--100 pt_md--100 pt_sm--100 pb--100 pb_md--250 pb_sm--100 bg_image--133 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white"><?= $blog_post['title'] ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->
        <!-- Page Conttent -->
        <main class="page-content">
            <!-- Start Blog Details -->
            <div class="brook-blog-details-area pt--150 pb--150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="blog-details-wrapper">
                                <article class="blog-post standard-post">
                                    <!-- Start Header -->
                                    <div class="header mb--40 text-center">
                                        <!--<h3 class="heading heading-h3 font-32 text-white">Why DIY Tools were Rejected by the
                                            Market?</h3>-->
                                        <div class="post-meta mt--20">
                                            <div class="post-date text-white"><?= $blog_post['date'] ?></div>
                                            <div class="post-category"><a class="text-white" href="#"><?= $blog_post['category'] ?></a></div>
                                        </div>
                                    </div>
                                    <!-- Start Thumbnail -->
                                    <div class="thumbnail mb--60">
                                        <img class="w-100" src="<?= $blog_post['image'] ?>" alt="<?= $blog_post['alt'] ?>">
                                    </div>
                                    <!-- Start Content -->
                                    <div class="content basic-dark2-line-1px pb--50 mb--35">
                                        <div class="inner">
                                            <div class="desc mt--45 mb--50">
                                                <p class="bk_pra text-white wow move-up">
                                                <?= $blog_post['content'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Footer -->
                                    <div class="blog-footer mb--85 wow move-up">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="post-tag d-flex align-items-center">
                                                    <h6 class="heading heading-h6 text-white">Etiquetas:</h6>
                                                    <div class="blog-tag-list pl--5">
                                                        <a class="text-white" href="#">quesos</a>
                                                        <a class="text-white" href="#">lacteos</a>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </article>
                                 <!-- Start Post Nav Links -->
                                 <div class="post-nav-lisnt mb--45 wow move-up">
                                    <div class="nav-item previous">
                                        <a href="<?= $prev_article['slug'] ?>">
                                            <div class="link-text">
                                                <span class="fa fa-arrow-left"></span>
                                                <p class="">Previa</p>
                                            </div>
                                            <span><?= $prev_article['title'] ?></span>
                                        </a>
                                    </div>
                                    <div class="nav-item next mt_sm--30">
                                        <a href="<?= $next_article['slug'] ?>">
                                            <div class="link-text">
                                                <p class="">Siguiente</p>
                                                <span class="fa fa-arrow-right"></span>
                                            </div>
                                            <span><?= $next_article['title'] ?></span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Post Nav Links -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Details -->

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
    <!-- <script src="vendor/modernizr-3.6.0.min.js"></script>
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
    <script src="js/plugins.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="js/revolution.tools.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="js/revolution.extension.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/revoulation.js"></script>

</body>

</html>
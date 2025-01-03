<?php
$blog_post = [
    'title' => 'Plata y Bronce en el Salón del Queso 2024',
    'date' => 'Ago 28, 2024',
    'category' => 'Categoría',
    'image' => 'img/novedades/image-blog-2do-ciclo-de-vacunacion.jpg',
    'alt' => '2do ciclo de vacunación contra la fiebre aftosa en Colombia',
    'description' => 'El Quesillo La Maporita es un queso fresco, de pasta hilada, semigraso y semiduro. Elaborado bajo los más altos estándares de calidad para lograr las características propias de hilado, sabor, aroma y color. Ideal para platos gourmet como pizza, gratinados y demás. Producto listo para consumo.',
    'content' => '
        <p>El Quesillo La Maporita es un queso fresco, de pasta hilada, semigraso y semiduro. Elaborado bajo los más altos estándares de calidad para lograr las características propias de hilado, sabor, aroma y color. Ideal para platos gourmet como pizza, gratinados y demás. Producto listo para consumo.</p>
        <p>En el Salón del Queso 2024, La Maporita ha sido galardonada con medallas de plata y bronce, destacándose entre los mejores productores de queso del país.</p>
    '
];
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
    <meta property="og:url" content="<?= /* 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] */?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $blog_post['title'] ?> | La Maporita">
    <meta name="twitter:description" content="<?= $blog_post['description'] ?>">
    <meta name="twitter:image" content="<?= $blog_post['image'] ?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/android-icon-192x192.png">

    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/revoulation.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="scss/style.css">
</head>
<body class="template-color-39 template-font-1 bg_color--42">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div id="wrapper" class="wrapper">
        <?php include_once 'header.php'; ?>
        <!-- Start Breadcaump Area --> 
        <div class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--133 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
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
        <!-- Page Content -->
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
                                            <?= $blog_post['content'] ?>
                                        </div>
                                    </div>
                                    <!-- End Content -->
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Details -->
        </main>
        <!-- End Page Content -->
    </div>
</body>
</html>
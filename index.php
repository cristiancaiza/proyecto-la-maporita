<?php 
/*Variables*/
$meta_description = "Somos una empresa familiar dedicada a la producción de derivados lácteos en el Caquetá. Impulsamos la industria colombiana y llevamos el mejor queso con el sello de Denominación de Origen Queso del Caquetá y la Marca Colectiva QC.";
$meta_keywords = "queso, lácteos, derivados lácteos, Caquetá, Colombia, Queso del Caquetá, queso artesanal";
$og_title = "Industria de Lácteos | La Maporita";
$og_description = "Empresa dedicada a la producción de derivados lácteos con Denominación de Origen en el Caquetá.";
$og_image = "img/home/queso-caqueta-hilado-artesanal.jpg";
$og_url = "https://lacteoslamaporita.com/"; 

$page_title = "Industria de Lácteos | La Maporita";

/*slider*/
$slide_src1 = "img/home/slider/slider1.jpg";
$slidethumb_src1 = "img/slider/thumb/slider-thumb-1.jpg";
$slide_alt1 = "img/home/slider/slider1.jpg";


/*Acerca*/
$img_acerca_vertical = "img/iconos/calidad-leche.png";
$img_acerca_vertical_alt = "Calidad Leche";


$txt_acerca_nosotros = "Le damos la bienvenida a Lácteos La Maporita. Somos una empresa familiar dedicada a la producción de derivados lácteos en el Caquetá, con más de 20 años en el mercado, plasmando en cada producto nuestro esfuerzo y amor, para que los colombianos tengan el placer de disfrutar una experiencia gastronómica con el sello de Denominación de Origen \"Queso del Caquetá\" y la Marca Colectiva QC, como reconocimiento a la calidad de productos comprometidos con la conservación del medio ambiente y nuestro Piedemonte Amazónico.";



/*Video Youtube*/
$video_ytube_home= "https://www.youtube.com/embed/r9_LCjhqyXw?si=aeVFAW10_7T9RxvK";
$txt_ytube_home = "Le damos la bienvenida a Lácteos La Maporita. Somos una empresa familiar dedicada a la producción de derivados lácteos en el Caquetá, con más de 20 años en el mercado, plasmando en cada producto nuestro esfuerzo y amor, para que los colombianos tengan el placer de disfrutar una experiencia gastronómica con el sello de Denominación de Origen \"Queso del Caquetá\"  y la Marca Colectiva QC, como reconocimiento a la calidad de productos comprometidos con la conservación del medio ambiente y nuestro Piedemonte Amazónico.";





$page_title = "Industria de Lácteos | La Maporita";
/*Variables*/
?>

<!doctype html>
<html lang="es" class="no-js">
<head> 
    <meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $page_title ?></title>
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta name="keywords" content="<?= $meta_keywords ?>">
    <meta property="og:title" content="<?= $og_title ?>">
    <meta property="og:description" content="<?= $og_description ?>">
    <meta property="og:image" content="<?= $og_image ?>">
    <meta property="og:url" content="url_de_la_pagina">
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
<body class="template-color-39 template-font-1 bg_color--42">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <!-- Add your site or application content here -->
    <!--REMOVE
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
        <div class="slider-revoluation">
            <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-authentic-studio"
                data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-16" data-transition="curtain-1,curtain-3,curtain-2" data-slotamount="default,default,default,default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-randomtransition="on" data-easein="default,default,default,default"
                            data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"
                            data-thumb="<?= $slidethumb_src1 ?>" data-rotate="0,0,0,0"
                            data-saveperformance="off" data-title="Slide" data-param1="01" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                            data-param10="" data-description="">
                            <!-- MAIN IMAGE   -->
                            <img src="<?= $slide_src1 ?>" alt="<?= $slide_alt1 ?>" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 2 -->
                             <!--TEXT_SLIDER
                            <div class="tp-caption   tp-resizeme" id="slide-16-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-55','-28','-28','-10']" data-fontsize="['80','60','45','30']"
                                data-lineheight="['40','20','50','34']" data-width="['800','670','620','380']"
                                data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                                data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; min-width: 630px; max-width: 630px; white-space: normal; font-size: 0px; font-weight: 700; color: #ffffff; letter-spacing: 0px;"><span class="texto-slider-home" style="font-weight:200; font-size: 40%;">Con Calidad y mucho amor</span>
                                <span style="font-size:80px; padding: 40px 0px 20px 0px; display: block;">La Maporita</span><span style="display:block; padding:20px 0px 0px 0px !important; font-weight:200; font-size: 40%;">Se convierte en un experiencia, para llevarte lo mejor de nuestra tierra Caqueteña.</span>
                            </div> -->
                            <!-- LAYER NR. 3  boton conocer mas-->
                            <a class="tp-caption rev-btn   smooth-scroll-link" href="novedades.php" target="_self" id="slide-16-layer-24"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                                data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                                data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                style="z-index: 7; min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(247,211,141);border-radius:0px 0px 0px 0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Conoce más <i class="fa fa-sharp fa-regular fa-angle-right"></i>
                            </a>
                        </li>
                        <!--slide 2-->
                        <li data-index="rs-17" data-transition="incube,incube-horizontal,turnoff-vertical,turnoff"
                            data-slotamount="default,default,default,default" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default,default,default,default" data-easeout="default,default,default,default"
                            data-masterspeed="default,default,default,default" data-thumb="img/revoulation/100x50_slider-authentic-studio-slide-02-bg.jpg"
                            data-rotate="0,0,0,0" data-saveperformance="off" data-title="Slide" data-param1="02"
                            data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""
                            data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="img/home/slider/slider1.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 5 
                            <div class="tp-caption   tp-resizeme" id="slide-17-layer-1" data-x="['center','center','center','center']"
                                data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-25','-28','-28','-10']" data-fontsize="['80','60','45','30']"
                                data-lineheight="['90','67','50','34']" data-width="['630','630','620','380']"
                                data-height="['none','135','none','none']" data-whitespace="normal" data-type="text"
                                data-responsive_offset="on" data-frames='[{"delay":700,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; min-width: 1180px; max-width: 1180px; white-space: normal; font-size: 80px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: 0px;">the food <br>
                                heaven</div>
                                -->
                            <!-- LAYER NR. 6 boton conocer mas-->
                            <a class="tp-caption rev-btn   smooth-scroll-link" href="novedades.php" target="_self" id="slide-16-layer-24"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['140','140','140','100']" data-width="160" data-height="55"
                                data-whitespace="normal" data-type="button" data-actions='' data-responsive_offset="on"
                                data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(34,34,34);transform:translateY(-3px);"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]"
                                style="z-index: 7; min-width: 160px; max-width: 160px; max-width: 55px; max-width: 55px; white-space: normal; font-size: 16px; line-height: 55px; font-weight: 700; color: #222222; letter-spacing: 0px;background-color:rgb(247,211,141);border-radius:0px 0px 0px 0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Conoce más <i class="fa fa-sharp fa-regular fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!-- Page Conttent -->
        <main class="page-content">
            <!-- Start About Area -->
            <div class="textura-1 brook-about-area pt--120 pt_md--80 pt_sm--60 bg_color--3">
                <div class="container-fluid plr--180 plr_lg--100 plr_md--50 plr_sm--50">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-thumb text-center text-lg-end pr--100 pr_md--15 pr_sm--15">
                                <img src="img/home/queso-caqueta-hilado-artesanal.jpg" alt="Queso Caqueta Hilado Artesanal" loading="lazy">
                            </div>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="about-inner authenthick-about mt_md--40 mt_sm--40">
                                <!--<h6 class="heading headin-h6 body-color text-white-50 wow move-up">Por qué elegir nuestro queso</h6>-->
                                <!--<div class="bkseparator--30"></div>-->
                                <h2 class="heading heading-h2 text-white line-height-1-25">Por qué elegir <br>nuestro queso </h2>
                                <div class="bkseparator--40"></div>
                                <hr class="separador-acerca separador-acerca-sm">
                                <div class="bkseparator--40"></div>
                                <div class="">
                                    <div class="row">
                                        <!-- Strat Single Speach -->
                                        <div class="col-lg-12 col-xl-6 col-12">
                                            <div class="single-motive-speach wow move-up animate" style="visibility: visible; opacity: 0;">
                                                <div class="icon">
                                                    <!-- Icono dentro del div.icon -->
                                                    <span class="iconos-home-1">
                                                        <img src="<?= $img_acerca_vertical ?>" alt="<?= $img_acerca_vertical_alt ?>">
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <div class="container_textos">
                                                        <h4 class="text-white">Leche de alta Calidad</h4>
                                                    </div>
                                                    <p class="bk_pra heading-font pr--40 text-white">Contamos con un clima y pasturas óptimas para la producción de leche con un alto valor nutricional.</p>
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- End Single Speach -->
                                        <!-- Strat Single Speach -->
                                        <div class="col-lg-12 col-xl-6 col-12 mt_lg--40 mt_md--30 mt_sm--30">
                                        <div class="single-motive-speach wow move-up animate" style="visibility: visible; opacity: 0;">
                                                <div class="icon">
                                                    <!-- Icono dentro del div.icon -->
                                                    <span class="iconos-home-1">
                                                        <img src="img/iconos/rentable-y-sostenible.png" alt="Rentable y Sostenible">
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <div class="container_textos">
                                                        <h4 class="text-white">Rentable y Sostenible</h4>
                                                    </div>
                                                    <p class="bk_pra heading-font pr--40 text-white">Capacitamos al campesino con buenas prácticas de ordeño, reconversión ganadera y rotación de potreros.</p>
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- End Single Speach -->
                                        <!-- Strat Single Speach -->
                                        <div class="col-lg-12 col-xl-6 col-12 mt--70 mt_lg--40 mt_md--30 mt_sm--30">
                                        <div class="single-motive-speach wow move-up animate" style="visibility: visible; opacity: 0;">
                                                <div class="icon">
                                                    <!-- Icono dentro del div.icon -->
                                                    <span class="iconos-home-1">
                                                        <img src="img/iconos/denominacion-de-origen.png" alt="Denominación de Origen">
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <div class="container_textos">
                                                        <h4 class="text-white">Denominación de Origen</h4>
                                                    </div>
                                                    <p class="bk_pra heading-font pr--40 text-white">"Queso del Caquetá", productos con denominación origen protegida.</p>
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- End Single Speach -->
                                        <!-- Strat Single Speach -->
                                        <div class="col-lg-12 col-xl-6 col-12 mt--70 mt_lg--40 mt_md--30 mt_sm--30">
                                        <div class="single-motive-speach wow move-up animate" style="visibility: visible; opacity: 0;">
                                                <div class="icon">
                                                    <!-- Icono dentro del div.icon -->
                                                    <span class="iconos-home-1">
                                                        <img src="img/iconos/gourmet.png" alt="Gourmet">
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <div class="container_textos">
                                                        <h4 class="text-white">Producto tipo Gourmet</h4>
                                                    </div>
                                                    <p class="bk_pra heading-font pr--40 text-white">Por sus altos indices de calidad, su exquisita textura y facilidad de gratinado, un producto fino en su categoría.</p>
                                                </div> 
                                            </div>
                                        </div>
                                        <!-- End Single Speach -->
                                    </div>
                                </div>
                                <div class="bkseparator--65"></div>
                                <a class="moredetails-btn text-white" href="acerca.php"><span>Conoce más</span> <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About Area -->

            <!-- Start Service Area -->
            <div class="textura-2 bk-service-area pt--90 pt_md--50 pt_sm--30 pb--120 pb_md--80 pb_sm--60 bg_color--3">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                            <div class="service service--1 theme-color text-center mt--30">
                                <div class="icons">
                                    <img src="img/home/ico-calidad.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h4>Calidad</h4>
                                    <p>La calidad de nuestros quesos comienza con la excelencia de la leche que utilizamos. Proveniente de vacas criadas bajo estrictas buenas prácticas ganaderas, garantizamos su bienestar y alimentación natural.
                                    </p>
                                    <!--<a class="service-btn" href="#"><span>Conoce más</span> <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->

                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                            <div class="service service--1 theme-color text-center mt--30">
                                <div class="icons">
                                    <img src="img/home/ico-tradicion.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h4>Tradición</h4>
                                    <p>Cada queso es una obra artesanal que honra la tradición de lo hecho a mano, reflejan el esmero y la dedicación que ponemos en cada paso, manteniendo viva la esencia de lo auténtico y natural.
                                    </p>
                                    <!--<a class="service-btn" href="#"><span>Conoce más</span> <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->

                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-12 wow move-up">
                            <div class="service service--1 theme-color text-center mt--30">
                                <div class="icons">
                                    <img src="img/home/ico-sosteniblidad.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h4>Sostenibilidad</h4>
                                    <p>Brindamos apoyo técnico y veterinario para transformar fincas locales en negocios familiares sostenibles. Junto a nuestros productores, implementamos prácticas que cuidan el medio ambiente, maximizan recursos y aseguran el bienestar animal.
                                    </p>
                                    <!--<a class="service-btn" href="#"><span>Conoce más</span> <i class="fa fa-arrow-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>

                </div>
                <!--maporita & acerca de nosotros-->
                <div class="bkseparator--40"></div>
                <div class="bkseparator--40"></div>
                <h2 class="heading heading-h2 text-white line-height-1-25">La Maporita</h2>
                    <div class="bkseparator--40"></div>
                <hr class="separador-acerca separador-acerca-lg">
                <div class="bkseparator--40"></div>
                <div class="container">
                    <div class="video-home">
                    <iframe width="560" height="315" src="<?= $video_ytube_home ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="bkseparator--40"></div>
                    <p class="font-16 text-white">
                        <?= $txt_ytube_home ?>
                    </p>
                </div>
                <div class="bkseparator--40"></div>
                <div class="bkseparator--40"></div>
                <h2 class="heading heading-h2 text-white line-height-1-25">Acerca de nosotros</h2>
                <div class="bkseparator--40"></div>
                <hr class="separador-acerca separador-acerca-lg">
            </div>
            <!-- End Service Area -->

            <!-- Start Best Service -->
            <div class="brook-service-area bg_color--1 pt--90 pt_md--50 pt_sm--30 pb--120 pb_md--80 pb_sm--60">
                <div class="row row--0 align-items-center">
                    <div class="col-lg-12 col-xl-6">
                        <div class="bext-service plr--170 plr_lg--50 plr_lp--40 plr_md--50 plr_sm--30 mt_lg--40 mb_lg--40 mt_md--40 mb_md--40 mt_sm--40 mb_sm--40">
                            <div class="content">
                                <div class="bkseparator--40"></div>
                                <h6 class="heading heading-h6 font-16 line-height-1-88 font-medium body-color">
                                <?= $txt_acerca_nosotros ?>
                                </h6>
                                <div class="bkseparator--60 bkseparator_lg--30 bkseparator_md--20 bkseparator_sm--20"></div>
                                <p class="font-16 body-color">
                                   <b> Familia Maya Arias</b><br><span>Fundadores de La Maporita</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="bext-service thumb">
                            <img src="img/home/foto-familia-home.png" alt="images">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Best Service -->
            <!-- Start Blog Area -->
            <div class="textura-2 bk-blog-area pt--50 pt_md--40 pt_sm--30 clearfix bg_color--3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bkseparator--40"></div>
                            <h2 class="heading heading-h2 text-white line-height-1-25">Novedades</h2>
                            <div class="bkseparator--40"></div>
                            <hr class="separador-acerca separador-acerca-lg">
                            <div class="bkseparator--40"></div>
                            <div class="section-title--between wow move-up">
                                <div class="section-btn mt_mobile--30">
                                    <a class="button-text" href="novedades.php"><span>Ver más</span><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--40">
                        <!-- Start Single Portfolio -->
                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12 wow move-up mt--30">
                            <div class="blog blog-style--2 creative--blog">
                                <!-- Swip Slide -->
                                <div class="thumb">
                                    <a href="novedades.php"><img src="img/home/blog/blog-1.jpg" alt="La Maporita"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="content">
                                        <h3 class="the-title"><a href="novedades.php">Día mundial de la leche</a></h3>
                                        <ul class="meta">
                                            <li>Enero 7, 2024</li>
                                            <li><a href="novedades.php">Categoría</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12 wow move-up mt--30">
                            <div class="blog blog-style--2 creative--blog">
                                <div class="thumb">
                                    <a href="novedades.php"><img src="img/home/blog/blog-4.jpg" alt="Blog Images"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="content">
                                        <h3 class="the-title"><a href="novedades.php">Unión Europea visita La Maporita</a></h3>
                                        <ul class="meta">
                                            <li>Enero 7, 2024</li>
                                            <li><a href="novedades.php">Categoría</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->
                        <!-- Start Single Portfolio -->
                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12 wow move-up mt--30">
                            <div class="blog blog-style--2 creative--blog">
                                <div class="thumb">
                                    <a href="novedades.php"><img src="img/home/blog/blog-2.jpg" alt="Blog Images"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="content">
                                        <h3 class="the-title"><a href="novedades.php">Premio Nacional del Queso 2023</a></h3>
                                        <ul class="meta">
                                            <li>Enero 7, 2024</li>
                                            <li><a href="novedades.php">Categoría</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 col-12 wow move-up mt--30">
                            <div class="blog blog-style--2 creative--blog">
                                <div class="thumb">
                                    <a href="novedades.php"><img src="img/home/blog/blog-1.jpg" alt="Blog Images"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="content">
                                        <h3 class="the-title"><a href="novedades.php">Día Mundial de la Leche</a></h3>
                                        <ul class="meta">
                                            <li>Enero 9, 2024</li>s
                                            <li><a href="novedades.php">Categoría</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio --> 
                    </div>
                </div>
            </div>
            <div class="bkseparator--40 bg_color--3"></div>
            <!-- End Blog Area --> 
            <!-- Start afiliados  -->
            <div class="bk-brand-area bg_color--1 ptb--150 ptb-md--80 ptb-sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-wrapper">
                                <div class="brand__list brand-default brand-style--1">
                                    <div class="brook-element-carousel" data-slick-options='{
                                        "spaceBetween": 15, 
                                        "slidesToShow": 5, 
                                        "slidesToScroll": 1, 
                                        "arrows": false, 
                                        "infinite": true
                                    }'
                                        data-slick-responsive='[
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":577, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":481, "settings": {"slidesToShow": 2}}
                                    ]'>

                                        <div class="brand"><a href="#"><img src="img/home/afiliados/afiliado-1.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand"><a href="#"><img src="img/home/afiliados/afiliado-2.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand"><a href="#"><img src="img/home/afiliados/afiliado-3.png"
                                                    alt="logo image"></a> </div>
                                        <div class="brand"><a href="#"><img src="img/home/afiliados/afiliado-4.png"
                                                    alt="logo image"></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- End afiliados -->
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
                                        <input type="email" placeholder="Tu correo electrónico">
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
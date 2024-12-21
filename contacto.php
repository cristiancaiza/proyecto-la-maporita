<?php

/*Variables*/
$meta_description = "Planta Caquetá: Calle 6ª No 7-76 Barrio El Prado, El Paujil Caqueta, Sede Cali: Calle 49N No 2AN-77 Barrio la Merced Teléfonos: 313 455 5207 - 310 752 8724 - 313 495 4947";
$meta_keywords = "queso, lácteos, derivados lácteos, Caquetá, Colombia, Queso del Caquetá, queso artesanal";


$og_image = "img/home/queso-caqueta-hilado-artesanal.jpg";
$og_url = "https://lacteoslamaporita.com/acerca"; 

$page_title = "Contacto || Industria de Lácteos, La Maporita";

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
    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        <?php
            include_once 'header.php';
        ?>
        <!-- Start Breadcaump Area --> 
        <div class="brook-breadcaump-area pt--300 pt_md--250 pt_sm--200 pb--300 pb_md--250 pb_sm--200 bg_image--134 breadcaump-title-bar breadcaump-title-white" data-black-overlay='5'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading heading-h2 font-60 text-white">¡Contáctenos!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->
        <!-- Page Conttent -->
        <main class="page-content">
            <!-- Start Contact Form  -->
            <div class="brook-contact-form-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--3 textura-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brook-section-title text-center mb--40">
                                <h4 class="heading heading-h4 text-white">¡Escríbanos</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="contact-form" >
                                <form id="contact-form" action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="con_name" type="text" placeholder="Nombre *">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input name="con_email" type="email" placeholder="Correo Electrónico *">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input type="text" placeholder="Número de teléfono">
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <textarea name="con_message" placeholder="Su mensaje"></textarea>
                                        </div>

                                        <div class="col-lg-12 mt--30">
                                            <input type="submit" value="Enviar mensaje">
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Form  -->

            <!--Google Map Area Start-->
            <div class="google-map-area section text-center pb--150 pb-md--80 pb-sm--60 bg_color--3 textura-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="ht-gmap3" id="htmap2" data-height="500" data-width="100%" data-zoom_enable="" data-zoom="10"
                                data-map_type="roadmap" data-map_style="style11">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Google Map Area Start-->

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>
    <!--Google Map Active-->
    <script>
        // Start Map 02
        jQuery(document).ready(function ($) {
            var gmMapDiv = $("#htmap2");

            (
                function ($) {

                    if (gmMapDiv.length) {

                        var gmHeight = gmMapDiv.attr("data-height");
                        var gmWidth = gmMapDiv.attr("data-width");
                        var gmZoomEnable = gmMapDiv.attr("data-zoom_enable");
                        var gmZoom = gmMapDiv.attr("data-zoom");
                        gmMapDiv.width(gmWidth).height(gmHeight);
                        gmMapDiv.gmap3({
                            action: "init",
                            marker: {
                                values: [{
                                    address: "40.518844, -74.377268",
                                    data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                    options: {
                                        icon: "",
                                        visible: false,
                                    }
                                }],
                                events: {
                                    click: function (marker, event, context) {
                                        if (context.data == 0) {
                                            return;
                                        }
                                        var map = $(this).gmap3("get");
                                        infowindow = $(this).gmap3({
                                            get: {
                                                name: "infowindow"
                                            }
                                        });
                                        if (infowindow) {
                                            infowindow.open(map, marker);
                                            infowindow.setContent(context.data);
                                        } else {
                                            $(this).gmap3({
                                                infowindow: {
                                                    anchor: marker,
                                                    options: {
                                                        content: context.data
                                                    }
                                                }
                                            });
                                        }
                                    }
                                }

                            },
                            overlay: {
                                values: [{
                                    address: "40.518844, -74.377268",
                                    data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                    options: {
                                        content: '<div><div class="animated-dot">' +
                                            '<div class="middle-dot"></div>' +
                                            '<div class="signal"></div>' +
                                            '<div class="signal2"></div>' + '</div></div>',
                                    }
                                }],
                                events: {
                                    click: function (overlay, event, context) {
                                        if (context.data == 0) {
                                            return;
                                        }
                                        var map = $(this).gmap3("get");
                                        infowindow = $(this).gmap3({
                                            get: {
                                                name: "infowindow"
                                            }
                                        });
                                        if (infowindow) {
                                            infowindow.open(map, overlay);
                                            infowindow.setContent(context.data);
                                        } else {
                                            $(this).gmap3({
                                                infowindow: {
                                                    anchor: overlay,
                                                    options: {
                                                        content: context.data
                                                    }
                                                }
                                            });
                                        }
                                    }
                                }
                            },
                            map: {
                                options: {
                                    zoom: parseInt(gmZoom),
                                    zoomControl: true,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    mapTypeControl: false,
                                    scaleControl: false,
                                    scrollwheel: gmZoomEnable == 'enable' ? true : false,
                                    streetViewControl: false,
                                    draggable: true,
                                    styles: [{
                                            "featureType": "water",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#e9e9e9"
                                                },
                                                {
                                                    "lightness": 17
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "landscape",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#f5f5f5"
                                                },
                                                {
                                                    "lightness": 20
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "geometry.fill",
                                            "stylers": [{
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 17
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "geometry.stroke",
                                            "stylers": [{
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 29
                                                },
                                                {
                                                    "weight": 0.2
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.arterial",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 18
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "road.local",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 16
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "poi",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#f5f5f5"
                                                },
                                                {
                                                    "lightness": 21
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "poi.park",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#dedede"
                                                },
                                                {
                                                    "lightness": 21
                                                }
                                            ]
                                        },
                                        {
                                            "elementType": "labels.text.stroke",
                                            "stylers": [{
                                                    "visibility": "on"
                                                },
                                                {
                                                    "color": "#ffffff"
                                                },
                                                {
                                                    "lightness": 16
                                                }
                                            ]
                                        },
                                        {
                                            "elementType": "labels.text.fill",
                                            "stylers": [{
                                                    "saturation": 36
                                                },
                                                {
                                                    "color": "#333333"
                                                },
                                                {
                                                    "lightness": 40
                                                }
                                            ]
                                        },
                                        {
                                            "elementType": "labels.icon",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "transit",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                    "color": "#f2f2f2"
                                                },
                                                {
                                                    "lightness": 19
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "administrative",
                                            "elementType": "geometry.fill",
                                            "stylers": [{
                                                    "color": "#fefefe"
                                                },
                                                {
                                                    "lightness": 20
                                                }
                                            ]
                                        },
                                        {
                                            "featureType": "administrative",
                                            "elementType": "geometry.stroke",
                                            "stylers": [{
                                                    "color": "#fefefe"
                                                },
                                                {
                                                    "lightness": 17
                                                },
                                                {
                                                    "weight": 1.2
                                                }
                                            ]
                                        }
                                    ],


                                }
                            }
                        });
                    }
                }
            )(jQuery);
        });
    </script>

</body>

</html>
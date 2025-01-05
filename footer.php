<?php
$directory = 'img/galeria/eventos/mini/';
$thumbnails = glob($directory . 'thumb-*.jpg');
$thumbnails = array_slice($thumbnails, 0, 6); // Limitar a 6 items
?>
<!-- Footer -->
<footer id="bk-footer" class="page-footer bg_color--3 pl--150 pr--150 pl_lg--30 pr_lg--30 pl_md--30 pr_md--30 pl_sm--5 pr_sm--5">
            <!-- Start Footer Top Area -->
            <div class="bk-footer-inner pt--150 pb--30 pt_sm--100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget text-var--2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo/logo-blanco.png" alt="Lácteos La Maporita">
                                    </a>
                                </div>
                                <div class="footer-inner">
                                    <p>Somos una industria Caqueteña, líder en la región. Contribuimos al desarrollo, conservación de nuestro territorio y posicionamiento del buen nombre del Caquetá. Somos Lácteos La Maporita, somos Denominación de Origen Queso del Caquetá.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt_mobile--40">
                            <div class="footer-widget text-var--2 menu--about">
                                <h2 class="widgettitle">Enlaces directos</h2>
                                <div class="footer-menu">
                                    <ul class="ft-menu-list bk-hover">
                                        <li><a href="acerca.php">Acerca de nosotros</a></li>
                                        <li><a href="acerca.php">Valores corporativos</a></li>                                        
                                        <li><a href="acerca.php">Servicios</a></li>
                                        <li><a href="novedades.php">Novedades</a></li>
                                        <li><a href="contacto.php">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                            <div class="footer-widget text-var--2 menu--contact">
                                <h2 class="widgettitle">Visítanos</h2>
                                <div class="footer-address">
                                    <div class="bk-hover">
                                        <p>Planta Caquetá<br>Calle 6ᵃ No 7-76 Barrio El Prado, El Paujil Caquetá</p>
                                        <p>Sede Cali<br>Calle 49N No 2AN-77 Barrio La Merced</p>
                                       <p>Teléfonos:<br><a href="#">313-455-5207 / 310-752-8724 / 313-495-4947</a></p>
                                    </div>
                                    <div class="social-share social--transparent text-white">
                                        <a target="_blank" href="https://www.facebook.com/lamaporita.lacteos"><i class="fab fa-facebook"></i></a>
                                        <a target="_blank" href="https://www.instagram.com/lamaporita01/"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                            <div class="footer-widget text-var--2 menu--instagram">
                                <h2 class="widgettitle">Galería</h2>
                                <div class="ft-instagram-list">
                                <div class="instagram-grid-wrap">
                                        <!-- Start Single Instagram -->
                                        <?php foreach ($thumbnails as $thumbnail): ?>
                                        <div class="item-grid grid-style--1">
                                            <div class="thumb">
                                                <a href="galeria.php">
                                                    <img src="<?= $thumbnail ?>" alt="Galería multimedia - La Maporita">
                                                </a>
                                                <div class="item-info">
                                                    <div class="inner">
                                                        <a href="galeria.php"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                        <!-- Start Single Instagram -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Top Area -->
            <!-- Start Copyright Area -->
            <div class="copyright ptb--50 text-var-2">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="copyright-right">
                                <p>Copyright © 2024 Lácteos La Maporita <a href="">Todos los derechos reservados</a></p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!--// Footer -->
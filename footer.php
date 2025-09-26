<!-- main-footer -->
<footer class="main-footer">
    <div class="widget-section">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-20.png');"></div>
            <div class="pattern-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-21.png');"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Sol Logo ve Açıklama -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo">
                            <a href="<?php echo esc_url(get_theme_mod('paletci_footer_logo_link', home_url('/'))); ?>">
                                <?php if ($footer_logo = get_theme_mod('paletci_footer_logo')): ?>
                                    <img src="<?php echo esc_url($footer_logo); ?>" alt="Footer Logo">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Footer Logo">
                                <?php endif; ?>
                            </a>
                        </figure>
                        <div class="text">
                            <p><?php echo esc_html(get_theme_mod('paletci_footer_desc', 'BSB Group bünyesinde faaliyet gösteren BSB Orman Ürünleri, kaliteli ve sürdürülebilir çözümler sunar.')); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Menü 1 -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget ml_50">
                        <div class="widget-title"><h3><?php echo esc_html(get_theme_mod('paletci_footer_menu1_title','Hızlı Erişim')); ?></h3></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer_1',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => '',
                                'fallback_cb'    => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Menü 2 -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget ml_30">
                        <div class="widget-title"><h3><?php echo esc_html(get_theme_mod('paletci_footer_menu2_title','Müşteri Bilgilendirme')); ?></h3></div>
                        <div class="widget-content">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer_2',
                                'menu_class'     => 'links-list clearfix',
                                'container'      => '',
                                'fallback_cb'    => false
                            ));
                            ?>
                        </div>
                    </div>
                </div>

                <!-- İletişim -->
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="contact-widget footer-widget">
                        <div class="widget-title"><h3><?php _e('İletişim','paletci'); ?></h3></div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="<?php echo esc_attr(get_theme_mod('paletci_footer_address_icon','icon-23')); ?>"></i>
                                    <?php echo esc_html(get_theme_mod('paletci_footer_address','Balçık Mh. 3265.Sk. No:28 Gebze/Kocaeli')); ?>
                                </li>
                                <li><i class="<?php echo esc_attr(get_theme_mod('paletci_footer_email_icon','icon-3')); ?>"></i>
                                    <a href="mailto:<?php echo antispambot(get_theme_mod('paletci_footer_email','info@bsbormanurunleri.com')); ?>">
                                        <?php echo esc_html(get_theme_mod('paletci_footer_email','info@bsbormanurunleri.com')); ?>
                                    </a>
                                </li>
                                <li><i class="<?php echo esc_attr(get_theme_mod('paletci_footer_phone_icon','icon-2')); ?>"></i>
                                    <a href="tel:<?php echo esc_attr(get_theme_mod('paletci_footer_phone','05325178275')); ?>">
                                        <?php echo esc_html(get_theme_mod('paletci_footer_phone','05325178275')); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom centred">
        <div class="auto-container">
            <div class="copyright">
                <p>
                    <?php echo wp_kses_post(get_theme_mod('paletci_footer_copyright','© '.date('Y').' BSB Orman Ürünleri | Tüm Hakları Saklıdır.')); ?>
                    <br>
                    <?php echo wp_kses_post(get_theme_mod('paletci_footer_designer','Tasarım: <a href="https://archyazilim.com.tr">Arch Yazılım</a>')); ?>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">En Üste Dön</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

<?php wp_footer(); ?>
</body>
</html>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- main header -->
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <div class="top-left">
                    <ul class="info clearfix">
                        <li><i class="icon-1"></i>
                            <?php echo esc_html(get_theme_mod('paletci_topbar_hours', 'P.tesi-C.tesi 08:00 - 19:00')); ?>
                        </li>
                        <li><i class="icon-2"></i>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('paletci_topbar_phone', '05325178275')); ?>">
                                <?php echo esc_html(get_theme_mod('paletci_topbar_phone', '05325178275')); ?>
                            </a>
                        </li>
                        <li><i class="icon-3"></i>
                            <a href="mailto:<?php echo antispambot(get_theme_mod('paletci_topbar_email', 'info@bsbormanurunleri.com')); ?>">
                                <?php echo esc_html(get_theme_mod('paletci_topbar_email', 'info@bsbormanurunleri.com')); ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-links clearfix">
                        <?php if ( $fb = get_theme_mod('paletci_social_facebook') ): ?>
                            <li><a href="<?php echo esc_url($fb); ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <?php endif; ?>
                        <?php if ( $ig = get_theme_mod('paletci_social_instagram') ): ?>
                            <li><a href="<?php echo esc_url($ig); ?>"><i class="fab fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if ( $ln = get_theme_mod('paletci_social_linkedin') ): ?>
                            <li><a href="<?php echo esc_url($ln); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- header-lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class'     => 'navigation clearfix',
                                'container'      => '',
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
                <ul class="menu-right-content">
                    <li class="search-box-outer search-toggler">
                        <i class="icon-4"></i>
                    </li>
                    <li class="btn-box">
                        <a href="tel:<?php echo esc_attr(get_theme_mod('paletci_header_phone','05325178275')); ?>">
                            Hemen Ara
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'navigation clearfix',
                            'container'      => '',
                        ));
                        ?>
                    </nav>
                </div>
                <ul class="menu-right-content">
                    <li class="search-box-outer search-toggler">
                        <i class="icon-4"></i>
                    </li>
                    <li class="btn-box">
                        <a href="tel:<?php echo esc_attr(get_theme_mod('paletci_header_phone','05325178275')); ?>">
                            Hemen Ara
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>

        <!-- Kendi menümüzü custom div içine basıyoruz -->
        <div class="custom-mobile-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'navigation clearfix',
                'container'      => '',
            ));
            ?>
        </div>

        <div class="contact-info">
            <h4>İletişim Bilgilerimiz</h4>
            <ul>
                <li><?php echo esc_html(get_theme_mod('paletci_footer_address','Balçık Mh. 3265.Sk. No:28 Gebze/Kocaeli')); ?></li>
                <li>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('paletci_footer_phone','05325178275')); ?>">
                        <?php echo esc_html(get_theme_mod('paletci_footer_phone','05325178275')); ?>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?php echo antispambot(get_theme_mod('paletci_footer_email','info@bsbormanurunleri.com')); ?>">
                        <?php echo esc_html(get_theme_mod('paletci_footer_email','info@bsbormanurunleri.com')); ?>
                    </a>
                </li>
            </ul>
        </div>

        <div class="social-links">
            <ul class="clearfix">
                <?php if ( $fb = get_theme_mod('paletci_social_facebook') ): ?>
                    <li><a href="<?php echo esc_url($fb); ?>"><span class="fab fa-facebook-square"></span></a></li>
                <?php endif; ?>
                <?php if ( $ig = get_theme_mod('paletci_social_instagram') ): ?>
                    <li><a href="<?php echo esc_url($ig); ?>"><span class="fab fa-instagram"></span></a></li>
                <?php endif; ?>
                <?php if ( $ln = get_theme_mod('paletci_social_linkedin') ): ?>
                    <li><a href="<?php echo esc_url($ln); ?>"><span class="fab fa-linkedin"></span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
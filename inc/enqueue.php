<?php
// Doğrudan erişim engeli
if ( ! defined('ABSPATH') ) {
    exit;
}

function paletci_enqueue_assets() {
    $theme   = wp_get_theme();
    $version = $theme->get('Version');

    /* ---------------------------
     * Google Fonts
     * --------------------------- */
    wp_enqueue_style(
        'paletci-googlefonts-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'paletci-googlefonts-jost',
        'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        [],
        null
    );

    /* ---------------------------
     * CSS
     * --------------------------- */
    $css_path = get_template_directory() . '/assets/css/style.css';
    $style_version = file_exists($css_path) ? filemtime($css_path) : $version; // cache busting

    wp_enqueue_style('paletci-fontawesome', get_template_directory_uri() . '/assets/css/font-awesome-all.css', [], $version, 'all');
    wp_enqueue_style('paletci-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', [], $version, 'all');
    wp_enqueue_style('paletci-owl', get_template_directory_uri() . '/assets/css/owl.css', [], $version, 'all');
    wp_enqueue_style('paletci-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', [], $version, 'all');
    wp_enqueue_style('paletci-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', [], $version, 'all');
    wp_enqueue_style('paletci-animate', get_template_directory_uri() . '/assets/css/animate.css', [], $version, 'all');
    wp_enqueue_style('paletci-nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', [], $version, 'all');
    wp_enqueue_style('paletci-color', get_template_directory_uri() . '/assets/css/color.css', [], $version, 'all');
    wp_enqueue_style('paletci-elpath', get_template_directory_uri() . '/assets/css/elpath.css', [], $version, 'all');

    // Ana stil
    wp_enqueue_style('paletci-style', get_template_directory_uri() . '/assets/css/style.css', [], $style_version, 'all');

    // Elements CSS (component bazlı)
    $elements = [
        'banner',
        'feature',
        'about',
        'service',
        'chooseus',
        'projects',
        'testimonial',
        'working-process',
        'funfact',
        'expertise',
        'news'
    ];
    foreach ( $elements as $el ) {
        wp_enqueue_style("paletci-$el", get_template_directory_uri() . "/assets/css/elements-css/$el.css", [], $version, 'all');
    }

    wp_enqueue_style('paletci-responsive', get_template_directory_uri() . '/assets/css/responsive.css', [], $version, 'all');

    /* ---------------------------
     * JS
     * --------------------------- */
    wp_enqueue_script('jquery');

    wp_enqueue_script('paletci-popper', get_template_directory_uri() . '/assets/js/popper.min.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery', 'paletci-popper'], $version, true);
    wp_enqueue_script('paletci-owl', get_template_directory_uri() . '/assets/js/owl.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-wow', get_template_directory_uri() . '/assets/js/wow.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-validation', get_template_directory_uri() . '/assets/js/validation.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-appear', get_template_directory_uri() . '/assets/js/appear.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-scrollbar', get_template_directory_uri() . '/assets/js/scrollbar.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-isotope', get_template_directory_uri() . '/assets/js/isotope.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', ['jquery'], $version, true);
    wp_enqueue_script('paletci-parallax', get_template_directory_uri() . '/assets/js/parallax-scroll.js', ['jquery'], $version, true);

    // Ana script
    wp_enqueue_script('paletci-script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], $version, true);

    /* ---------------------------
     * Koşullu script örneği (gereken sayfalarda)
     * Örn: sadece iletişim sayfasında harita için
     * --------------------------- */
    if ( is_page('iletisim') ) {
        wp_enqueue_script('paletci-gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', ['jquery'], $version, true);
        wp_enqueue_script('paletci-map-helper', get_template_directory_uri() . '/assets/js/map-helper.js', ['jquery', 'paletci-gmaps'], $version, true);
    }

    // Ürün filtreleme gibi şeyler sadece shop sayfalarında
    if ( function_exists('is_shop') && ( is_shop() || is_product_category() ) ) {
        wp_enqueue_script('paletci-product-filter', get_template_directory_uri() . '/assets/js/product-filter.js', ['jquery'], $version, true);
    }
}
add_action('wp_enqueue_scripts', 'paletci_enqueue_assets');
<?php
// === Tema Kurulum Fonksiyonu ===
function paletci_theme_setup() {

    // Temel Tema Destekleri
    add_theme_support('title-tag'); // <title> otomatik
    add_theme_support('post-thumbnails'); // Öne çıkan görseller
    add_theme_support('custom-logo'); // Logo desteği
    add_theme_support('customize-selective-refresh-widgets'); // Customizer desteği
    add_theme_support('automatic-feed-links'); // RSS otomatik ekle
    add_theme_support('woocommerce'); // WooCommerce desteği

    // Çeviri Desteği
    load_theme_textdomain('paletci', get_template_directory() . '/languages');

    // Menü Kayıtları
    register_nav_menus([
        'primary' => __('Ana Menü', 'paletci'),
        'footer'  => __('Alt Menü', 'paletci'),
    ]);
}
add_action('after_setup_theme', 'paletci_theme_setup');


// === Widget Alanları ===
function paletci_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Sol - Logo & Açıklama', 'paletci'),
        'id'            => 'footer-left',
        'before_widget' => '<div id="%1$s" class="footer-widget logo-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Orta 1 - Hızlı Erişim', 'paletci'),
        'id'            => 'footer-mid-1',
        'before_widget' => '<div id="%1$s" class="footer-widget links-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Orta 2 - Bilgilendirme', 'paletci'),
        'id'            => 'footer-mid-2',
        'before_widget' => '<div id="%1$s" class="footer-widget links-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Sağ - İletişim', 'paletci'),
        'id'            => 'footer-right',
        'before_widget' => '<div id="%1$s" class="footer-widget contact-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Alt - Telif Hakkı', 'paletci'),
        'id'            => 'footer-bottom',
        'before_widget' => '<div id="%1$s" class="footer-bottom-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ]);
}
add_action('widgets_init', 'paletci_widgets_init');
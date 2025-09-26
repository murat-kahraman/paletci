<?php
// Doğrudan dosya erişimini engelle
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Tema modüllerini dahil et
 * Tema yapısını düzenli ve modüler tutmak için
 * /inc klasöründeki dosyaları burada yüklüyoruz.
 */

// Tema Temel Ayarları (destekler, menüler vb.)
require_once get_template_directory() . '/inc/setup.php';

// CSS & JS Dosyaları (enqueue)
require_once get_template_directory() . '/inc/enqueue.php';

// WordPress Customizer Ayarları (özelleştirici ayarlar)
require_once get_template_directory() . '/inc/customizer.php';

// Ek Güvenlik Ayarları
require_once get_template_directory() . '/inc/security.php';
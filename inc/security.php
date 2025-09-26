<?php
// WordPress sürümünü gizle
remove_action('wp_head', 'wp_generator');

// XML-RPC’i kapat
add_filter('xmlrpc_enabled', '__return_false');

// Login hata mesajlarını gizle (özel mesaj döndürüyoruz)
add_filter('login_errors', function() {
    return __('Geçersiz giriş bilgisi.', 'paletci');
});
<?php
if ( ! defined('ABSPATH') ) {
    exit;
}

function paletci_customize_register($wp_customize) {

    /*
     * ANA PANEL TANIMI
     */
    $wp_customize->add_panel('paletci_theme_options', [
        'title'    => __('Paletçi Tema Ayarları', 'paletci'),
        'priority' => 10,
    ]);

    /*
     * HEADER ÜST BAR
     */
    $wp_customize->add_section('paletci_header_top', [
        'title' => __('Header Üst Bar', 'paletci'),
        'panel' => 'paletci_theme_options',
    ]);
    $wp_customize->add_setting('paletci_topbar_hours', [
        'default' => 'P.tesi-C.tesi 08:00 - 19:00',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('paletci_topbar_hours', [
        'label' => __('Çalışma Saatleri', 'paletci'),
        'section' => 'paletci_header_top',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('paletci_topbar_phone', [
        'default' => '05325178275',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('paletci_topbar_phone', [
        'label' => __('Telefon', 'paletci'),
        'section' => 'paletci_header_top',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('paletci_topbar_email', [
        'default' => 'info@site.com',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('paletci_topbar_email', [
        'label' => __('E-Posta', 'paletci'),
        'section' => 'paletci_header_top',
        'type' => 'email',
    ]);

    // Sosyal medya (Facebook, Instagram, LinkedIn)
    foreach (['facebook'=>'Facebook URL','instagram'=>'Instagram URL','linkedin'=>'LinkedIn URL'] as $key=>$label) {
        $wp_customize->add_setting("paletci_social_$key", [
            'sanitize_callback'=>'esc_url_raw'
        ]);
        $wp_customize->add_control("paletci_social_$key", [
            'label'=>__($label,'paletci'),
            'section'=>'paletci_header_top',
            'type'=>'url'
        ]);
    }

    /*
     * HEADER ANA MENÜ
     */
    $wp_customize->add_section('paletci_header_main', [
        'title' => __('Header Ana Menü','paletci'),
        'panel' => 'paletci_theme_options'
    ]);
    $wp_customize->add_setting('paletci_header_phone', [
        'default'=>'05325178275',
        'sanitize_callback'=>'sanitize_text_field'
    ]);
    $wp_customize->add_control('paletci_header_phone', [
        'label'=>__('Hemen Ara Telefonu','paletci'),
        'section'=>'paletci_header_main',
        'type'=>'text'
    ]);

    /*
     * FOOTER
     */
    $wp_customize->add_section('paletci_footer_section', [
        'title' => __('Footer Ayarları', 'paletci'),
        'panel' => 'paletci_theme_options',
    ]);

    // Footer Logo
    $wp_customize->add_setting('paletci_footer_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'paletci_footer_logo',[
        'label'=>__('Footer Logo','paletci'),
        'section'=>'paletci_footer_section',
    ]));

    $wp_customize->add_setting('paletci_footer_logo_link',[
        'default'=> home_url('/'),
        'sanitize_callback'=>'esc_url_raw'
    ]);
    $wp_customize->add_control('paletci_footer_logo_link',[
        'label'=>__('Logo Link','paletci'),
        'section'=>'paletci_footer_section',
        'type'=>'url'
    ]);

    // Açıklama
    $wp_customize->add_setting('paletci_footer_desc',[
        'default'=>'Kısa firma açıklaması...',
        'sanitize_callback'=>'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('paletci_footer_desc',[
        'label'=>__('Footer Açıklama','paletci'),
        'section'=>'paletci_footer_section',
        'type'=>'textarea'
    ]);

    // Menü 1
    $wp_customize->add_setting('paletci_footer_menu1_title',['default'=>'Hızlı Erişim','sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control('paletci_footer_menu1_title',['label'=>__('Menü 1 Başlık','paletci'),'section'=>'paletci_footer_section']);
    $wp_customize->add_setting('paletci_footer_menu1_links',[
        'default'=>"Ana Sayfa\nHakkımızda\nÜrünlerimiz\nBlog\nİletişim",
        'sanitize_callback'=>'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('paletci_footer_menu1_links',['label'=>__('Menü 1 Linkleri (her satır 1 satır)','paletci'),'section'=>'paletci_footer_section','type'=>'textarea']);

    // Menü 2
    $wp_customize->add_setting('paletci_footer_menu2_title',['default'=>'Müşteri Bilgilendirme','sanitize_callback'=>'sanitize_text_field']);
    $wp_customize->add_control('paletci_footer_menu2_title',['label'=>__('Menü 2 Başlık','paletci'),'section'=>'paletci_footer_section']);
    $wp_customize->add_setting('paletci_footer_menu2_links',[
        'default'=>"Kullanım Koşulları\nGizlilik Politikası\nÇerez Politikası\nKVKK\nSSS",
        'sanitize_callback'=>'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('paletci_footer_menu2_links',['label'=>__('Menü 2 Linkleri','paletci'),'section'=>'paletci_footer_section','type'=>'textarea']);

    // İletişim Bilgileri
    $fields = [
        'address'=>['Adres','icon-23'],
        'email'=>['E-posta','icon-3'],
        'phone'=>['Telefon','icon-2'],
    ];
    foreach ($fields as $key=>$info){
        $wp_customize->add_setting("paletci_footer_$key",['default'=>($key=='address'?'Balçık Mh. 3265.Sk. No:28 Gebze/Kocaeli':($key=='email'?'info@bsbormanurunleri.com':'05325178275')),'sanitize_callback'=>'sanitize_text_field']);
        $wp_customize->add_control("paletci_footer_$key",['label'=>__($info[0],'paletci'),'section'=>'paletci_footer_section','type'=>'text']);
        $wp_customize->add_setting("paletci_footer_{$key}_icon",['default'=>$info[1],'sanitize_callback'=>'sanitize_text_field']);
        $wp_customize->add_control("paletci_footer_{$key}_icon",['label'=>__($info[0].' İkonu CSS Class','paletci'),'section'=>'paletci_footer_section','type'=>'text']);
    }

    // Telif
    $wp_customize->add_setting('paletci_footer_copyright',['default'=>'© '.date('Y').' BSB Orman Ürünleri | Tüm Hakları Saklıdır.','sanitize_callback'=>'wp_kses_post']);
    $wp_customize->add_control('paletci_footer_copyright',['label'=>__('Telif Metni','paletci'),'section'=>'paletci_footer_section','type'=>'textarea']);

    // Tasarımcı
    $wp_customize->add_setting('paletci_footer_designer',['default'=>'Tasarım: <a href="https://archyazilim.com.tr">Arch Yazılım</a>','sanitize_callback'=>'wp_kses_post']);
    $wp_customize->add_control('paletci_footer_designer',['label'=>__('Tasarımcı','paletci'),'section'=>'paletci_footer_section','type'=>'textarea']);

    // Arkaplan resmi
    $wp_customize->add_setting('paletci_footer_bg',[
        'default'=>get_template_directory_uri().'/assets/images/footer-bg.jpg',
        'sanitize_callback'=>'esc_url_raw'
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'paletci_footer_bg',[
        'label'=>__('Footer Arka Plan Resmi','paletci'),
        'section'=>'paletci_footer_section'
    ]));
}
add_action('customize_register','paletci_customize_register');

function paletci_customizer_css(){ ?>
  <style>
    .main-footer {
      background: url('<?php echo esc_url(get_theme_mod('paletci_footer_bg')); ?>') no-repeat center center;
      background-size: cover;
      color:#fff;
    }
    .main-footer h3,
    .main-footer p,
    .main-footer li,
    .main-footer a {color:#fff;}
    .main-footer a:hover{color:var(--primary-color);}
  </style>
<?php }
add_action('wp_head','paletci_customizer_css');
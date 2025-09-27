<?php
/*
 * Template Name: İletişim Sayfası
 */
get_header();
?>

<!-- page-title -->
<section class="page-title centred">
    <div class="bg-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/page-title.jpg);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1><?php the_title(); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo home_url(); ?>">Ana Sayfa</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<!-- feature-style-three -->
<section class="feature-style-three p_relative centred">
    <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shape/shape-31.png);"></div>
    <div class="auto-container">
        <div class="sec-title mb_100">
            <span class="sub-title">İletişim Bilgilerimiz</span>
            <h2>Bize Ulaşın</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-48"></i></div>
                        <h3>Firma Adresimiz</h3>
                        <p><?php echo nl2br(esc_html(get_theme_mod('paletci_footer_address',"Balçık Mh. 3265.Sk. No:28\nGebze/Kocaeli"))); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-49"></i></div>
                        <h3>E-posta Adreslerimiz</h3>
                        <p>
                            <a href="mailto:<?php echo antispambot(get_theme_mod('paletci_footer_email','info@bsbormanurunleri.com')); ?>">
                                <?php echo esc_html(get_theme_mod('paletci_footer_email','info@bsbormanurunleri.com')); ?>
                            </a><br/>
                            <a href="mailto:sales@bsbormanurunleri.com.tr">sales@bsbormanurunleri.com.tr</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-three">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-50"></i></div>
                        <h3>Telefon Numaramız</h3>
                        <p>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('paletci_footer_phone','05325178275')); ?>">
                                <?php echo esc_html(get_theme_mod('paletci_footer_phone','05325178275')); ?>
                            </a> (7/24)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-three end -->


<!-- contact-style-two -->
<section class="contact-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                <div class="content-box mr_70">
                    <div class="sec-title mb_35">
                        <span class="sub-title">Mesaj Yollayınız</span>
                        <h3>Bizimle iletişime geçiniz</h3>
                        <p class="mt_20">Formumuzu doldurarak isteklerinizi iletebilirsiniz</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                <div class="form-inner">

                    <!-- Form -->
                    <form method="post" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 form-group">
                                <input type="text" name="cf_name" placeholder="Adınız Soyadınız" required>
                            </div>
                            <div class="col-lg-6 col-md-6 form-group">
                                <input type="email" name="cf_email" placeholder="E-posta adresiniz" required>
                            </div>
                            <div class="col-lg-6 col-md-6 form-group">
                                <input type="text" name="cf_phone" placeholder="Telefonunuz">
                            </div>
                            <div class="col-lg-6 col-md-6 form-group">
                                <input type="text" name="cf_subject" placeholder="Konu">
                            </div>
                            <div class="col-lg-12 form-group">
                                <textarea name="cf_message" placeholder="Mesajınız" required></textarea>
                            </div>
                            <div class="col-lg-12 form-group message-btn">
                                <button class="theme-btn theme-btn-one" type="submit" name="cf_submitted">Formu Gönder</button>
                            </div>
                        </div>
                    </form>

                    <!-- Başarılı mesaj -->
                    <?php if (isset($_POST['cf_submitted'])): ?>
                        <div class="alert alert-success mt-3">✅ Mesajınız başarıyla gönderildi.</div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-style-two end -->


<!-- google-map-section -->
<section class="google-map-section">
    <div class="map-inner p_relative d_block">
        <div 
            class="google-map" 
            id="contact-google-map" 
            data-map-lat="40.712776" 
            data-map-lng="-74.005974" 
            data-icon-path="<?php echo get_template_directory_uri(); ?>/assets/images/icons/map-marker.png"  
            data-map-title="Gebze, Kocaeli, TÜRKİYE" 
            data-map-zoom="12" 
            data-markers='{
                "marker-1": [40.712776, -74.005974, "<h4>Merkez Ofis</h4><p>Gebze/Kocaeli</p>","<?php echo get_template_directory_uri(); ?>/assets/images/icons/map-marker.png"]
            }'></div>
    </div>
</section>
<!-- google-map-section end -->

<?php get_footer(); ?>
<?php
/*
 * Template Name: Hakkımızda Sayfası
 */
get_header();
?>

<!-- page-title breadcrumbs -->
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
<!-- page-title breadcrumbs end -->

<!-- about-section -->
<section class="about-section p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_one">
                    <div class="image-box p_relative pr_50 mr_30">
                        <figure class="image image-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/about-1.jpg" alt=""></figure>
                        <figure class="image image-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/about-2.jpg" alt=""></figure>
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&t=28s" class="lightbox-image"><i class="icon-10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_one">
                    <div class="content-box p_relative ml_30">
                        <div class="sec-title mb_25">
                            <h2>Hakkımızda</h2>
                        </div>
                        <div class="text mb_35">
                            <p>BSB Group bünyesinde faaliyet gösteren BSB Orman Ürünleri, orman ürünleri sektöründe kaliteli ve sürdürülebilir çözümler sunan lider bir şirkettir...</p>
                        </div>

                        <div class="inner-box mb_35">
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3>Çözüm Odaklı</h3>
                                <p>Müşteri ihtiyacına özel hızlı ve etkili çözümler sunarız.</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3>99.99% Başarı</h3>
                                <p>Siparişlerinizi tam zamanında ve eksiksiz ulaştırırız.</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3>İhtiyaca Özel Ölçü</h3>
                                <p>Standart paletlerden ziyade ihtiyaca göre ölçülendirme yaparız.</p>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-11"></i></div>
                                <h3>2. Elde Hijyenik Ürünler</h3>
                                <p>2. el paletlerde de ihtiyacınızı karşılama konusunda hizmetinizdeyiz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->

<!-- misyon & vizyon -->
<section class="service-style-two p_relative bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="sec-title centred mb_50"><h3>Misyonumuz</h3></div>
                <p>BSB Orman Ürünleri olarak, güçlü altyapımız...</p>
            </div>
            <div class="col-lg-12">
                <div class="sec-title centred mb_50"><h3>Vizyonumuz</h3></div>
                <p>Kocaeli Bölgesinde 2015 yılından itibaren...</p>
            </div>
        </div>
    </div>
</section>
<!-- end misyon-vizyon -->

<!-- müşteri yorumları -->
<section class="testimonial-style-two p_relative">
    <div class="auto-container">
        <div class="sec-title mb_50 centred">
            <span class="sub-title">Müşteri Yorumları</span>
            <h2>Bizden ürün alan müşterilerimiz <br />neler söyledi?</h2>
        </div>

        <div class="three-item-carousel owl-carousel owl-theme owl-dots-one owl-nav-none">
            <div class="testimonial-block-two">
                <figure class="thumb-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource/testimonial-3.jpg" alt=""></figure>
                <div class="inner-box">
                    <h3>Ahmet Yılmaz</h3>
                    <span class="designation">Lojistik Müdürü</span>
                    <p>“BSB Orman Ürünleri ile çalışmak lojistik süreçlerimizi hızlandırdı.”</p>
                    <ul class="rating clearfix">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                    </ul>
                </div>
            </div>
            <!-- diğer müşteri yorum bloklarını da aynı şekilde çoğaltabilirsin -->
        </div>
    </div>
</section>
<!-- end müşteri yorumları -->

<?php
get_footer();
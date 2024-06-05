<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Luxury Jewels</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main>
        <!-- Header Wrapper Start -->
        <div class="header__wrapper position-relative z-3" style="background: rgba(31, 31, 31, 0.04);">
            <div class="container-fluid px-0">
                <img 
                    src="assets/images/banners/hero-thumbnail.jpg"
                    class="img-fluid w-100 object-fit-cover hero__thumbnail" 
                    alt="Hero Banner" width="1903" height="877"
                >
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"> 
                    <div class="container"> 
                        <img 
                            src="assets/images/banners/heading.svg"
                            class="img-fluid object-fit-cover tagline" 
                            alt="Hero Banner" data-aos="fade-up"
                        >
                        <div class="mt-4 mt-md-5" data-aos="fade-up" data-aos-delay="500"> 
                            <a href="#" class="btn btn-primary">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Wrapper End -->
        
        <!-- Product Listing Wrapper Start -->
        <div class="py-5">
            <div class="container py-lg-4">
                <h1 class="fs-1 text-dark text-center mb-4 fw-normal" data-aos="fade-up">New Collections</h1>
                     
                <!-- Nav tabs -->
                <nav data-aos="fade-up" data-aos-delay="300">
                    <div class="nav nav-tabs product__nav border-0 justify-content-center gap-lg-4 gap-xl-5 position-relative" id="nav-tab" role="tablist">
                        <button class="nav-link border-0 m-0 active" id="nav-Pendents-tab" data-bs-toggle="tab" data-bs-target="#nav-Pendents" type="button" role="tab" aria-controls="nav-Pendents" aria-selected="true">Pendents</button>
                        <button class="nav-link border-0 m-0" id="nav-Bracelets-tab" data-bs-toggle="tab" data-bs-target="#nav-Bracelets" type="button" role="tab" aria-controls="nav-Bracelets" aria-selected="false">Bracelets</button>
                        <button class="nav-link border-0 m-0" id="nav-Rings-tab" data-bs-toggle="tab" data-bs-target="#nav-Rings" type="button" role="tab" aria-controls="nav-Rings" aria-selected="false">Rings</button>
                        <button class="nav-link border-0 m-0" id="nav-Ear-Cuffs-tab" data-bs-toggle="tab" data-bs-target="#nav-Ear-Cuffs" type="button" role="tab" aria-controls="nav-Ear-Cuffs" aria-selected="false">Ear Cuffs</button>
                        
                    </div>
                </nav>
                <div class="tab-content mt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Pendents" role="tabpanel" aria-labelledby="nav-Pendents-tab" tabindex="0">
                        <div class="productSlider">
                            <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="100"> 
                                <?php
                                    $thumbnail="assets/images/products/01.png";
                                    $title="NECKLACES GRADIENT";
                                    $desc="Simple Line / Sophisticated ";
                                    $price="500 AED";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>
                            <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="200"> 
                                <?php
                                    $thumbnail="assets/images/products/02.png";
                                    $title="NECKLACES GRADIENT";
                                    $desc="Simple Line / Sophisticated ";
                                    $price="500 AED";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>
                            <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="300"> 
                                <?php
                                    $thumbnail="assets/images/products/03.png";
                                    $title="NECKLACES GRADIENT";
                                    $desc="Simple Line / Sophisticated ";
                                    $price="500 AED";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>
                            <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="400"> 
                                <?php
                                    $thumbnail="assets/images/products/04.png";
                                    $title="NECKLACES GRADIENT";
                                    $desc="Simple Line / Sophisticated ";
                                    $price="500 AED";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div> 
                        </div>
                    </div><!--.//Pendents-->
                    <div class="tab-pane fade" id="nav-Bracelets" role="tabpanel" aria-labelledby="nav-Bracelets-tab" tabindex="0">
                        <div class="productSlider">
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/bracelets-1.jpg";
                                    $title="925 ITALIAN STERLING SILVER BRACELET";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 290.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/bracelets-2.jpg";
                                    $title="14K GOLD FILLED BRACELET";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 390.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/bracelets-3.jpg";
                                    $title="14K GOLD FILLED BRACELET";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 390.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Bracelets-4.jpg";
                                    $title="14K GOLD FILLED BRACELET";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 390.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Bracelets-5.jpg";
                                    $title="14K GOLD FILLED BRACELET";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 390.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                        </div>
                    </div><!--.//Bracelets-->
                    <div class="tab-pane fade" id="nav-Rings" role="tabpanel" aria-labelledby="nav-Rings-tab" tabindex="0">
                        <div class="productSlider">
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/ring-1.jpg";
                                    $title="14K GOLD FILLED RING";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 280.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/ring-2.jpg";
                                    $title="14K GOLD FILLED RING";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 280.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/ring-3.jpg";
                                    $title="14K GOLD FILLED RING";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 280.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/ring-4.jpg";
                                    $title="14K GOLD FILLED RING";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 280.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/ring-5.jpg";
                                    $title="14K GOLD FILLED RING";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 280.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>  
                              
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Ear-Cuffs" role="tabpanel" aria-labelledby="nav-Ear-Cuffs-tab" tabindex="0">
                        <div class="productSlider">
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Ear-Cuffs-1.jpg";
                                    $title="14K GOLD FILLED EAR CUFF";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 290.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>   
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Ear-Cuffs-2.jpg";
                                    $title="14K GOLD FILLED EAR CUFF";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 390.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>   
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Ear-Cuffs-3.jpg";
                                    $title="14K GOLD FILLED EAR CUFF";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 350.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>   
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Ear-Cuffs-4.jpg";
                                    $title="14K GOLD FILLED EAR CUFF";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 490.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>   
                            <div class="p-2 px-lg-3"> 
                                <?php
                                    $thumbnail="assets/images/products/Ear-Cuffs-5.jpg";
                                    $title="14K GOLD FILLED EAR CUFF";
                                    $desc="Essme Luxury Gifts";
                                    $price="AED 520.00";
                                    include('includes/components/product-item.inc.php');
                                ?>
                            </div>   
                        </div>
                    </div><!--.//Ear_Cuffs--> 
                </div><!--.//tab_content-->
                
                <div class="text-center mt-4" data-aos="zoom-in" data-aos-delay="400">
                    <a href="# " class="btn btn-outline-primary fs-6 py-2">
                        VIEW MORE
                    </a>
                </div> 
                
            </div><!--.//container--> 
        </div>
        <!-- Product Listing Wrapper End -->

        <!-- Promo Category Wrapper Start -->
        <div class="py-sm-5 category__wrapper">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-5">
                        <a href="#" class="d-block overflow-hidden large__banner" data-aos="flip-right">
                            <img 
                                src="assets/images/banners/promo-banner-1.jpg" 
                                alt="thumbnail" width="531" height="655"
                                class="img-fluid w-100 object-fit-cover"
                            >
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="#" class="d-block overflow-hidden small__banner" data-aos="flip-up">
                            <img 
                                src="assets/images/banners/promo-banner-2.jpg" 
                                alt="thumbnail" width="749" height="320"
                                class="img-fluid w-100 object-fit-cover"
                            >
                        </a>
                        <a href="#" class="d-block overflow-hidden small__banner mt-3" data-aos="flip-up">
                            <img 
                                src="assets/images/banners/promo-banner-3.jpg" 
                                alt="thumbnail" width="749" height="320"
                                class="img-fluid w-100 object-fit-cover"
                            >
                        </a>
                    </div>
                </div><!--.//row-->

                <div class="p-4 py-5 bg-primary-light text-center mt-3" data-aos="flip-up"> 
                    <div class="row gx-3 gy-4">
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="100"> 
                            <img 
                                src="assets/images/icons/high-quality.svg" 
                                alt="HIGH QUALITY" width="47" height="80"
                                class="img-fluid w-auto info__icon"
                            >
                            <div class="mt-4 fs-5 text-dark lh-sm info__title">HIGH QUALITY</div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="200">
                            <img 
                                src="assets/images/icons/shipping.svg" 
                                alt="SHIPPING & DELIVERY" width="70" height="80"
                                class="img-fluid w-auto info__icon"
                            >
                            <div class="mt-4 fs-5 text-dark lh-sm info__title">SHIPPING & DELIVERY</div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="300">
                            <img 
                                src="assets/images/icons/return.svg" 
                                alt="RETURNS & EXCHANGES" width="80" height="80"
                                class="img-fluid w-auto info__icon"
                            >
                            <div class="mt-4 fs-5 text-dark lh-sm info__title">RETURNS & EXCHANGES</div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6" data-aos="fade-up" data-aos-delay="400">
                            <img 
                                src="assets/images/icons/warranty.svg" 
                                alt="ONE YEAR WARRANTY" width="75" height="80"
                                class="img-fluid w-auto info__icon"
                            >
                            <div class="mt-4 fs-5 text-dark lh-sm info__title">ONE YEAR WARRANTY</div>
                        </div>
                    </div><!--.//row-->
                </div>
            </div>
        </div>
        <!-- Promo Category Wrapper End -->

        <!-- Gifts Wrapper Start -->
        <div class="py-5">
            <div class="container">
                <h2 class="fs-1 text-dark text-center mb-4 fw-normal" data-aos="fade-up">Trending Luxury Jewels Gifts</h2>

                <div class="productSlider">
                    <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="100"> 
                        <?php
                            $thumbnail="assets/images/products/gift-1.jpg";
                            $title="Magestic Gold Pendants";
                            $desc="Pendants";
                            $price="340 AED";
                            include('includes/components/product-item.inc.php');
                        ?>
                    </div>
                    <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="200"> 
                        <?php
                            $thumbnail="assets/images/products/gift-2.jpg";
                            $title="NECKLACES GRADIENT";
                            $desc="NECKLACES";
                            $price="500 AED";
                            include('includes/components/product-item.inc.php');
                        ?>
                    </div>
                    <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="300"> 
                        <?php
                            $thumbnail="assets/images/products/gift-3.jpg";
                            $title="14K GOLD FILLED RING";
                            $desc="Ring";
                            $price="500 AED";
                            include('includes/components/product-item.inc.php');
                        ?>
                    </div>
                    <div class="p-2 px-lg-3" data-aos="fade-up" data-aos-delay="400"> 
                        <?php
                            $thumbnail="assets/images/products/gift-4.jpg";
                            $title="14K GOLD FILLED RING";
                            $desc="Ring";
                            $price="500 AED";
                            include('includes/components/product-item.inc.php');
                        ?>
                    </div> 
                </div>
            </div><!--.//container-->
        </div>
        <!-- Gifts Wrapper End -->

        <!-- Discounts Wrapper Start -->
        <div class="py-5">
            <div class="container">
                <div class="position-relative rounded-4 overflow-hidden" data-aos="flip-up">
                    <img 
                        src="assets/images/banners/discount-banner.png" 
                        alt="thumbnail" width="531" height="655"
                        class="img-fluid w-100 object-fit-cover position-absolute top-0 start-0 h-100 z-0"
                    >
                    <div class="position-absolute top-0 start-0 h-100 w-100 bg-dark opacity-75 z-0"></div>
                    <div class="p-4 py-5 p-md-5 position-relative z-3 text-center text-lg-start"> 
                        <div class="row gy-0 gx-5 align-items-center">
                            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                                <h2 class="display-2 fw-normal text-white text-center">Sale 15%</h2>
                            </div>
                            <div class="col-lg-7">
                                <p class="text-white" data-aos="fade-up" data-aos-delay="500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                <div data-aos="fade-up" data-aos-delay="700"> 
                                    <a href="#" class="btn btn-white fs-6">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.//container-->
        </div>
        <!-- Discounts Wrapper End -->

        <!-- Promo Wrapper Start -->
        <div class="pb-5 pt-lg-4 position-relative">
            <div class="position-absolute bottom-0 start-0 z-0 w-100 h-75" style="background-color: #f2f2f2;"></div>
            <div class="container position-relative z-3">
                <div class="row g-4 gx-lg-5 align-items-end">
                    <div class="col-lg-6 order-lg-2">
                        <div class="position-relative" data-aos="zoom-in" data-aos-delay="300"> 
                            <img 
                                src="assets/images/banners/promo-banner-02.jpg" 
                                alt="thumbnail" width="624" height="547"
                                class="img-fluid w-100 object-fit-cover"
                            >
                            <div class="position-absolute top-0 start-0 bg-dark opacity-25 z-1 w-100 h-100"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 text-center text-lg-start" data-aos="fade-right">
                        <div class="rotate__area mb-4"> 
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                </defs>
                                <circle cx="150" cy="100" r="75" fill="none"/>
                                <g>
                                    <use xlink:href="#circlePath" fill="none"/>
                                    <text fill="#000">
                                        <textPath xlink:href="#circlePath">JEWELRY BESPOKE HANDCRAFTED</textPath>
                                    </text>
                                </g>
                            </svg> 
                        </div>
                        <img 
                            src="assets/images/luxury-jewels-logo.webp" 
                            alt="thumbnail" width="273" height="83"
                            class="img-fluid mb-4"
                        >
                        <h2 class="fs-1 fw-normal text-dark text-uppercase">INSPIRED BY LOVE & NATURE</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div> 
                </div><!--.//row-->
            </div><!--.//container-->
        </div>
        <!-- Promo Wrapper End -->

        <!-- Video Wrapper Start -->
        <div class="container-fluid px-0 position-relative" data-aos="zoom-in">
            <img 
                src="assets/images/banners/video-banner-thumbnail.png" 
                alt="thumbnail" width="1903" height="661"
                class="img-fluid w-100 object-fit-cover video__thumbnail"
            >
            <div class="position-absolute top-0 start-0 opacity-25 z-1 w-100 h-100" style="background-color: var(--secondary);"></div>
            <div class="d-inline-block position-absolute top-50 start-50 translate-middle z-3" data-aos="fade-up" data-aos-delay="800"> 
                <button type="button" data-bs-toggle="modal" data-bs-target="#promoVideoModal" class="btn play__btn rounded-circle d-flex justify-content-center align-items-center"><i class="fa fa-play" aria-hidden="true"></i></button>
            </div>
        </div>
          
        <div class="modal fade video__modal" id="promoVideoModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content"> 
                    <div class="modal-body p-0 position-relative">
                        <button
                            type="button"
                            class="btn-close bg-white rounded-circle p-3 position-absolute"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                        <video 
                            playsinline="playsinline" autoplay="autoplay" loop="loop" controls="controls" preload="metadata" 
                            class="w-100 h-100 object-fit-cover" id="promoVideo"
                            poster="//essmeluxurygifts.com/cdn/shop/files/preview_images/47d5d5a897a14ab09db70477834a6aa0.thumbnail.0000000000_1100x.jpg?v=1700482147" 
                        >
                            <source src="https://cdn.shopify.com/videos/c/vp/47d5d5a897a14ab09db70477834a6aa0/47d5d5a897a14ab09db70477834a6aa0.HD-1080p-7.2Mbps-20923574.mp4" type="video/mp4">
                            <img src="//essmeluxurygifts.com/cdn/shop/files/preview_images/47d5d5a897a14ab09db70477834a6aa0.thumbnail.0000000000_1100x.jpg?v=1700482147">
                        </video>
                    </div> 
                </div>
            </div>
        </div> 
        <script>
            var enquirModal = document.getElementById("promoVideoModal");
            const videoIntro = document.getElementById('promoVideo');
            enquirModal.addEventListener('shown.bs.modal', function(e) {
                videoIntro.play(); 
            });
            enquirModal.addEventListener('hidden.bs.modal', function(e) { 
                videoIntro.pause(); 
            });
        </script> 
        <!-- Video Wrapper End -->

        <!-- Testimonial Wrapper Start -->
        <div class="">
            <div class="container">
                <div class="row g-4 g-lg-0 align-items-center">
                    <div class="col-lg-4 col-xxl-3 text-center text-lg-start">
                        <img 
                            src="assets/images/icons/testimonial-quote.svg" 
                            alt="Quote" width="180" height="149"
                            class="img-fluid mb-4"  data-aos="fade-down"
                        >
                        <h2 class="fs-1 text-dark fw-normal" data-aos="fade-up" data-aos-delay="200">CLIENT TESTIMONIALS</h2>
                    </div>
                    <div class="col-lg-8 col-xxl-9 position-relative">
                        <div class="testimonial__wrapper position-relative py-lg-5" data-aos="fade-left"> 
                            <img 
                                src="assets/images/banners/testimonial-bg.svg" 
                                alt="Quote" width="1408" height="380"
                                class="img-fluid bg__overlay h-100 position-absolute top-0 end-0 object-fit-cover d-none d-lg-block"
                            >
                            <div class="py-lg-5 position-relative z-3"> 
                                <div class="testimonialCarousel">
                                    <div class="p-2">
                                        <div class="p-4 bg-white testimonail__card">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img 
                                                    src="assets/images/testimonial/SAMANTHA.jpg" 
                                                    alt="SAMANTHA" width="65" height="65"
                                                    class="img-fluid user__thumbnail rounded-circle object-fit-cover"
                                                >
                                                <span class="text-dark fs-5 fw-normal">SAMANTHA</span>
                                            </div>
                                            <p class="desc fs-15">Luxury Jewels exquisite craftsmanship shines through in every piece. I constantly receive compliments on the elegance and beauty of my necklace.</p>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="p-4 bg-white testimonail__card">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img 
                                                    src="assets/images/testimonial/SAMANTHA.jpg" 
                                                    alt="XAVIER" width="65" height="65"
                                                    class="img-fluid user__thumbnail rounded-circle object-fit-cover"
                                                >
                                                <span class="text-dark fs-5 fw-normal">XAVIER</span>
                                            </div>
                                            <p class="desc fs-15">Luxury Jewels delivered beyond my expectations with their impeccable engagement ring. The stunning diamond and flawless setting truly symbolize my love.</p>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="p-4 bg-white testimonail__card">
                                            <div class="d-flex align-items-center gap-3 mb-3">
                                                <img 
                                                    src="assets/images/testimonial/OLIVIA.jpg" 
                                                    alt="OLIVIA" width="65" height="65"
                                                    class="img-fluid user__thumbnail rounded-circle object-fit-cover"
                                                >
                                                <span class="text-dark fs-5 fw-normal">OLIVIA</span>
                                            </div>
                                            <p class="desc fs-15">Luxury Jewels on-trend collection and exceptional quality make them my go-to for stunning pieces that elevate any outfit. Their customer service is unparalleled, ensuring every experience is a pleasure.</p>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--.//container-->
        </div>
        <!-- Testimonial Wrapper End -->

             
    </main>
 
      
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 
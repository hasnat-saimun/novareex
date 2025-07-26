@extends('headerFooter') 
@section('interfaceTitle') Help & Support @endsection
@section('frontendBody')
<link rel="stylesheet" id="contact-form-7-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/contact-form-7/includes/css/styles9b2d.css?ver=6.1" type="text/css" media="all" />
<style id="woocommerce-inline-inline-css" type="text/css">
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>
<link rel="stylesheet" id="hfe-style-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementorb2da.css?ver=2.4.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-frontend-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/css/frontend.min415f.css?ver=3.30.0" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-7-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-7896b.css?ver=1746510240" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-768-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-768758c.css?ver=1746618578" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-post-367-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-367896b.css?ver=1746510240" type="text/css" media="all" />
<link rel="stylesheet" id="slick-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link
    rel="stylesheet"
    id="perfect-scrollbar-css"
    href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min6c2d.css?ver=6.8.2"
    type="text/css"
    media="all"
/>
<link
    rel="stylesheet"
    id="perfect-scrollbar-wpc-css"
    href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme6c2d.css?ver=6.8.2"
    type="text/css"
    media="all"
/>
<link rel="stylesheet" id="magnific-popup-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="woosq-feather-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/feather/feather6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="woosq-icons-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/css/iconsae82.css?ver=4.2.0" type="text/css" media="all" />
<link rel="stylesheet" id="woosq-frontend-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/css/frontendae82.css?ver=4.2.0" type="text/css" media="all" />
<link rel="stylesheet" id="woosw-icons-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-wishlist/assets/css/icons972f.css?ver=5.0.1" type="text/css" media="all" />
<link rel="stylesheet" id="woosw-frontend-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-wishlist/assets/css/frontend972f.css?ver=5.0.1" type="text/css" media="all" />
<style id="woosw-frontend-inline-css" type="text/css">
    .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-notice {
        background-color: #5fbd74;
    }
    .woosw-popup .woosw-popup-inner .woosw-popup-content .woosw-popup-content-bot .woosw-popup-content-bot-inner a:hover {
        color: #5fbd74;
        border-color: #5fbd74;
    }
</style>
<link rel="stylesheet" id="brands-styles-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/css/brandsdaac.css?ver=9.9.5" type="text/css" media="all" />
<link rel="stylesheet" id="bitrader-custom-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/bitrader-custom6c2d.css?ver=6.8.2" type="text/css" media="all" />
<style id="bitrader-custom-inline-css" type="text/css">
    html:root {
        --brand-color: #00d094;
        --secondary-color: #0a4fd5;
        --title-color: #0c263a;
        --text-color: #6b777f;
        --wh-color: #ffffff;
    }
    html:root[data-bs-theme="dark"],
    [data-bs-theme="dark"] {
        --brand-color: #00d094;
        --secondary-color: #00d094;
        --title-color: #ffffff;
        --text-color: rgba(255, 255, 255, 0.6);
        --wh-color: #1b2d29;
    }
</style>
<link rel="stylesheet" id="bitrader-fonts-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/bitrader-fonts6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="bootstrap-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/bootstrap.min6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome-pro-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/font-awesome-pro6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="font-awesome-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0" type="text/css" media="all" />
<link rel="stylesheet" id="swiper-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5" type="text/css" media="all" />
<link rel="stylesheet" id="aos-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/aos6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="nice-select-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/nice-select6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="bitrader-core-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/bitrader-core6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="woocommerce-core-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/css/woocommerce6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="bitrader-style-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/style6c2d.css?ver=6.8.2" type="text/css" media="all" />
<link rel="stylesheet" id="hfe-elementor-icons-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min705c.css?ver=5.34.0" type="text/css" media="all" />
<link rel="stylesheet" id="hfe-icons-list-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css?ver=3.24.3" type="text/css" media="all" />
<link rel="stylesheet" id="hfe-social-icons-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css?ver=3.24.0" type="text/css" media="all" />
<link rel="stylesheet" id="hfe-social-share-icons-brands-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3" type="text/css" media="all" />
<link
    rel="stylesheet"
    id="hfe-social-share-icons-fontawesome-css"
    href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3"
    type="text/css"
    media="all"
/>
<link rel="stylesheet" id="hfe-nav-menu-icons-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css?ver=5.15.3" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-gf-local-roboto-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/google-fonts/css/roboto258f.css?ver=1743915932" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-gf-local-robotoslab-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/google-fonts/css/robotoslab1877.css?ver=1743915934" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-gf-local-opensans-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/google-fonts/css/opensans13c1.css?ver=1743915937" type="text/css" media="all" />
<link rel="stylesheet" id="elementor-gf-local-anektelugu-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/google-fonts/css/anektelugu13c1.css?ver=1743915937" type="text/css" media="all" />
@verbatim
<script type="text/template" id="tmpl-variation-template">
    <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
    <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
    <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
@endverbatim
</head>
<body
    class="wp-singular page-template page-template-elementor_header_footer page page-id-768 wp-embed-responsive wp-theme-bitrader theme-bitrader woocommerce-no-js ehf-footer ehf-template-bitrader ehf-stylesheet-bitrader no-sidebar elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-768"
>
    <!-- preloader -->
    <div class="preloader">
        <img src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/preloader.png" alt="Preloader" />
    </div>
    <!-- preloader-end -->

    <div class="lightdark-switch">
        <span class="switch-btn dark-btn" id="btnSwitch" style="background-color: rgb(0, 208, 148);">
            <img src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/icons/sun.svg" alt="light-dark-switchbtn" class="swtich-icon" />
        </span>

        <script>
            const moon = document.getElementById("btnSwitch");
            const icon = document.querySelector("#btnSwitch img");
            moon.addEventListener("click", () => {
                const theme = document.documentElement.getAttribute("data-bs-theme");
                document.documentElement.setAttribute("data-bs-theme", theme === "dark" ? "light" : "dark");
                if (theme === "dark") {
                    icon.src = "{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/icons/moon.svg";
                    moon.style.backgroundColor = "#00D094";
                } else {
                    icon.src = "{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/icons/sun.svg";
                    moon.style.backgroundColor = "white";
                }
            });
        </script>
    </div>

    <a href="javascript:void(0)" class="scrollToTop scrollToTop--style1 scroll__top scroll-to-target scrollToTop--home1" data-target="html">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- ===============>> Header section start here <<================= -->
    @include('navbar')
    <!-- ===============>> Header section end here <<================= -->
    <!-- main-area -->
    <main class="main-area fix">
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area bg--cover" style="background-image: url({{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/06/breadcrumb_bg-1.png);">
            <div class="container">
                <div class="breadcrumb-area__content">
                    <h2 class="mt-5">Contact Us</h2>
                    <nav aria-label="breadcrumb" class="breadcrumb">
                        <!-- Breadcrumb NavXT 7.4.1 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Nuvareex." href="../index.html" class="home"><span property="name">Nuvareex</span></a><meta property="position" content="1" />
                        </span>
                        &gt;
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name" class="post post-page current-item">Contact Us</span><meta property="url" content="https://bitrader.thetork.com/contact-us/" /><meta property="position" content="2" />
                        </span>
                    </nav>
                </div>
                <div class="breadcrumb-area__shape">
                    <span class="breadcrumb-area__shape-item breadcrumb-area__shape-item--1">
                        <img src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/bg/breadcrumb_shape.png" alt="Image" />
                    </span>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <div data-elementor-type="wp-page" data-elementor-id="768" class="elementor elementor-768">
            <div class="elementor-element elementor-element-2f8ab56 e-con-full e-flex e-con e-parent" data-id="2f8ab56" data-element_type="container">
                <div class="elementor-element elementor-element-abe41c9 elementor-widget elementor-widget-tg-contact" data-id="abe41c9" data-element_type="widget" data-widget_type="tg-contact.default">
                    <div class="elementor-widget-container">
                        <script>
                            jQuery(document).ready(function ($) {
                                AOS.init();
                            });
                        </script>

                        <div class="contact padding-top padding-bottom tg-section">
                            <div class="container">
                                <div class="contact__wrapper">
                                    <div class="row g-5">
                                        <div class="col-md-5">
                                            <div class="contact__info" data-aos="fade-right" data-aos-duration="1000">
                                                <div class="contact__social">
                                                    <h3 class="title">Let’s <span>get in touch</span> With Us</h3>

                                                    <ul class="social">
                                                        <li class="social__item">
                                                            <a href="#" class="social__link social__link--style4">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="social__item">
                                                            <a href="#" class="social__link social__link--style4">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="social__item">
                                                            <a href="#" class="social__link social__link--style4">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-linkedin-in" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="social__item">
                                                            <a href="#" class="social__link social__link--style4">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="social__item">
                                                            <a href="#" class="social__link social__link--style4">
                                                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                                                    ></path>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="contact__details">
                                                    <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                                                        <div class="contact__item-inner">
                                                            <div class="contact__item-thumb">
                                                                <span>
                                                                    <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/phone.png" width="24" alt="Icon" />
                                                                </span>
                                                            </div>
                                                            <div class="contact__item-content">
                                                                <p>+971566238304</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                                                        <div class="contact__item-inner">
                                                            <div class="contact__item-thumb">
                                                                <span>
                                                                    <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/envelope.png" width="24" alt="Icon" />
                                                                </span>
                                                            </div>
                                                            <div class="contact__item-content">
                                                                <p>nuvareex@gmail.com</p>
                                                                <p>info@nuvareex.com</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="contact__item" data-aos="fade-right" data-aos-duration="1000">
                                                        <div class="contact__item-inner">
                                                            <div class="contact__item-thumb">
                                                                <span>
                                                                    <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/marker.png" width="24" alt="Icon" />
                                                                </span>
                                                            </div>
                                                            <div class="contact__item-content">
                                                                <p>Building no - 108, Near Satwa Big masjid</p>
                                                                <p> Satwa,  Dubai</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="wpcf7 no-js" id="wpcf7-f870-p768-o1" lang="en-US" dir="ltr" data-wpcf7-id="870">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="https://bitrader.thetork.com/contact-us/#wpcf7-f870-p768-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                                    <fieldset class="hidden-fields-container">
                                                        <input type="hidden" name="_wpcf7" value="870" /><input type="hidden" name="_wpcf7_version" value="6.1" /><input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f870-p768-o1" /><input type="hidden" name="_wpcf7_container_post" value="768" />
                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                                    </fieldset>
                                                    <div class="contact__form">
                                                        <div class="row g-4">
                                                            <div class="col-12">
                                                                <div>
                                                                    <label for="name" class="form-label">Name</label>
                                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                                        <input
                                                                            size="40"
                                                                            maxlength="400"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                                            id="name"
                                                                            aria-required="true"
                                                                            aria-invalid="false"
                                                                            placeholder="Full Name"
                                                                            value=""
                                                                            type="text"
                                                                            name="your-name"
                                                                        />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div>
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                                        <input
                                                                            size="40"
                                                                            maxlength="400"
                                                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"
                                                                            id="email"
                                                                            aria-required="true"
                                                                            aria-invalid="false"
                                                                            placeholder="Email here"
                                                                            value=""
                                                                            type="email"
                                                                            name="your-email"
                                                                        />
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div>
                                                                    <label for="textarea" class="form-label">Message</label>
                                                                    <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                                        <textarea
                                                                            cols="40"
                                                                            rows="10"
                                                                            maxlength="2000"
                                                                            class="wpcf7-form-control wpcf7-textarea form-control"
                                                                            id="textarea"
                                                                            aria-invalid="false"
                                                                            placeholder="Enter Your Message"
                                                                            name="your-message"
                                                                        ></textarea>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="trk-btn trk-btn--border trk-btn--primary mt-4 d-block">contact us now</button>
                                                    </div>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact__shape">
                                <span class="contact__shape-item contact__shape-item--1">
                                    <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/pricing_wave.png" width="70" alt="Icon" />
                                </span>
                                <span class="contact__shape-item contact__shape-item--2"> <span></span> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection

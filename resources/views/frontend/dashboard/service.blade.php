@extends('headerFooter')
@section('interfaceTitle') Our Services @endsection
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
        <link rel="stylesheet" id="widget-heading-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/css/widget-heading.min415f.css?ver=3.30.0" type="text/css" media="all" />
        <link rel="stylesheet" id="widget-image-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/css/widget-image.min415f.css?ver=3.30.0" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-732-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-7322600.css?ver=1746640304" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-367-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-367896b.css?ver=1746510240" type="text/css" media="all" />
        <link rel="stylesheet" id="slick-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/slick/slick6c2d.css?ver=6.8.2" type="text/css" media="all" />
        <link rel="stylesheet" id="perfect-scrollbar-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/perfect-scrollbar.min6c2d.css?ver=6.8.2" type="text/css" media="all" />
        <link rel="stylesheet" id="perfect-scrollbar-wpc-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/perfect-scrollbar/css/custom-theme6c2d.css?ver=6.8.2" type="text/css" media="all" />
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
        <link rel="stylesheet" id="hfe-social-share-icons-fontawesome-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css?ver=5.15.3" type="text/css" media="all" />
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
        class="wp-singular page-template page-template-elementor_header_footer page page-id-732 wp-embed-responsive wp-theme-bitrader theme-bitrader woocommerce-no-js ehf-footer ehf-template-bitrader ehf-stylesheet-bitrader no-sidebar services elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-732"
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
                        <h2 class="mt-5">Our Services</h2>
                        <nav aria-label="breadcrumb" class="breadcrumb">
                            <!-- Breadcrumb NavXT 7.4.1 -->
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Bitrader." href="../index.html" class="home"><span property="name">Bitrader</span></a><meta property="position" content="1" />
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name" class="post post-page current-item">Our Services</span><meta property="url" content="https://bitrader.thetork.com/our-services/" /><meta property="position" content="2" />
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

            <div data-elementor-type="wp-page" data-elementor-id="732" class="elementor elementor-732">
                <div class="elementor-element elementor-element-e49d254 e-flex e-con-boxed e-con e-parent" data-id="e49d254" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-a3caaf8 e-flex e-con-boxed e-con e-child" data-id="a3caaf8" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-a163d3c elementor-widget elementor-widget-tg-heading" data-id="a163d3c" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title"><span>Services</span> We offer</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-79bd66f elementor-widget elementor-widget-heading" data-id="79bd66f" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">We offer the best services around - from installations to repairs, maintenance, and more!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-de38c60 elementor-widget elementor-widget-tg-servicesBox" data-id="de38c60" data-element_type="widget" data-widget_type="tg-servicesBox.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();
                                    });
                                </script>

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--" data-aos="fade-up" data-aos-duration="800">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services01.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/services/strategy-consulting/index.html">Strategy Consulting</a>
                                                    </h5>
                                                    <p class="mb-0">A social assistant that's flexible can accommodate your schedule and needs, making life easier.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--" data-aos="fade-up" data-aos-duration="900">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services02.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/services/financial-advisory/index.html">Financial Advisory</a>
                                                    </h5>
                                                    <p class="mb-0">Modules transform smart trading by automating processes and improving decision-making.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services03.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/services/management/index.html">Management</a>
                                                    </h5>
                                                    <p class="mb-0">There, it's me, your friendly neighborhood reporter's news analyst processes and improving</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--" data-aos="fade-up" data-aos-duration="1100">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services04.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/services/supply-optimization/index.html">Supply Optimization</a>
                                                    </h5>
                                                    <p class="mb-0">Hey, have you checked out that new cryptocurrency platform? It's pretty cool and easy to use!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--" data-aos="fade-up" data-aos-duration="1200">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services05.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/services/hr-consulting/index.html">HR consulting</a>
                                                    </h5>
                                                    <p class="mb-0">Hey guys, just a quick update on exchange orders. There have been some changes currency!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--" data-aos="fade-up" data-aos-duration="1300">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services06.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/services/marketing-consulting/index.html">Marketing consulting</a>
                                                    </h5>
                                                    <p class="mb-0">Hey! Just wanted to let you know that the price notification module processes is now live!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-28f2864 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                            data-id="28f2864"
                            data-element_type="widget"
                            data-settings='{"_position":"absolute"}'
                            data-widget_type="image.default"
                        >
                            <div class="elementor-widget-container">
                                <img decoding="async" width="106" height="106" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/shape01-2.png" class="attachment-full size-full wp-image-238" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-94bf1ae bg-color e-flex e-con-boxed e-con e-parent" data-id="94bf1ae" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-42e1bc3 e-con-full e-flex e-con e-child" data-id="42e1bc3" data-element_type="container">
                            <div class="elementor-element elementor-element-be4924d e-con-full e-flex e-con e-child" data-id="be4924d" data-element_type="container">
                                <div class="elementor-element elementor-element-e9d8bc2 elementor-widget elementor-widget-tg-heading" data-id="e9d8bc2" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title">Connect With <span>Our Clients</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d88ed51 elementor-widget elementor-widget-heading" data-id="d88ed51" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">We love connecting with our clients to hear about their experiences and how we can improve.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-dfa87dd e-con-full e-flex e-con e-child" data-id="dfa87dd" data-element_type="container">
                                <div class="elementor-element elementor-element-b7db576 elementor-widget elementor-widget-html" data-id="b7db576" data-element_type="widget" data-widget_type="html.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-header__action">
                                            <div class="swiper-nav justify-content-start justify-content-md-end">
                                                <button class="swiper-nav__btn testimonial__slider-prev"><i class="fas fa-angle-left"></i></button>
                                                <button class="swiper-nav__btn testimonial__slider-next active"><i class="fas fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7cc06e2 elementor-widget elementor-widget-testimonial" data-id="7cc06e2" data-element_type="widget" data-widget_type="testimonial.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();

                                        // testimonial slider
                                        const testimonial = new Swiper(".testimonial__slider", {
                                            spaceBetween: 24,
                                            grabCursor: true,
                                            loop: true,
                                            slidesPerView: 1,
                                            breakpoints: {
                                                576: {
                                                    slidesPerView: 1,
                                                },
                                                768: {
                                                    slidesPerView: 2,
                                                },
                                                992: {
                                                    slidesPerView: 2,
                                                },
                                                1200: {
                                                    slidesPerView: 2,
                                                    spaceBetween: 25,
                                                },
                                            },

                                            autoplay: true,
                                            speed: 500,

                                            navigation: {
                                                nextEl: ".testimonial__slider-next",
                                                prevEl: ".testimonial__slider-prev",
                                            },
                                        });
                                    });
                                </script>

                                <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="testimonial__slider swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial__item testimonial__item--style1">
                                                    <div class="testimonial__item-inner">
                                                        <div class="testimonial__item-content">
                                                            <p class="mb-0">
                                                                The above testimonial is about Martha Chumo, who taught herself to code in one summer. This testimonial example works because it allows prospective customers to see themselves
                                                                in Codeacademy’s current customer base.
                                                            </p>
                                                            <div class="testimonial__footer">
                                                                <div class="testimonial__author">
                                                                    <div class="testimonial__author-thumb">
                                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/testi01-2.png" width="48" alt="" />
                                                                    </div>
                                                                    <div class="testimonial__author-designation">
                                                                        <h6>Mobarok Hossain</h6>
                                                                        <span> Trade Master </span>
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial__quote">
                                                                    <span><i class="fas fa-quote-right"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial__item testimonial__item--style1">
                                                    <div class="testimonial__item-inner">
                                                        <div class="testimonial__item-content">
                                                            <p class="mb-0">
                                                                The above testimonial is about Martha Chumo, who taught herself to code in one summer. This testimonial example works because it allows prospective customers to see themselves
                                                                in Codeacademy’s current customer base.
                                                            </p>
                                                            <div class="testimonial__footer">
                                                                <div class="testimonial__author">
                                                                    <div class="testimonial__author-thumb">
                                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/testi02-2.png" width="48" alt="" />
                                                                    </div>
                                                                    <div class="testimonial__author-designation">
                                                                        <h6>Guy Hawkins</h6>
                                                                        <span> Trade Master </span>
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial__quote">
                                                                    <span><i class="fas fa-quote-right"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial__item testimonial__item--style1">
                                                    <div class="testimonial__item-inner">
                                                        <div class="testimonial__item-content">
                                                            <p class="mb-0">
                                                                The above testimonial is about Martha Chumo, who taught herself to code in one summer. This testimonial example works because it allows prospective customers to see themselves
                                                                in Codeacademy’s current customer base.
                                                            </p>
                                                            <div class="testimonial__footer">
                                                                <div class="testimonial__author">
                                                                    <div class="testimonial__author-thumb">
                                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/testi03-2.png" width="48" alt="" />
                                                                    </div>
                                                                    <div class="testimonial__author-designation">
                                                                        <h6>Belal Hossain</h6>
                                                                        <span> Trade Master </span>
                                                                    </div>
                                                                </div>
                                                                <div class="testimonial__quote">
                                                                    <span><i class="fas fa-quote-right"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-b95a270 e-flex e-con-boxed e-con e-parent" data-id="b95a270" data-element_type="container" data-settings='{"background_background":"classic"}'>
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-2b42bda e-flex e-con-boxed e-con e-child" data-id="2b42bda" data-element_type="container" data-settings='{"background_background":"classic"}'>
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-13229f0 e-con-full e-flex e-con e-child" data-id="13229f0" data-element_type="container" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-element elementor-element-1b99884 e-con-full e-flex e-con e-child" data-id="1b99884" data-element_type="container">
                                        <div class="elementor-element elementor-element-a3aac2d elementor-widget elementor-widget-image" data-id="a3aac2d" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img fetchpriority="high" decoding="async" width="244" height="235" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta-2.png" class="attachment-full size-full wp-image-312" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-df5eea4 nwsltrcolor e-flex e-con-boxed e-con e-child" data-id="df5eea4" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-7eb9a28 elementor-widget elementor-widget-tg-heading" data-id="7eb9a28" data-element_type="widget" data-widget_type="tg-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <h2 class="title"><span>Subscribe </span> Our News</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-044b2d4 elementor-widget elementor-widget-heading" data-id="044b2d4" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1ad306c text-center elementor-widget elementor-widget-shortcode" data-id="1ad306c" data-element_type="widget" data-widget_type="shortcode.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-shortcode">
                                                        <script>
                                                            (function () {
                                                                window.mc4wp = window.mc4wp || {
                                                                    listeners: [],
                                                                    forms: {
                                                                        on: function (evt, cb) {
                                                                            window.mc4wp.listeners.push({
                                                                                event: evt,
                                                                                callback: cb,
                                                                            });
                                                                        },
                                                                    },
                                                                };
                                                            })();
                                                        </script>
                                                        <!-- Mailchimp for WordPress v4.10.5 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-329" method="post" data-id="329" data-name="Newsletter Form">
                                                            <div class="mc4wp-form-fields">
                                                                <div class="cta-form cta-form--style2 form-subscribe">
                                                                    <div class="cta-form__inner d-sm-flex align-items-center">
                                                                        <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0" name="EMAIL" placeholder="Email Address" required />
                                                                        <button class="trk-btn trk-btn--large trk-btn--secondary2" type="submit">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label>
                                                            <input type="hidden" name="_mc4wp_timestamp" value="1752615926" /><input type="hidden" name="_mc4wp_form_id" value="329" />
                                                            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                                            <div class="mc4wp-response"></div>
                                                        </form>
                                                        <!-- / Mailchimp for WordPress Plugin -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-aded356 elementor-widget__width-auto elementor-absolute bit_rotate_animation elementor-widget elementor-widget-image"
                                    data-id="aded356"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="65" height="65" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta_shape1-2.png" class="attachment-full size-full wp-image-341" alt="" />
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-59cf2fd elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                                    data-id="59cf2fd"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img decoding="async" width="106" height="106" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/shape01-2.png" class="attachment-full size-full wp-image-238" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
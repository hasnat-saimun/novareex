@extends('headerFooter')
@section('interfaceTitle') About Us @endsection
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
        <link rel="stylesheet" id="elementor-post-740-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-740ec7f.css?ver=1746618857" type="text/css" media="all" />
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
        <link rel="stylesheet" id="elementor-gf-local-anektelugu-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/google-fonts/css/anektelugu13c1.css?ver=1743915937" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-gf-local-opensans-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/google-fonts/css/opensans13c1.css?ver=1743915937" type="text/css" media="all" />
        @verbatim
        <script type="text/template" id="tmpl-variation-template">
            <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
            <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
            <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
        </script>
        @endverbatim

        <script type="text/template" id="tmpl-unavailable-variation-template">
            <p role="alert">Sorry, this product is unavailable. Please choose a different combination.</p>
        </script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
        <script type="text/javascript" id="jquery-js-after">
            /* <![CDATA[ */
            !(function ($) {
                "use strict";
                $(document).ready(function () {
                    $(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"),
                        $(window).scroll(function () {
                            $(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(".hfe-scroll-to-top-wrap").fadeIn(300);
                        }),
                        $(".hfe-scroll-to-top-wrap").on("click", function () {
                            $("html, body").animate({ scrollTop: 0 }, 300);
                            return !1;
                        });
                });
            })(jQuery);
            !(function ($) {
                "use strict";
                $(document).ready(function () {
                    var bar = $(".hfe-reading-progress-bar");
                    if (!bar.length) return;
                    $(window).on("scroll", function () {
                        var s = $(window).scrollTop(),
                            d = $(document).height() - $(window).height(),
                            p = d ? (s / d) * 100 : 0;
                        bar.css("width", p + "%");
                    });
                });
            })(jQuery);
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min86fd.js?ver=2.7.0-wc.9.9.5" id="jquery-blockui-js" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                ajax_url: "\/wp-admin\/admin-ajax.php",
                wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
                i18n_view_cart: "View cart",
                cart_url: "https:\/\/bitrader.thetork.com\/cart\/",
                is_cart: "",
                cart_redirect_after_add: "no",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.mindaac.js?ver=9.9.5" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min0333.js?ver=2.1.4-wc.9.9.5" id="js-cookie-js" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = { ajax_url: "\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/?wc-ajax=%%endpoint%%", i18n_password_show: "Show password", i18n_password_hide: "Hide password" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.mindaac.js?ver=9.9.5" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/underscore.min3ab8.js?ver=1.13.7" id="underscore-js"></script>
        <script type="text/javascript" id="wp-util-js-extra">
            /* <![CDATA[ */
            var _wpUtilSettings = { ajax: { url: "\/wp-admin\/admin-ajax.php" } };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-includes/js/wp-util.min6c2d.js?ver=6.8.2" id="wp-util-js"></script>
        <link rel="https://api.w.org/" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/index.html" />
        <link rel="alternate" title="JSON" type="application/json" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/wp/v2/pages/740" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.8.2" />
        <meta name="generator" content="WooCommerce 9.9.5" />
        <link rel="canonical" href="index.html" />
        <link rel="shortlink" href="../index8da8.html?p=740" />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/oembed/1.0/embed4ef5?url=https%3A%2F%2Fbitrader.thetork.com%2Fabout-us%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/oembed/1.0/embed884f?url=https%3A%2F%2Fbitrader.thetork.com%2Fabout-us%2F&amp;format=xml" />
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <meta name="generator" content="Elementor 3.30.0; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap" />
        <style>
            .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
            @media screen and (max-height: 1024px) {
                .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
            @media screen and (max-height: 640px) {
                .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
        </style>
        <link rel="icon" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/favicon-2-150x150.png" sizes="32x32" />
        <link rel="icon" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/favicon-2.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/favicon-2.png" />
        <meta name="msapplication-TileImage" content="https://bitrader.thetork.com/wp-content/uploads/2023/10/favicon-2.png" />
        <style id="kirki-inline-styles"></style>
    </head>

    <body
        class="wp-singular page-template page-template-elementor_header_footer page page-id-740 wp-embed-responsive wp-theme-bitrader theme-bitrader woocommerce-no-js ehf-footer ehf-template-bitrader ehf-stylesheet-bitrader no-sidebar elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-740"
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
        <!-- main-area -->
        <main class="main-area fix">
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area bg--cover" style="background-image: url({{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/06/breadcrumb_bg-1.png);">
                <div class="container">
                    <div class="breadcrumb-area__content">
                        <h2 class="mt-5">About Us</h2>
                        <nav aria-label="breadcrumb" class="breadcrumb">
                            <!-- Breadcrumb NavXT 7.4.1 -->
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Bitrader." href="../index.html" class="home"><span property="name">Bitrader</span></a><meta property="position" content="1" />
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name" class="post post-page current-item">About Us</span><meta property="url" content="https://bitrader.thetork.com/about-us/" /><meta property="position" content="2" />
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

            <div data-elementor-type="wp-page" data-elementor-id="740" class="elementor elementor-740">
                <div class="elementor-element elementor-element-f1ccdc3 e-flex e-con-boxed e-con e-parent" data-id="f1ccdc3" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-85e65a5 elementor-widget elementor-widget-tg-video" data-id="85e65a5" data-element_type="widget" data-widget_type="tg-video.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();
                                    });
                                </script>

                                <div class="story__wrapper">
                                    <div class="story__thumb">
                                        <div class="story__thumb-inner" data-aos="fade-up" data-aos-duration="800">
                                            <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/about_video.png" alt="story-image" />

                                            <div class="story__thumb-playbtn">
                                                <a href="https://www.youtube.com/watch?v=k3c1SjlifDY" data-fslightbox><i class="fas fa-play-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4b1b29d e-flex e-con-boxed e-con e-parent" data-id="4b1b29d" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-915456f e-con-full e-flex e-con e-child" data-id="915456f" data-element_type="container">
                            <div class="elementor-element elementor-element-898804a elementor-widget elementor-widget-genix-image" data-id="898804a" data-element_type="widget" data-widget_type="genix-image.default">
                                <div class="elementor-widget-container">
                                    <script>
                                        jQuery(document).ready(function ($) {
                                            AOS.init();
                                        });
                                    </script>

                                    <div class="about__thumb pe-lg-5" data-aos="fade-right" data-aos-duration="800">
                                        <div class="about__thumb-inner">
                                            <div class="about__thumb-image floating-content">
                                                <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/about01-2.png" alt="" />

                                                <div class="floating-content__top-left">
                                                    <div class="floating-content__item">
                                                        <h3>10 Years</h3>
                                                        <p>Consulting Experience</p>
                                                    </div>
                                                </div>

                                                <div class="floating-content__bottom-right">
                                                    <div class="floating-content__item">
                                                        <h3>2.5K+</h3>
                                                        <p>Satisfied Customers</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4fd3e4a e-con-full e-flex e-con e-child" data-id="4fd3e4a" data-element_type="container">
                            <div class="elementor-element elementor-element-fca55e7 elementor-widget elementor-widget-heading" data-id="fca55e7" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Meet <span style="color: var(--secondary-color);">with us</span> unless miss the opportunity</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f38eb88 elementor-widget elementor-widget-heading" data-id="f38eb88" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <p class="elementor-heading-title elementor-size-default">
                                        Hey there! So glad you stopped by to Meet with us. Don't miss out on this opportunity to learn about what we do and the amazing team that makes it all happen! Our company is all about creating
                                        innovative solutions and providing top-notch services to our clients. From start to finish, we're dedicated to delivering results that exceed expectations.
                                    </p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c473e79 elementor-widget elementor-widget-tg-btn" data-id="c473e79" data-element_type="widget" data-widget_type="tg-btn.default">
                                <div class="elementor-widget-container">
                                    <div class="myclass1">
                                        <a href="../contact-us/index.html" target="_self" rel="nofollow" class="trk-btn trk-btn--border trk-btn--primary"> Explore More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-cc25dd7 bg-color e-flex e-con-boxed e-con e-parent" data-id="cc25dd7" data-element_type="container">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-a93a63a elementor-widget__width-inherit elementor-absolute h-100 elementor-widget elementor-widget-bg-shapes"
                            data-id="a93a63a"
                            data-element_type="widget"
                            data-settings='{"_position":"absolute"}'
                            data-widget_type="bg-shapes.default"
                        >
                            <div class="elementor-widget-container">
                                <div class="roadmap--style1">
                                    <span class="roadmap__shape-item roadmap__shape-item--1">
                                        <span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-80d71fc elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                            data-id="80d71fc"
                            data-element_type="widget"
                            data-settings='{"_position":"absolute"}'
                            data-widget_type="image.default"
                        >
                            <div class="elementor-widget-container">
                                <img decoding="async" width="106" height="106" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/shape01-2.png" class="attachment-full size-full wp-image-238" alt="" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4b39e6c e-flex e-con-boxed e-con e-child" data-id="4b39e6c" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-41b6071 elementor-widget elementor-widget-tg-heading" data-id="41b6071" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title">Product <span>Roadmap</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-2963104 elementor-widget elementor-widget-heading" data-id="2963104" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">A product roadmap shows the path ahead, helps teams plan, and guides the delivery of the product.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-1e63a2e elementor-widget elementor-widget-genix-roadmap" data-id="1e63a2e" data-element_type="widget" data-widget_type="genix-roadmap.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();
                                    });
                                </script>

                                <div class="roadmap--style1">
                                    <div class="roadmap__wrapper">
                                        <div class="row gy-4 gy-md-0 gx-5">
                                            <div class="col-md-6 offset-md-6">
                                                <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                                    <div class="roadmap__item-inner">
                                                        <div class="roadmap__item-content">
                                                            <div class="roadmap__item-header">
                                                                <h3>Project Research</h3>
                                                                <span>P1</span>
                                                            </div>
                                                            <p>
                                                                Project research is the backbone of any successful project. It involves gathering information, setting objectives, and analyzing data to ensure the project is achievable.
                                                                Without proper research, projects can fail due to lack of knowledge.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                                                    <div class="roadmap__item-inner">
                                                        <div class="roadmap__item-content">
                                                            <div class="roadmap__item-header">
                                                                <h3>Framing Idea</h3>
                                                                <span>P2</span>
                                                            </div>
                                                            <p>
                                                                Project research is the backbone of any successful project. It involves gathering information, setting objectives, and analyzing data to ensure the project is achievable.
                                                                Without proper research, projects can fail due to lack of knowledge.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-6">
                                                <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                                    <div class="roadmap__item-inner">
                                                        <div class="roadmap__item-content">
                                                            <div class="roadmap__item-header">
                                                                <h3>Design First Draft</h3>
                                                                <span>P3</span>
                                                            </div>
                                                            <p>
                                                                Project research is the backbone of any successful project. It involves gathering information, setting objectives, and analyzing data to ensure the project is achievable.
                                                                Without proper research, projects can fail due to lack of knowledge.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                                                    <div class="roadmap__item-inner">
                                                        <div class="roadmap__item-content">
                                                            <div class="roadmap__item-header">
                                                                <h3>Final Design</h3>
                                                                <span>P4</span>
                                                            </div>
                                                            <p>
                                                                So after lots of reiterations, and endless tweaking, we finally landed on the final design. It's slick, it's modern, and it perfectly captures the essence of what we were
                                                                aiming for. We couldn't be more excited to launch it!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 offset-md-6">
                                                <div class="roadmap__item ms-md-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                                    <div class="roadmap__item-inner">
                                                        <div class="roadmap__item-content">
                                                            <div class="roadmap__item-header">
                                                                <h3>Project Development</h3>
                                                                <span>P5</span>
                                                            </div>
                                                            <p>
                                                                So we're deep in project development here, and things are coming along nicely. We've got a solid plan in place and our team is firing on all cylinders. There's still work to be
                                                                done, but we're excited about what we're building.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="roadmap__item roadmap__item--style2 ms-auto me-md-4 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                                                    <div class="roadmap__item-inner">
                                                        <div class="roadmap__item-content">
                                                            <div class="roadmap__item-header">
                                                                <h3>Launch Project</h3>
                                                                <span>P6</span>
                                                            </div>
                                                            <p>
                                                                Alright folks, it's time to get this project off the ground! We've been talking about it for weeks, and now it's time to launch. We've got all the pieces in place, so let's get
                                                                to work and make this thing happen!
                                                            </p>
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
                <div class="elementor-element elementor-element-3134e90 bg-color e-flex e-con-boxed e-con e-parent" data-id="3134e90" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-783bbdc e-flex e-con-boxed e-con e-child" data-id="783bbdc" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-498e9a0 elementor-widget elementor-widget-tg-heading" data-id="498e9a0" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title">Meet Our <span>Advisers</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f0383f8 elementor-widget elementor-widget-heading" data-id="f0383f8" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Hey everyone, meet our amazing advisers! They're here to help and guide us through anything.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-37914d1 aboutteam elementor-widget elementor-widget-tg-team" data-id="37914d1" data-element_type="widget" data-widget_type="tg-team.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();
                                    });
                                </script>

                                <!-- style 2 -->

                                <div class="team__wrapper">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="800">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            fetchpriority="high"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_5-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_5-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_5-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/albert-flores/index.html">Albert Flores</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Management Consultant
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="900">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_6-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_6-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_6-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/courtney-henry/index.html">Courtney Henry</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Strategic Advisor
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1000">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_3-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_3-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_3-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/theresa-webb/index.html">Theresa Webb</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Trade Captain
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1100">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_2-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_2-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_2-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/dianne-russell/index.html">Dianne Russell</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Financial Advisor
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1200">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_4-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_4-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_4-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/darrell-steward/index.html">Darrell Steward</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Management Consultant
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1300">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_7-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_7-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_7-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/wade-warren/index.html">Wade Warren</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Development Specialist
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1400">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_8-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_8-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_8-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/cody-fisher/index.html">Cody Fisher</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Management Consultant
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <div class="team__item team__item--shape" data-aos="fade-up" data-aos-duration="1500">
                                                <div class="team__item-inner team__item-inner--shape">
                                                    <div class="team__item-thumb team__item-thumb--style1">
                                                        <img
                                                            loading="lazy"
                                                            decoding="async"
                                                            width="450"
                                                            height="592"
                                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/team_1-2.png"
                                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                            alt=""
                                                            srcset="https://bitrader.thetork.com/wp-content/uploads/2023/10/team_1-2.png 450w, https://bitrader.thetork.com/wp-content/uploads/2023/10/team_1-2-228x300.png 228w"
                                                            sizes="(max-width: 450px) 100vw, 450px"
                                                        />
                                                    </div>
                                                    <div class="team__item-content team__item-content--style1">
                                                        <div class="team__item-author team__item-author--style1">
                                                            <div class="team__item-authorinfo">
                                                                <h6 class="mb-1">
                                                                    <a class="stretched-link" href="../teams/bessie-cooper/index.html">Bessie Cooper</a>
                                                                </h6>
                                                                <p class="mb-0">
                                                                    Strategic Advisor
                                                                </p>
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
                        <div class="elementor-element elementor-element-0d1c1d9 e-con-full e-flex e-con e-child" data-id="0d1c1d9" data-element_type="container">
                            <div class="elementor-element elementor-element-c81045e elementor-widget elementor-widget-tg-btn" data-id="c81045e" data-element_type="widget" data-widget_type="tg-btn.default">
                                <div class="elementor-widget-container">
                                    <div class="myclass1">
                                        <a href="../our-team/index.html" target="_self" rel="nofollow" class="trk-btn trk-btn--border trk-btn--primary"> View more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-9fa932b e-flex e-con-boxed e-con e-parent" data-id="9fa932b" data-element_type="container" data-settings='{"background_background":"classic"}'>
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-f68ee0c e-flex e-con-boxed e-con e-child" data-id="f68ee0c" data-element_type="container" data-settings='{"background_background":"classic"}'>
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-0b1600c e-con-full e-flex e-con e-child" data-id="0b1600c" data-element_type="container" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-element elementor-element-80f094f e-con-full e-flex e-con e-child" data-id="80f094f" data-element_type="container">
                                        <div class="elementor-element elementor-element-eeaaa62 elementor-widget elementor-widget-image" data-id="eeaaa62" data-element_type="widget" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <img loading="lazy" decoding="async" width="244" height="235" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta-2.png" class="attachment-full size-full wp-image-312" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-fba0a5c nwsltrcolor e-flex e-con-boxed e-con e-child" data-id="fba0a5c" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-fb71073 elementor-widget elementor-widget-tg-heading" data-id="fb71073" data-element_type="widget" data-widget_type="tg-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <h2 class="title"><span>Subscribe </span> Our News</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3eac447 elementor-widget elementor-widget-heading" data-id="3eac447" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-298a23d text-center elementor-widget elementor-widget-shortcode" data-id="298a23d" data-element_type="widget" data-widget_type="shortcode.default">
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
                                                            <input type="hidden" name="_mc4wp_timestamp" value="1752615921" /><input type="hidden" name="_mc4wp_form_id" value="329" />
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
                                    class="elementor-element elementor-element-c17c43a elementor-widget__width-auto elementor-absolute bit_rotate_animation elementor-widget elementor-widget-image"
                                    data-id="c17c43a"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img loading="lazy" decoding="async" width="65" height="65" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta_shape1-2.png" class="attachment-full size-full wp-image-341" alt="" />
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-70b6ac3 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                                    data-id="70b6ac3"
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
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
                        <h2 class="mt-5">Privacy Policy</h2>
                        <nav aria-label="breadcrumb" class="breadcrumb">
                            <!-- Breadcrumb NavXT 7.4.1 -->
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Bitrader." href="../index.html" class="home"><span property="name">Nuvareex</span></a><meta property="position" content="1" />
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name" class="post post-page current-item">Privacy Policy</span><meta property="url" content="https://bitrader.thetork.com/about-us/" /><meta property="position" content="2" />
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
                <div class="elementor-element elementor-element-9fa932b e-flex e-con-boxed e-con e-parent" data-id="9fa932b" data-element_type="container" data-settings='{"background_background":"classic"}'>
                    <div class="e-con-inner">
                        <div class="container py-5">
                            <h3 class="mb-4">Privacy Policy</h3>

                            <p>This Privacy Policy outlines how <strong>Nuvareex Trading LLC</strong> ("we", "our", or "us") collects, uses, discloses, and safeguards your information when you visit our website <a href="https://www.nuvareex.com">https://www.nuvareex.com</a>. Please read this privacy policy carefully. If you do not agree with the terms of this privacy policy, please do not access the site.</p>

                            <h4>1. Collection of Your Information</h4>
                            <p>We may collect information about you in a variety of ways. The information we may collect on the Site includes:</p>
                            <ul>
                                <li><strong>Personal Data:</strong> Personally identifiable information, such as your name, email address, phone number, and other similar contact information that you voluntarily give to us.</li>
                                <li><strong>Derivative Data:</strong> Information our servers automatically collect when you access the site, such as your IP address, browser type, access times, and pages viewed directly before and after accessing the site.</li>
                                <li><strong>Financial Data:</strong> Financial information, such as data related to your payment method (e.g., bank details, wire instructions), if you make deposits or withdrawals via our platform.</li>
                            </ul>

                            <h4>2. Use of Your Information</h4>
                            <p>We use the information we collect about you to:</p>
                            <ul>
                                <li>Provide, operate, and maintain our website and services</li>
                                <li>Improve your experience and personalize content</li>
                                <li>Communicate with you, including customer support</li>
                                <li>Send promotional information or updates (only if you opt in)</li>
                                <li>Process transactions and manage your account</li>
                                <li>Prevent fraudulent transactions, monitor against theft, and protect against criminal activity</li>
                            </ul>

                            <h4>3. Disclosure of Your Information</h4>
                            <p>We may share information we have collected about you in certain situations:</p>
                            <ul>
                                <li><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process or to protect the rights, property, and safety of others.</li>
                                <li><strong>Third-Party Service Providers:</strong> We may share your information with third parties that perform services for us or on our behalf, including payment processing, data analysis, and marketing assistance.</li>
                            </ul>

                            <h4>4. Security of Your Information</h4>
                            <p>We use administrative, technical, and physical security measures to protect your personal information. While we have taken reasonable steps to secure the personal information you provide, please be aware that no security measures are perfect or impenetrable.</p>

                            <h4>5. Policy for Children</h4>
                            <p>We do not knowingly solicit information from or market to children under the age of 18. If we learn that we have collected personal information from a child under age 18, we will delete that information as soon as possible.</p>

                            <h4>6. Options Regarding Your Information</h4>
                            <p>You may at any time review or change the information in your account or terminate your account by:</p>
                            <ul>
                                <li>Contacting us at <a href="mailto:nuvareextrading@gmail.com">nuvareextrading@gmail.com</a></li>
                                <li>Requesting data removal or updates in writing</li>
                            </ul>

                            <h4>7. Contact Us</h4>
                            <p>If you have questions or comments about this Privacy Policy, please contact us:</p>
                            <ul>
                                <li><strong>Company Name:</strong> Nuvareex Trading LLC</li>
                                <li><strong>License No:</strong> 4243LLC2025</li>
                                <li><strong>Registered in:</strong> St. Vincent & the Grenadines</li>
                                <li><strong>Email:</strong> <a href="mailto:nuvareextrading@gmail.com">nuvareextrading@gmail.com</a></li>
                                <li><strong>Phone:</strong> +971566238304</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
@endsection
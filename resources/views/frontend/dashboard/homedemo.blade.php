 @extends('frontend.dashboard.demo')
 @section('link')
 
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
        <link rel="alternate" title="JSON" type="application/json" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/wp/v2/pages/732" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
        <meta name="generator" content="WordPress 6.8.2" />
        <meta name="generator" content="WooCommerce 9.9.5" />
        <link rel="canonical" href="index.html" />
        <link rel="shortlink" href="../indexdc3d.html?p=732" />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/oembed/1.0/embed6360?url=https%3A%2F%2Fbitrader.thetork.com%2Four-services%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-json/oembed/1.0/embed9079?url=https%3A%2F%2Fbitrader.thetork.com%2Four-services%2F&amp;format=xml" />
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
 @endsection
 @section('part')

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

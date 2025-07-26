@extends('headerFooter')
@section('interfaceTitle') Nuvareex - Trade the Global Markets with Confidence @endsection
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
        <link rel="stylesheet" id="elementor-post-1267-css" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/elementor/css/post-12675fd6.css?ver=1750594187" type="text/css" media="all" />
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
        <link
            rel="stylesheet"
            id="magnific-popup-css"
            href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/woo-smart-quick-view/assets/libs/magnific-popup/magnific-popup6c2d.css?ver=6.8.2"
            type="text/css"
            media="all"
        />
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
        <link
            rel="stylesheet"
            id="hfe-social-share-icons-brands-css"
            href="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css?ver=5.15.3"
            type="text/css"
            media="all"
        />
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
        class="wp-singular page-template page-template-elementor_header_footer page page-id-1267 wp-embed-responsive wp-theme-bitrader theme-bitrader woocommerce-no-js ehf-footer ehf-template-bitrader ehf-stylesheet-bitrader no-sidebar home-4 elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-1267"
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
            <div data-elementor-type="wp-page" data-elementor-id="1267" class="elementor elementor-1267">
                <div class="elementor-element elementor-element-97c6a74 e-con-full e-flex e-con e-parent" data-id="97c6a74" data-element_type="container">
                    <div class="elementor-element elementor-element-c016561 elementor-widget elementor-widget-hero-banner" data-id="c016561" data-element_type="widget" data-widget_type="hero-banner.default">
                        <div class="elementor-widget-container">
                            <script>
                                jQuery(document).ready(function ($) {
                                    AOS.init();
                                });
                            </script>

                            <section class="banner banner--style4 bg--cover" style="background-image: url({{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/04/1-3.png);">
                                <div class="container">
                                    <div class="banner__wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 justify-content-center">
                                                <div class="banner__content" data-aos="fade-up" data-aos-duration="800">
                                                    <h1>
                                                        Empower Your ultimate Financial Future
                                                    </h1>

                                                    <p>
                                                        Explore our comprehensive resources and expert insights to empower your trading journey. Master the art of making decision.
                                                    </p>

                                                    <div class="banner__content-btn btn-group normalbtnh4 justify-content-center">
                                                        <a href="#" target="_blank" rel="nofollow" class="trk-btn trk-btn--success text-mute fw-bold"><i class="fa-sharp fa-light fa-money-bill-trend-up"></i> Start Trading </a>
                                                        <a href="#" target="_blank" rel="nofollow" class="trk-btn btn-secondary text-light"><i class="fa-sharp fa-light fa-code-compare fw-bold"></i> Try A Free Demo </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-36475d9 e-con-full e-flex e-con e-parent" data-id="36475d9" data-element_type="container">
                    <div class="elementor-element elementor-element-5b68ec9 elementor-widget elementor-widget-tg-counterups" data-id="5b68ec9" data-element_type="widget" data-widget_type="tg-counterups.default">
                        <div class="elementor-widget-container">
                            <script>
                                jQuery(document).ready(function ($) {
                                    AOS.init();
                                });
                            </script>

                            <!-- ===============>> counter start here << ================= -->
                            <div class="counter padding-bottom">
                                <div class="container-fluid">
                                    <div class="row justify-content-center detailsBox">
                                        <div class="col-md-10">
                                            <div class="row g-3">
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="counter__item" data-aos="fade-up" data-aos-duration="800">
                                                        <div class="counter__item-inner">
                                                            <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/04/1-1-2.png" alt="Nuvareex" class="dark" />
                                                            <h3><span>0.0</span></h3>
                                                            <p>PIP SPREADS*</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="counter__item" data-aos="fade-up" data-aos-duration="800">
                                                        <div class="counter__item-inner">
                                                            <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/04/2-1-2.png" alt="Nuvareex" class="dark" />
                                                            <h3><span>1: 1000</span></h3>
                                                            <p>Leverage</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="counter__item" data-aos="fade-up" data-aos-duration="800">
                                                        <div class="counter__item-inner">
                                                            <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/04/3-2.png" alt="Nuvareex" class="dark" />
                                                            <h3><span>0.01</span> +</h3>
                                                            <p>STANDARD LOT</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-lg-3">
                                                    <div class="counter__item" data-aos="fade-up" data-aos-duration="800">
                                                        <div class="counter__item-inner">
                                                            <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2024/04/4-2.png" alt="Nuvareex" class="dark" />
                                                            <h3><span>2</span> k+</h3>
                                                            <p>INSTRUMENTS</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ===============>> counter end here << ================= -->
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e64b589 e-con-full e-flex e-con e-parent" data-id="e64b589" data-element_type="container">
                    <div class="elementor-element elementor-element-6488ac0 elementor-widget elementor-widget-genix-aboutsection" data-id="6488ac0" data-element_type="widget" data-widget_type="genix-aboutsection.default">
                        <div class="elementor-widget-container">
                            <script>
                                jQuery(document).ready(function ($) {
                                    AOS.init();
                                });
                            </script>

                            <section class="about about--style3 padding-bottom">
                                <div class="container">
                                    <div class="about__wrapper">
                                        <div class="row g-4 align-items-center">
                                            <div class="col-md-6">
                                                <div class="about__thumb about__thumb--style4" data-aos="fade-right" data-aos-duration="800">
                                                    <div class="about__thumb-inner">
                                                        <div class="about__thumb-image text-center floating-content">
                                                            <img decoding="async" class="dark" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/about.png" alt="Nuvareex" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about__content" data-aos="fade-left" data-aos-duration="800">
                                                    <h2>Meet<span> With Us</span> Unless Miss The Opportunity</h2>
                                                    <p class="mb-0">
                                                        Hey there! So glad you stopped by to Meet with us. Don't miss out on this opportunity to learn about what we do and the amazing team that makes it all happen! Our company is all about
                                                        creating innovative solutions and providing top-notch services to our clients. From start to finish, we're dedicated to delivering results that exceed expectations.
                                                    </p>

                                                    <div class="about_btnc">
                                                        <a href="#" target="_blank" rel="nofollow" class="trk-btn trk-btn--primary trk-btn--arrow">
                                                            Explore More
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                <section class="raw-chart-sec">
                    <div class="container py-5">
                        <div class="card" style="background:url('{{ asset('public/wp-content/uploads/2023/10/') }}/darkSpark2.jpg');background-size: 100%;">
                            <div class="darkBg">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-5">
                                        <h4 class="text-white display-5 fw-bold">The Raw Spread Advantage</h4>
                                        <p style="text-align:justify">Raw Spreads are the difference you have been waiting for. Trade with spreads from 0.0 pips, no requotes, best possible prices and no restrictions. Nuvareex Trading LLC is the multi-asset trading platform of choice for high volume traders, scalpers and robots.</p>
                                        <a href="#" class="btn btn-success btn-lg mb-md-0 mb-4">Try a Free Demo</a>
                                    </div>
                                    <div class="col-12 col-md-7 mx-auto">
                                        <!-- TradingView Market Overview Widget BEGIN -->
                                        <div class="tradingview-widget-container">
                                            <div class="tradingview-widget-container__widget"></div>
                                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                                            {
                                                "colorTheme": "light",
                                                "dateRange": "12M",
                                                "showChart": true,
                                                "locale": "en",
                                                "width": "100%",
                                                "height": "400",
                                                "largeChartUrl": "",
                                                "isTransparent": false,
                                                "showSymbolLogo": true,
                                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                                "plotLineColorFalling": "rgba(255, 74, 104, 1)",
                                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                                "scaleFontColor": "rgba(106, 109, 120, 1)",
                                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                                "belowLineFillColorFalling": "rgba(255, 74, 104, 0.12)",
                                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                                "tabs": [
                                                {
                                                    "title": "Forex",
                                                    "symbols": [
                                                    { "s": "FX:EURUSD", "d": "EUR/USD" },
                                                    { "s": "FX:GBPUSD", "d": "GBP/USD" },
                                                    { "s": "FX:USDJPY", "d": "USD/JPY" },
                                                    { "s": "FX:AUDUSD", "d": "AUD/USD" },
                                                    { "s": "FX:USDCAD", "d": "USD/CAD" }
                                                    ],
                                                    "originalTitle": "Forex"
                                                },
                                                {
                                                    "title": "Commodities",
                                                    "symbols": [
                                                    { "s": "TVC:GOLD", "d": "Gold" },
                                                    { "s": "TVC:SILVER", "d": "Silver" },
                                                    { "s": "TVC:USOIL", "d": "Crude Oil" }
                                                    ],
                                                    "originalTitle": "Commodities"
                                                },
                                                {
                                                    "title": "Indices",
                                                    "symbols": [
                                                    { "s": "FOREXCOM:SPXUSD", "d": "S&P 500" },
                                                    { "s": "FOREXCOM:DJI", "d": "Dow Jones" },
                                                    { "s": "FOREXCOM:NSXUSD", "d": "Nasdaq 100" }
                                                    ],
                                                    "originalTitle": "Indices"
                                                },
                                                {
                                                    "title": "Crypto",
                                                    "symbols": [
                                                    { "s": "BINANCE:BTCUSDT", "d": "Bitcoin" },
                                                    { "s": "BINANCE:ETHUSDT", "d": "Ethereum" },
                                                    { "s": "BINANCE:BNBUSDT", "d": "BNB" }
                                                    ],
                                                    "originalTitle": "Cryptocurrencies"
                                                }
                                                ]
                                            }
                                            </script>
                                        </div>
                                        <!-- TradingView Market Overview Widget END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1bca9ce bg-color-7 e-flex e-con-boxed e-con e-parent px-4" data-id="1bca9ce" data-element_type="container" data-settings='{"background_background":"classic"}'>
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-2365fe6 e-flex e-con-boxed e-con e-child" data-id="2365fe6" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-09382a6 elementor-widget elementor-widget-tg-heading" data-id="09382a6" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title"><span style="color: var(--brand-color);">Services</span> We offer</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-415304d elementor-widget elementor-widget-heading" data-id="415304d" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">We offer the best services around - general trading, social trading/copy trading, investment plans, and more!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-f763df7 elementor-widget elementor-widget-tg-servicesBox" data-id="f763df7" data-element_type="widget" data-widget_type="tg-servicesBox.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();
                                    });
                                </script>

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="800">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services01.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="#">Strategy Consulting</a>
                                                    </h5>
                                                    <p class="mb-0">A social assistant that's flexible can accommodate your schedule and needs, making life easier.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="900">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services02.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="#">Financial Advisory</a>
                                                    </h5>
                                                    <p class="mb-0">Modules transform smart trading by automating processes and improving decision-making.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services03.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="#">Management</a>
                                                    </h5>
                                                    <p class="mb-0">There, it's me, your friendly neighborhood reporter's news analyst processes and improving</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1100">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services04.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="#">Supply Optimization</a>
                                                    </h5>
                                                    <p class="mb-0">Hey, have you checked out that new cryptocurrency platform? It's pretty cool and easy to use!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1200">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services05.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="#">HR consulting</a>
                                                    </h5>
                                                    <p class="mb-0">Hey guys, just a quick update on exchange orders. There have been some changes currency!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                        <div class="service__item service__item--style2" data-aos="fade-up" data-aos-duration="1300">
                                            <div class="service__item-inner text-center">
                                                <div class="service__thumb mb-30">
                                                    <div class="service__thumb-inner">
                                                        <img decoding="async" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/services06.png" width="48" alt="Icon" />
                                                    </div>
                                                </div>
                                                <div class="service__content">
                                                    <h5 class="mb-15">
                                                        <a class="stretched-link" href="#">Marketing consulting</a>
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
                            class="elementor-element elementor-element-be96881 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                            data-id="be96881"
                            data-element_type="widget"
                            data-settings='{"_position":"absolute"}'
                            data-widget_type="image.default"
                        >
                            <div class="elementor-widget-container">
                                <img decoding="async" width="106" height="106" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/shape01-2.png" class="attachment-full size-full wp-image-238" alt="" />
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-e4ec115 elementor-widget__width-auto elementor-absolute bit_rotate_animation elementor-widget elementor-widget-image"
                            data-id="e4ec115"
                            data-element_type="widget"
                            data-settings='{"_position":"absolute"}'
                            data-widget_type="image.default"
                        >
                            <div class="elementor-widget-container">
                                <img decoding="async" width="65" height="65" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta_shape1-2.png" class="attachment-full size-full wp-image-341" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-da409ff e-flex e-con-boxed e-con e-parent px-4" data-id="da409ff" data-element_type="container" data-settings='{"background_background":"classic"}'>
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-271bdd7 e-flex e-con-boxed e-con e-child" data-id="271bdd7" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-e706358 elementor-widget elementor-widget-tg-heading" data-id="e706358" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title">Our <span>Investment </span>Plans</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7394a16 elementor-widget elementor-widget-heading" data-id="7394a16" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Instant account opening & funding. Trade within minutes!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 table-responsive">
                            @include('packageTable')
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-96fa530 bg-color e-flex e-con-boxed e-con e-parent" data-id="96fa530" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-060d2c8 e-flex e-con-boxed e-con e-child" data-id="060d2c8" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-5510ff8 elementor-widget elementor-widget-tg-heading" data-id="5510ff8" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title">Meet Our <span>Advisers</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4ab4fc3 elementor-widget elementor-widget-heading" data-id="4ab4fc3" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Hey everyone, meet our amazing advisers! They're here to help and guide us through anything.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-880d832 elementor-widget elementor-widget-tg-team" data-id="880d832" data-element_type="widget" data-widget_type="tg-team.default">
                            <div class="elementor-widget-container">
                                <script>
                                    jQuery(document).ready(function ($) {
                                        AOS.init();
                                    });
                                </script>

                                <!-- style 2 -->
                                @include('advisorTeam')
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-6d85ff5 e-con-full e-flex e-con e-child" data-id="6d85ff5" data-element_type="container">
                            <div class="elementor-element elementor-element-bb1ff4b elementor-widget elementor-widget-tg-btn" data-id="bb1ff4b" data-element_type="widget" data-widget_type="tg-btn.default">
                                <div class="elementor-widget-container">
                                    <div class="myclass1">
                                        <a href="{{ route('aboutUs') }}" target="_self" rel="nofollow" class="trk-btn trk-btn--border trk-btn--primary"> View more </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ed4ee47 bg-color e-flex e-con-boxed e-con e-parent px-4" data-id="ed4ee47" data-element_type="container">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-d6e0d80 e-con-full e-flex e-con e-child" data-id="d6e0d80" data-element_type="container">
                            <div class="elementor-element elementor-element-f251bb9 e-con-full e-flex e-con e-child" data-id="f251bb9" data-element_type="container">
                                <div class="elementor-element elementor-element-757244a elementor-widget elementor-widget-tg-heading" data-id="757244a" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title">Connect With <span>Our Clients</span></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-a10bf44 elementor-widget elementor-widget-heading" data-id="a10bf44" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">We love connecting with our clients to hear about their experiences and how we can improve.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-542c670 e-con-full e-flex e-con e-child" data-id="542c670" data-element_type="container">
                                <div class="elementor-element elementor-element-a51122a elementor-widget elementor-widget-html" data-id="a51122a" data-element_type="widget" data-widget_type="html.default">
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
                        <div class="elementor-element elementor-element-6fac68b elementor-widget elementor-widget-testimonial" data-id="6fac68b" data-element_type="widget" data-widget_type="testimonial.default">
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
                                                                        <h6>James Rutz</h6>
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
                                                                        <h6>John Bridgeman</h6>
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
                <div class="elementor-element elementor-element-c6d2a2d e-flex e-con-boxed e-con e-parent px-4" data-id="c6d2a2d" data-element_type="container">
                    <div class="e-con-inner">
                        <div
                            class="elementor-element elementor-element-ed540c8 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                            data-id="ed540c8"
                            data-element_type="widget"
                            data-settings='{"_position":"absolute"}'
                            data-widget_type="image.default"
                        >
                            <div class="elementor-widget-container">
                                <img decoding="async" width="106" height="106" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/shape01-2.png" class="attachment-full size-full wp-image-238" alt="" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-984fd96 e-flex e-con-boxed e-con e-child" data-id="984fd96" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-5382304 elementor-widget elementor-widget-tg-heading" data-id="5382304" data-element_type="widget" data-widget_type="tg-heading.default">
                                    <div class="elementor-widget-container">
                                        <div class="section-title">
                                            <h2 class="title"><span>Frequently</span> Asked Questions</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-51e4413 elementor-widget elementor-widget-heading" data-id="51e4413" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">Hey there! Got questions? We've got answers. Check out our FAQ page for all the deets. Still not satisfied? Hit us up.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-882e7d1 e-con-full e-flex e-con e-child" data-id="882e7d1" data-element_type="container">
                            <div class="elementor-element elementor-element-d44c661 e-flex e-con-boxed e-con e-child" data-id="d44c661" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-118bc09 elementor-widget elementor-widget-genix-faq" data-id="118bc09" data-element_type="widget" data-widget_type="genix-faq.default">
                                        <div class="elementor-widget-container">
                                            <script>
                                                jQuery(document).ready(function ($) {
                                                    AOS.init();
                                                });
                                            </script>

                                            <div class="accordion accordion--style1" id="faqAccordion1" data-aos="fade-right" data-aos-duration="1000">
                                                <div class="accordion__item">
                                                    <div class="accordion__header" id="faq0">
                                                        <button class="accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody0" aria-expanded="false" aria-controls="faqBody0">
                                                            <span class="accordion__button-content"> What does this tool do? </span>
                                                            <span class="accordion__button-plusicon"></span>
                                                        </button>
                                                    </div>
                                                    <div id="faqBody0" class="accordion-collapse collapse show" aria-labelledby="faq0" data-bs-parent="#faqAccordion1">
                                                        <div class="accordion__body">
                                                            <p class="mb-15">Online trading’s primary advantages are that it allows you to manage your trades at your convenience.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header" id="faq1">
                                                        <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody1" aria-expanded="false" aria-controls="faqBody1">
                                                            <span class="accordion__button-content"> What are the disadvantages of online trading? </span>
                                                            <span class="accordion__button-plusicon"></span>
                                                        </button>
                                                    </div>
                                                    <div id="faqBody1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion1">
                                                        <div class="accordion__body px-2">
                                                            <p> Security Risks</p>
                                                            <p> Lack of Expert Guidance</p>
                                                            <p> Overtrading and </p>
                                                            <p> Emotional Decisions</p>
                                                            <p> Technical Issues</p>
                                                            <p> Hidden Costs and Fees</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header" id="faq2">
                                                        <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody2" aria-expanded="false" aria-controls="faqBody2">
                                                            <span class="accordion__button-content"> Is online trading safe? </span>
                                                            <span class="accordion__button-plusicon"></span>
                                                        </button>
                                                    </div>
                                                    <div id="faqBody2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion1">
                                                        <div class="accordion__body px-2">
                                                            <p><span class="fw-bold">Yes, online trading can be safe</span> — but only if proper precautions are taken.It depends on factors like the platform you use, your personal security practices, and awareness of potential risks.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header" id="faq3">
                                                        <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody3" aria-expanded="false" aria-controls="faqBody3">
                                                            <span class="accordion__button-content"> What is online trading, and how does it work? </span>
                                                            <span class="accordion__button-plusicon"></span>
                                                        </button>
                                                    </div>
                                                    <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion1">
                                                        <div class="accordion__body px-2">
                                                            <p class="mb-15">Online trading is the process of buying and selling financial assets—like stocks, bonds, commodities, or cryptocurrencies—through internet-based platforms.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header" id="faq4">
                                                        <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody4" aria-expanded="false" aria-controls="faqBody4">
                                                            <span class="accordion__button-content"> Is Nuvareex apps safe for online trading? </span>
                                                            <span class="accordion__button-plusicon"></span>
                                                        </button>
                                                    </div>
                                                    <div id="faqBody4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion1">
                                                        <div class="accordion__body">
                                                            <p class="mb-15">Yes, Nuvareex trading apps (such as an accociate of Match-Trader platform) can be safe for online trading — because of they are using through a regulated and reputable broker.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion__item">
                                                    <div class="accordion__header" id="faq5">
                                                        <button class="accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqBody5" aria-expanded="false" aria-controls="faqBody5">
                                                            <span class="accordion__button-content"> How does this work? </span>
                                                            <span class="accordion__button-plusicon"></span>
                                                        </button>
                                                    </div>
                                                    <div id="faqBody5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion1">
                                                        <div class="accordion__body px-2">
                                                            <div style="margin-bottom: 20px;">
                                                                <h3 class="h5">1. Open an Account</h3>
                                                                <p>Choose a trusted online broker or trading app and create an account.</p>
                                                            </div>

                                                            <div style="margin-bottom: 20px;">
                                                                <h3 class="h5">2. Deposit Funds</h3>
                                                                <p>Add money to your account using a bank transfer, card, or digital payment.</p>
                                                            </div>

                                                            <div style="margin-bottom: 20px;">
                                                                <h3 class="h5">3. Choose an Asset to Trade</h3>
                                                                <p>Search for a stock, forex pair, crypto, or commodity you want to trade.</p>
                                                            </div>

                                                            <div style="margin-bottom: 20px;">
                                                                <h3 class="h5">4. Place an Order</h3>
                                                                <p>Decide whether to buy or sell, set the quantity, and choose order type (market, limit, stop-loss, etc.).</p>
                                                            </div>

                                                            <div style="margin-bottom: 20px;">
                                                                <h3 class="h5">5. Monitor and Manage Trades</h3>
                                                                <p>Track your trades in real-time and make decisions based on price changes or market news.</p>
                                                            </div>

                                                            <div style="margin-bottom: 20px;">
                                                                <h3 class="h5">6. Withdraw Profits or Reinvest</h3>
                                                                <p>Sell when you're ready and withdraw funds to your bank account, or reinvest in other assets.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a268e6c e-flex e-con-boxed e-con e-child" data-id="a268e6c" data-element_type="container">
                                <div class="e-con-inner">
                                    <div class="elementor-element elementor-element-30eb170 faq__thumb--style1 elementor-widget elementor-widget-image" data-id="30eb170" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img
                                                loading="lazy"
                                                decoding="async"
                                                src="{{ asset('public/') }}/wp-content/uploads/2023/10/faq.jpg"
                                                class="attachment-full w-100 rounded"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-96259f1 bg-color e-flex e-con-boxed e-con e-parent px-4" data-id="96259f1" data-element_type="container" data-settings='{"background_background":"classic"}'>
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-71c5500 e-flex e-con-boxed e-con e-child" data-id="71c5500" data-element_type="container" data-settings='{"background_background":"classic"}'>
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-c4bc964 e-con-full e-flex e-con e-child" data-id="c4bc964" data-element_type="container" data-settings='{"background_background":"classic"}'>
                                    <div class="elementor-element elementor-element-b3a2a80 e-con-full e-flex e-con e-child" data-id="b3a2a80" data-element_type="container">
                                        <div
                                            class="elementor-element elementor-element-22a8f4a cta__thumb elementor-widget__width-inherit elementor-widget elementor-widget-image"
                                            data-id="22a8f4a"
                                            data-element_type="widget"
                                            data-widget_type="image.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <img
                                                    loading="lazy"
                                                    decoding="async"
                                                    width="244"
                                                    height="235"
                                                    src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta-2.png"
                                                    class="attachment-full size-full wp-image-312"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6281c5e nwsltrcolor e-flex e-con-boxed e-con e-child" data-id="6281c5e" data-element_type="container">
                                        <div class="e-con-inner">
                                            <div class="elementor-element elementor-element-f3d1d96 elementor-widget elementor-widget-tg-heading" data-id="f3d1d96" data-element_type="widget" data-widget_type="tg-heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="section-title">
                                                        <h2 class="title"><span>Subscribe </span> Our News</h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7fdd33d elementor-widget elementor-widget-heading" data-id="7fdd33d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in the loop!</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7e708de text-center elementor-widget elementor-widget-shortcode" data-id="7e708de" data-element_type="widget" data-widget_type="shortcode.default">
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
                                                            <input type="hidden" name="_mc4wp_timestamp" value="1752623720" /><input type="hidden" name="_mc4wp_form_id" value="329" />
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
                                    class="elementor-element elementor-element-f4c055e elementor-widget__width-auto elementor-absolute bit_rotate_animation elementor-widget elementor-widget-image"
                                    data-id="f4c055e"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            decoding="async"
                                            width="65"
                                            height="65"
                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/cta_shape1-2.png"
                                            class="attachment-full size-full wp-image-341"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div
                                    class="elementor-element elementor-element-24f1075 elementor-widget__width-auto elementor-absolute upAndDown_animation elementor-widget elementor-widget-image"
                                    data-id="24f1075"
                                    data-element_type="widget"
                                    data-settings='{"_position":"absolute"}'
                                    data-widget_type="image.default"
                                >
                                    <div class="elementor-widget-container">
                                        <img
                                            decoding="async"
                                            width="106"
                                            height="106"
                                            src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/uploads/2023/10/shape01-2.png"
                                            class="attachment-full size-full wp-image-238"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
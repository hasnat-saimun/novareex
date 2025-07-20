<div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="logo">
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    var toggleVersionButton = document.getElementById("btnSwitch");
                                    var mainLogo = document.getElementById("main-logo");

                                    // Logo URLs from PHP
                                    var lightLogoUrl = "{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/logo.png";
                                    var darkLogoUrl = "{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/logo-dark.png";

                                    // Initial mode from PHP
                                    var isDarkVersion = true;

                                    // Set initial logo
                                    mainLogo.src = isDarkVersion ? darkLogoUrl : lightLogoUrl;

                                    // Toggle logo on button click
                                    toggleVersionButton.addEventListener("click", function () {
                                        isDarkVersion = !isDarkVersion;
                                        mainLogo.src = isDarkVersion ? darkLogoUrl : lightLogoUrl;
                                    });
                                });
                            </script>

                            <a class="main-logo" href="index.html">
                                <img id="main-logo" class="dark" src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/logo-dark.png" style="max-height: 30px;" alt="Logo" />
                            </a>
                        </div>
                        <div class="menu-area menu--style1">
                            <ul id="menu-main-menu" class="menu menu">
                                <li
                                    itemscope="itemscope"
                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-826"
                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children dropdown has-dropdown active menu-item-826 nav-item"
                                >
                                    <a title="Home" href="{{route('homePage')}}" class="nav-links">Home</a>
                                    
                                </li>
                                <li
                                    itemscope="itemscope"
                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-827"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown has-dropdown menu-item-827 nav-item"
                                >
                                    <a title="Services" href="#" class="nav-links">Services</a>
                                    <ul class="submenu" role="menu">
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-823" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-823 nav-item">
                                            <a title="Our Services" href="our-services/index.html" class="dropdown-items">Our Services</a>
                                        </li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-828" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-828 nav-item">
                                            <a title="Services Details" href="services/strategy-consulting/index.html" class="dropdown-items">Services Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item">
                                    <a title="About Us" href="about-us/index.html" class="nav-links">About Us</a>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-819" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819 nav-item">
                                    <a title="Contact Us" href="contact-us/index.html" class="nav-links">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-action">
                            <div class="menu-area">
                                <div class="header-btn">
                                    <a href="contact-us/index.html" style="background-color: #00d094; border: 1px solid #00d094;" class="trk-btn trk-btn--border trk-btn--primary">
                                        <span>Join Now</span>
                                    </a>
                                </div>

                                <!-- toggle icons -->
                                <div class="header-bar d-lg-none header-bar--style1">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- 

 @verbatim
        <script type="text/template" id="tmpl-variation-template">
            <div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
            <div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
            <div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
        </script>
        @endverbatim -->
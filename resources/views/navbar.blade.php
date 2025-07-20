<header id="sticky-header" class="header-section header-section--style4">
            <div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper">
                        <div class="logo">
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                	var toggleVersionButton = document.getElementById('btnSwitch');
                                	var mainLogo = document.getElementById('main-logo');

                                	// Logo URLs from PHP
                                	var lightLogoUrl = "{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/logo.png";
                                	var darkLogoUrl = "{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/logo-dark.png";

                                	// Initial mode from PHP
                                	var isDarkVersion = true;

                                	// Set initial logo
                                	mainLogo.src = isDarkVersion ? darkLogoUrl : lightLogoUrl;

                                	// Toggle logo on button click
                                	toggleVersionButton.addEventListener('click', function() {
                                		isDarkVersion = !isDarkVersion;
                                		mainLogo.src = isDarkVersion ? darkLogoUrl : lightLogoUrl;
                                	});
                                });
                            </script>

                            <a class="secondary-logo" href="{{ asset('public/novareex/bitrader.thetork.com/') }}/index.html">
                                <img src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/secondary_logo.svg" style="max-height: 30px;" alt="Logo" />
                            </a>
                        </div>
                        <div class="menu-area menu--style2">
                            <ul id="menu-main-menu" class="menu menu">
                                <li
                                    itemscope="itemscope"
                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-826"
                                >
                                    <a title="Home" href="{{route('home')}}" class="nav-links">Home</a>
                                    
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
                                            <a title="Our Services" href="{{route('service')}}" class="dropdown-items">Our Services</a>
                                        </li>
                                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-828" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-828 nav-item">
                                            <a title="Services Details" href="{{route('serviceDetails')}}" class="dropdown-items">Services Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item">
                                    <a title="About Us" href="{{route('aboutUs')}}" class="nav-links">About Us</a>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-819" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819 nav-item">
                                    <a title="Contact Us" href="{{route('contactPage')}}" class="nav-links">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-action">
                            <div class="menu-area">
                                <div class="header-btn">
                                    <a href="{{ asset('public/novareex/bitrader.thetork.com/') }}/contact-us" style="background-color: #00d094; border: 1px solid #00d094;" class="trk-btn trk-btn--border trk-btn--primary">
                                        <span>Join Now</span>
                                    </a>
                                </div>

                                <!-- toggle icons -->
                                <div class="header-bar d-lg-none header-bar--style2">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
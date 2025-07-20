        <style>
            .pricing-box th{
                background: #093d47;
                color: #fff;
            }
            .darkBg{
                background:rgba(0,0,0,.8);
                padding: 2.25rem;color:#fff
            }
        </style>
        <script src="https://kit.fontawesome.com/7001e2ea29.js" crossorigin="anonymous"></script>
        <header id="sticky-header" class="header-section header-section--style4">
            <div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper row">
                        <div class="logo col-6 col-md-2 mx-auto">
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

                            <a class="secondary-logo text-center" href="#">
                                <img src="{{ asset('public/novareex/bitrader.thetork.com/') }}/wp-content/themes/bitrader/assets/img/logo/logo.png" alt="Logo" class="w-100" />
                            </a>
                        </div>

                        <div class="col-6 mx-auto d-block d-md-none my-4 text-center">
                            <a href="#" class="btn btn-success">
                                <span><i class="fa-light fa-chart-network"></i> Platform Access</span>
                            </a> 
                            <a href="#" class="btn btn-primary">
                                <span><i class="fa-solid fa-users-rays"></i> Portal Area</span>
                            </a>
                        </div>
                        <div class="menu-area menu--style2 col-12 col-md-6 mx-auto text-center">
                            <ul id="menu-main-menu" class="menu menu">
                                <li
                                    itemscope="itemscope"
                                    itemtype="https://www.schema.org/SiteNavigationElement"
                                    id="menu-item-826"
                                >
                                    <a title="Home" href="{{route('home')}}" class="nav-links">Home</a>
                                    
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item">
                                    <a title="Services" href="{{route('aboutUs')}}" class="nav-links">Services</a>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-818" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-818 nav-item">
                                    <a title="About Us" href="{{route('aboutUs')}}" class="nav-links">About Us</a>
                                </li>
                                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-819" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-819 nav-item">
                                    <a title="Contact Us" href="{{route('contactPage')}}" class="nav-links">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-action col-12 col-md-4 mx-auto">
                            <div class="menu-area">
                                <div class="header-btn d-none d-md-block">
                                    <a href="#" class="btn btn-success">
                                        <span><i class="fa-light fa-chart-network"></i> Platform Access</span>
                                    </a> 
                                    <a href="#" class="btn btn-primary">
                                        <span><i class="fa-solid fa-users-rays"></i> Portal Area</span>
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
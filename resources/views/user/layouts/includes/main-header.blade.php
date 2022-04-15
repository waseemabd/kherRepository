
<header class="header-wrap style1">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-left">
                        <div class="close-header-top xl-none">
                            <button type="button"><i class="las la-times"></i></button>
                        </div>
                        <div class="header-contact">
                            <p><i class="ri-map-pin-fill"></i> 24th North Lane, Hill Town, New York</p>
                        </div>
                        <div class="header-contact">
                            <a href="mailto:hello@ecour.com"> <i class="ri-mail-send-line"></i> info@ecour.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right">
                        <div class="lang_selctor  style1">
                            <i class="ri-global-line"> </i>
                            <select>
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">Arabic</option>
                            </select>
                        </div>
                        <div class="header-social">
                            <span>Follow us :</span>
                            <ul class="social-profile style3">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                                <li><a target="_blank" href="https://instagram.com"> <i class="ri-instagram-line"></i> </a></li>
                            </ul>
                        </div>
                        <a href="{{route('getLogin')}}" class="link style3">
                            @if(auth('user') -> user())
                                 Logged
                            @elseif(auth('student') -> user())
                                Logged
                            @else
                                Login
                            @endif
                        </a>
                        <div class="header-social">
                            <a href="
                            @if(auth('user')->user())
                               {{route('user.logout')}}
                            @elseif(auth('student')->user())
                            {{route('user.logout')}}
                            @endif
                                " class="link style3"> Logout</a>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6 xl-none">
                    <div class="header-search">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here ...">
                                <button type="submit"> <i class="ri-search-eye-line"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 order-lg-1 order-md-1 order-1">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="assets/img/logo.png" alt="Image">
                            <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-3 col-6 order-lg-2 order-md-3 order-3">
                    <div class="main-menu-wrap style1">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"><i class="las la-times"></i></a>
                        </div>
                        <div id="menu" class="text-left">
                            <ul class="main-menu ">
                                <li class="has-children">
                                    <a href="#">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">HOME 1</a></li>
                                        <li><a href="index-2.html">HOME 2</a></li>
                                        <li><a href="index-3.html">HOME 3</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">COURSES</a>
                                    <ul class="sub-menu">
                                        <li><a href="course.html">COURSES</a></li>
                                        <li><a href="course-details.html">COURSE DETAILS</a></li>
                                        <li class="has-children">
                                            <a href="#">INSTRUCTOR</a>
                                            <ul class="sub-menu">
                                                <li><a href="instructors.html">INSTRUCTORS</a></li>
                                                <li><a href="instructor-details.html">INSTRUCTOR DETAILS</a></li>
                                                <li><a href="become-instructor.html">BECOME A INSTRUCTOR</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">EVENTS</a>
                                    <ul class="sub-menu">
                                        <li><a href="events.html">EVENT</a></li>
                                        <li><a href="event-details.html">EVENT DETAILS</a></li>
                                    </ul>
                                </li>
                                <li class="has-children"><a class="active" href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li><a class="active" href="about.html">ABOUT US</a></li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                        <li><a href="teacher.html">TEACHER</a></li>
                                        <li><a href="pricing-plan.html">PRICING PLAN</a></li>
                                        <li><a href="testimonial.html">TESTIMONIALS</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
                                        <li><a href="terms-condition.html">TERMS &AMP; CONDITIONS</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">SHOP</a>
                                    <ul class="sub-menu">
                                        <li class="has-children"><a href="#">SHOP LAYOUT</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-left-sidebar.html">SHOP LEFT SIDEBAR</a></li>
                                                <li><a href="shop-right-sidebar.html">SHOP RIGHR SIDEBAR</a></li>
                                                <li><a href="shop-no-sidebar.html">SHOP NO SIDEBAR</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-details.html">SHOP DETAILS</a></li>
                                        <li><a href="wishlist.html">WISHLIST</a></li>
                                        <li><a href="cart.html">CART</a></li>
                                        <li><a href="checkout.html">CHECKOUT</a></li>
                                        <li class="has-children"><a href="#">USER</a>
                                            <ul class="sub-menu">
                                                <li><a href="login.html">LOG IN</a></li>
                                                <li><a href="register.html">REGISTER</a></li>
                                                <li><a href="forgot-pwd.html">FORGOT PASSWORD</a></li>
                                                <li><a href="my-account.html">MY ACCOUNT</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li class="has-children"><a href="#">BLOG LAYOUT</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-left-sidebar.html">BLOG LEFT SIDEBAR</a></li>
                                                <li><a href="blog-right-sidebar.html">BLOG RIGHT SIDEBAR</a></li>
                                                <li><a href="blog-no-sidebar.html">BLOG NO SIDEBAR</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children"><a href="#">BLOG DETAILS</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details-left-sidebar.html">BLOG DETAILS LEFT SIDEBAR</a></li>
                                                <li><a href="blog-details-right-sidebar.html">BLOG DETAILS RIGHT SIDEBAR</a></li>
                                                <li><a href="blog-details-no-sidebar.html">BLOG DETAILS NO SIDEBAR</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-bar-wrap">
                        <div class="sidebar-menu xl-none">
                            <i class="ri-equalizer-line"></i>
                        </div>
                        <div class="mobile-top-bar xl-none">
                            <i class="ri-settings-3-line"></i>
                        </div>
                        <div class="mobile-menu xl-none">
                            <a href='javascript:void(0)'><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5  order-lg-3 order-md-2">
                    <div class="header-menu-wrap">
                        <div class="header-search md-none">
                            <form action="#">
                                <div class="form-group">
                                    <input type="search" placeholder="Search Here ...">
                                    <button type="submit"> <i class="ri-search-eye-line"></i> </button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-menu md-none">
                            <i class="ri-equalizer-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

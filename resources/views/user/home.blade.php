@extends('user.layouts.master-page')

@section('title','الرئيسية')

@section('style')


@endsection


@section('content')

    <div class="contact-popup">
        <div class="contact-popup-title">
            <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
        </div>
        <div class="contact-popup-wrap">
            <div class="comp-info">
                <div class="comp-logo">
                    <a href="index.html">
                        <img class="logo-light" src="assets/img/logo.png" alt="Image">
                        <img class="logo-dark" src="assets/img/logo-white.png" alt="Image">
                    </a>
                </div>
                <p class="comp-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                <ul class="footer-contact-address">
                    <li><a href="tel:999762236473"> <i class="ri-phone-line"></i> +999 762 23 6473</a></li>
                    <li> <i class="ri-mail-send-fill"></i> <a href="mailto:info@ecour.com">info@ecour.com</a></li>
                    <li> <i class="ri-earth-fill"></i> <a href="https://www.ecour.com">www.ecour.com</a></li>
                    <li>
                        <i class="ri-map-pin-fill"></i> 24th North Lane, Hill Town, New York
                    </li>
                </ul>
            </div>
            <div class="comp-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
            </div>
            <div class="share-on text-center">
                <ul class="social-profile style2">
                    <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                    <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                    <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                    <li><a target="_blank" href="https://instagram.com"> <i class="ri-instagram-line"></i> </a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header  end -->
    <!-- Hero section start -->
    <div class="hero-wrap style1 bg-f hero-bg-1">
        <div class="hr-line"></div>
        <div class="hr-line"></div>
        <div class="hr-line"></div>
        <div class="hr-line"></div>
        <div class="overlay bg-black op-7"></div>
        <div class="container">
            <div class="hero-circle-shape md-none">
                <img src="assets/img/hero/circle-shape.png" alt="Image">
            </div>
            <div class="hero-dot-shape md-none">
                <img src="assets/img/hero/dot-shape.png" alt="Image">
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-8">
                    <div class="hero-content">
                        <h1>Explore Your Creativity
                            With Best Online Courses</h1>
                        <p>It was popularised in Letraset sheets containing Lorem Ipsum and more recently with desktop publishing software.</p>
                        <div class="hero-btn">
                            <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                            <a href="login.html" class="btn v2"> <i class="ri-user-line"></i> Join For Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-img-wrap">
            <div class="hero-ellipse-img">
                <img src="assets/img/hero/ellipse-img.jpg" alt="Image">
            </div>
            <!-- <img class="ellipse-shape" src="assets/img/hero/ellipse-shape.png" alt="Image"> -->
        </div>
    </div>
    <!-- Hero section end -->
    <!-- About Section Start -->
    <section class="about-wrap  style1 ptb-100">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6">
                    <div class="about-img bg-f about-bg-1">
                        <div class="about-circle-shape md-none">
                            <img src="assets/img/about/about-circle-shape-1.svg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title text-left style1">
                            <span>About us</span>
                            <h2>Welcome To Ecour Learning</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed does the eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <ul class="about-features-list">
                                <li> <i class="ri-login-circle-line"></i> Administer With Case</li>
                                <li> <i class="ri-login-circle-line"></i> Save Time With Automation</li>
                                <li> <i class="ri-login-circle-line"></i> 5000 Online Courses</li>
                            </ul>
                            <h5>*We Have <span>15 Years</span> of Working Experience</h5>
                            <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end -->
    <!-- Promo banner section start -->
    <section class="promo-banner-wrap style1">
        <div class="promo-content  ptb-100 ">
            <h2 class="text-white">Trusted By 10,000 + Organization</h2>
            <p class="text-white">Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in odio mauris eu nibh euismod gravida.</p>
            <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
        </div>
        <div class="promo-img-wrap">
            <div class="promo-img bg-f promo-bg-1">
                <div class="promo-circle-shape md-none">
                    <img src="assets/img/promo/promo-circle-shape.svg" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <!-- Promo banner section end -->
    <!-- Course Section start -->
    <section class="course-wrap pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Top Categories</span>
                        <h2>Our Top Online Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-1.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Foundation Of Positive :
                                    Psychology</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>4 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>13</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">17</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span class="discount">$29.50</span><span>$25.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-2.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Python For Data Search
                                    And Machine Learning</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>7 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>12</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">11</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span class="discount">$40.50</span><span>$20.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-3.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Microsoft Excel - Excel For
                                    Beginner</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i> </li>
                                </ul>
                                <span>5 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>22</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">19</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span>$30.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-4.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">The Complete Foundation
                                    Stock Trading Courses</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i> </li>
                                </ul>
                                <span>3 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>5</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">9</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span>$20.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-5.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Information About Ui/Ux
                                    Design</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i> </li>
                                </ul>
                                <span>9 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>15</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">22</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span>$35.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-6.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Course for Educational
                                    Photography</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>2 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>7</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">11</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span class="discount">$30.50</span><span>$20.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-7.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Introduction To Teaching
                                    English</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>8 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>17</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">19</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span class="discount">$90.50</span><span>$70.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style1">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-8.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <h3><a href="course-details.html">Diploma in Educational
                                    Psychology</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>5 Reviews</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                        </div>
                        <div class="course-metainfo">
                            <div class="course-metainfo-left">
                                <ul>
                                    <li>
                                        <p><i class="ri-user-line"></i>12</p>
                                    </li>
                                    <li>
                                        <p><i class="ri-discuss-line"></i><a href="course-details.html">5</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="course-metainfo-right">
                                <div class="price-tag">
                                    <p><span>$70.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Section End -->
    <!-- Promo banner section start -->
    <section class="promo-banner-wrap style2">
        <div class="promo-img-wrap">
            <div class="promo-img bg-f promo-bg-1">
                <a class="video-play circle style1" href="https://www.youtube.com/watch?v=xHegpKx61eE"> <i class="ri-play-fill"></i> </a>
                <div class="promo-circle-shape md-none">
                    <img src="assets/img/promo/promo-circle-shape.svg" alt="Image">
                </div>
            </div>
        </div>
        <div class="promo-content  ptb-100 ">
            <h2 class="text-white">Transform Your Life Through
                Education</h2>
            <p class="text-white">Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus . Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius turpis et.</p>
        </div>
    </section>
    <!-- Promo banner section end -->
    <!-- Course Section start -->
    <section class="course-wrap pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Popular Courses</span>
                        <h2>Our Popular Online Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-9.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <span class="course-price">$35.50</span>
                            <h3><a href="course-details.html">Diploma in Teaching skills:
                                    Educators</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>4 Ratings</span>
                            </div>
                            <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                        </div>
                        <div class="course-metainfo">
                            <p><i class="ri-user-line"></i>13 students</p>
                            <p><i class="ri-book-open-line"></i><a href="course-details.html">4 Lessons</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-10.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <span class="course-price">$55.50</span>
                            <h3><a href="course-details.html">Diploma in Teaching skills:
                                    Educators</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>9 Ratings</span>
                            </div>
                            <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                        </div>
                        <div class="course-metainfo">
                            <p><i class="ri-user-line"></i>23 students</p>
                            <p><i class="ri-book-open-line"></i><a href="course-details.html">10 Lessons</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-11.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <span class="course-price">$95.50</span>
                            <h3><a href="course-details.html">Information About UI/UX
                                    Design</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>10 Ratings</span>
                            </div>
                            <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                        </div>
                        <div class="course-metainfo">
                            <p><i class="ri-user-line"></i>22 students</p>
                            <p><i class="ri-book-open-line"></i><a href="course-details.html">12 Lessons</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="course-card style2">
                        <div class="course-img">
                            <a href="course-details.html"><img src="assets/img/course/course-1.jpg" alt="Image"></a>
                        </div>
                        <div class="course-info">
                            <span class="course-price">$55.50</span>
                            <h3><a href="course-details.html">Diploma in Educational
                                    psychology</a></h3>
                            <div class="course-rating">
                                <ul>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-fill"></i></li>
                                    <li> <i class="ri-star-line"></i> </li>
                                </ul>
                                <span>6 Ratings</span>
                            </div>
                            <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                        </div>
                        <div class="course-metainfo">
                            <p><i class="ri-user-line"></i>16 students</p>
                            <p><i class="ri-book-open-line"></i><a href="course-details.html">8 Lessons</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Section End -->
    <!-- Promo banner section start -->
    <section class="promo-banner-wrap style3 pb-100">
        <div class="promo-content  ptb-100 ">
            <h2 class="text-white">Up-to 15% Discount Offer For
                Joining Today</h2>
            <p class="text-white">The user can create dummy content in word paragraph list items and proposals. Depending on your requirement, a user can fit any of these formats in their project, which adds a lot of conveniences.</p>
            <a href="login.html" class="btn v1"> <i class="ri-logout-circle-r-line"></i> Register Now</a>
        </div>
        <div class="promo-img-wrap">
            <div class="promo-img bg-f promo-bg-3">
                <div class="promo-circle-shape md-none">
                    <img src="assets/img/promo/promo-circle-shape.svg" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <!-- Promo banner section end -->
    <!-- Team Section Start -->
    <section class="team-wrap pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Make Communication</span>
                        <h2>Our Team Member</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="assets/img/team/team-member-1.jpg" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Tony Stark</h4>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="assets/img/team/team-member-2.jpg" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Mark Toen</h4>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="assets/img/team/team-member-3.jpg" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Phil Heath</h4>
                            <p>Vice President</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="assets/img/team/team-member-4.jpg" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Jhon Doe</h4>
                            <p>Instructor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section end -->
    <!-- Testimonial section Start -->
    <section class="testimonial-wrap bg-f testimonial-bg-1 ptb-100">
        <div class="overlay bg-midnight op-8"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style2 mb-40 text-center">
                        <span>Testimonials</span>
                        <h2>What They Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider-one swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/client-1.jpg" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>Alina Marrio</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/client-2.jpg" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>David Jack</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/client-3.jpg" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>Ema Watson</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="assets/img/testimonial/client-4.jpg" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>Jhon Doe</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section end -->
    <!-- Blog Section Start -->
    <section class="blog-wrap pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Our Blogs</span>
                        <h2>Latest News & Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details-right-sidebar.html" class="blog-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="Image">
                        </a>
                        <div class="blog-info">
                            <div class="blog-date">
                                <h6><span>25</span>Feb 2021</h6>
                            </div>
                            <h3><a href="blog-details-right-sidebar.html">This is yet another impressive Lorem generator offer</a></h3>
                            <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.</p>
                            <div class="blog-author-wrap">
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="assets/img/blog/author-1.jpg" alt="Image">
                                    </div>
                                    <div class="blog-author-name">
                                        <p>By <a href="blog-details-left-sidebar.html">Mark John</a></p>
                                    </div>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="read-more"><i class="las la-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details-right-sidebar.html" class="blog-img">
                            <img src="assets/img/blog/blog-2.jpg" alt="Image">
                        </a>
                        <div class="blog-info">
                            <div class="blog-date">
                                <h6><span>04</span>Feb 2021</h6>
                            </div>
                            <h3><a href="blog-details-right-sidebar.html">Role Of A Online Instructor In Competitive Education System</a></h3>
                            <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.</p>
                            <div class="blog-author-wrap">
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="assets/img/blog/author-2.jpg" alt="Image">
                                    </div>
                                    <div class="blog-author-name">
                                        <p>By <a href="blog-details-left-sidebar.html">Phill Heath</a></p>
                                    </div>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="read-more"><i class="las la-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details-right-sidebar.html" class="blog-img">
                            <img src="assets/img/blog/blog-3.jpg" alt="Image">
                        </a>
                        <div class="blog-info">
                            <div class="blog-date">
                                <h6><span>12</span>Jan 2021</h6>
                            </div>
                            <h3><a href="blog-details-right-sidebar.html">Top Online Courses For Foreign Students & Teachers</a></h3>
                            <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.</p>
                            <div class="blog-author-wrap">
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="assets/img/blog/author-3.jpg" alt="Image">
                                    </div>
                                    <div class="blog-author-name">
                                        <p>By <a href="blog-details-left-sidebar.html">Tony Stark</a></p>
                                    </div>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="read-more"><i class="las la-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('script')


@endsection

@endsection

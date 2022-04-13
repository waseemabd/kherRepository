@extends('user.layouts.master-page')

@section('title','الكورسات')

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
    <!-- Breadcrumb  start -->
    <section class="breadcrumb-wrap  br-bg-4">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-title">

                        <h2>Our Courses</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="index.html">Home </a></li>
                            <li>Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
    <!-- Project Section start -->
    <section class="project-wrap pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style1 text-center mb-40">
                            <span>Top Courses
                            </span>
                        <h2>Our Top Online Courses</h2>
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
            <div class="row mt-20">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn v1">Load More <i class="ri-loader-line"></i> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section end -->
    <!-- Discount section start -->
    <section class="ds-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-wrap style2 ptb-100">
                        <h2>Up-to 15% Discount Offer For Joining Today</h2>
                        <p>The user can create dummy content in word paragraph list items and proposals. Depending on your requirement, a user can fit any of these formats in their project, which adds a lot of conveniences.</p>
                        <a href="login.html" class="btn v1 mb-10"> <i class="ri-logout-circle-r-line"></i> Register Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-wrap style1 right  ptb-100">
                        <h2>Transform Your Life Through
                            Education</h2>
                        <p>Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus . Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius turpis et.</p>
                        <a href="login.html" class="btn v1 mb-10"> <i class="ri-logout-circle-r-line"></i> Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Discount section end -->
    <!-- Team Section Start -->
    <section class="team-wrap pt-100 pb-70">
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



@section('script')


@endsection

@endsection

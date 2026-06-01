<!DOCTYPE html>

<html lang="zxx">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap -->

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">

    <!-- Animate on scroll -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/aos.css')}}">

    <!-- Fancy Box -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color.css')}}">


    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    @yield('title')

</head>

<body>

<!-- Loader Start -->
<div class="preloader" id="preloader">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1">
        <path d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
    </svg>
    <div class="inner">
        <canvas class="progress-bar" id="progress-bar" width="200" height="200"></canvas>
        <figure><img src="assets/images/piwc-logo.png" alt="Image" style="width:100px"></figure>
        <small>Loading</small></div>
    <!-- end inner -->
</div>

<!-- Loader End -->

<!-- Header One Start -->

<header class="header-one">

    <div class="top-bar">

        <div class="container">

            <div class="row">

                <div class="col-lg-9">

                    <ul class="login">
                        <li><a href="JavaScript:void(0)"><img src="assets/images/bell.svg" alt="Bell">One in Christ
                                Jesus, engaged in parent’s mission, empowered by the Spirit.</a></li>

                    </ul>

                </div>

                <div class="col-lg-2 offset-1">

                    <ul class="social-medias">

                        <li>
                            <a href="https://www.instagram.com/hullpiwc/"
                               target="_blank"
                               aria-label="Instagram">

                                <i class="fa-brands fa-instagram"></i>

                            </a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/@Hullpiwc"
                               target="_blank"
                               aria-label="YouTube">

                                <i class="fa-brands fa-youtube"></i>

                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="desktop-nav" id="stickyHeader">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <nav>

                        <div class="logo">

                            <a href="{{url('/')}}">

                                <img src="assets/images/piwc.jpg" alt="Logo" style="width: 80px">

                            </a>

                        </div>

                        <div class="nav-bar">

                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/sermons')}}">Sermons</a></li>
                                <li><a href="{{url('/events')}}">Events</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>

                            </ul>

                        </div>

                        <div></div>

                        <div id="nav-icon4">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>
                    </nav>

                </div>

            </div>

        </div>

    </div>

    <div class="mobile-nav" id="mobile-nav">

        <div class="res-log">

            <a href="{{url('/')}}">

                <img src="{{asset('assets/images/piwc-logo.png')}}" style="width: 100px" alt="Responsive Logo">
            </a>
        </div>

        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/sermons')}}">Sermons</a></li>
            <li><a href="{{url('/events')}}">Events</a></li>
            <li><a href="{{url('contact')}}">Contact</a></li>
        </ul>
        <a href="JavaScript:void(0)" id="res-cross"></a>
    </div>

</header>
<!-- Header One Start -->

@yield('content')

<!-- Footer One Start -->

<footer class="gap footer-one no-bottom green-overlay">

    <div class="parallax"
         style="background-image: url('{{ asset('assets/images/footer-bg.webp') }}');">
    </div>

    <div class="container">

        <div class="row part-one">

            <div class="col-lg-3 col-md-6 col-sm-12">

                <a href="{{url('/')}}">

                    <img class="footer-logo" src="assets/images/piwc-logo.png" alt="footer logo" style="width: 120px">

                </a>

                <p>
                    <a href="https://www.google.com/maps/search/?api=1&query=92+Spring+Bank+HU3+1AA"
                       target="_blank"
                       class="text-white location-link">

                        <i class="fa-solid fa-location-dot me-2 text-warning"></i>
                        92 Spring Bank West, HU3 1AA, United Kingdom

                    </a>
                </p>

                <div class="footer-contact">

                    <p class="text-white"><span class="">Mobile:</span> +44 7944 200894</p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">

                <h2 class="text-white">
                    Quick Links
                </h2>

                <ul class="quick-links">

                    <li>
                        <a href="{{url('/')}}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{url('events')}}">
                            Upcoming Events
                        </a>
                    </li>

                    <li>
                        <a href="{{url('sermons')}}">
                            Sermons & Messages
                        </a>
                    </li>


                    <li>
                        <a href="{{url('contact')}}">
                            Contact Us
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)"
                           data-bs-toggle="modal"
                           data-bs-target="#weekendServiceModal">
                            Service Times
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)"
                           data-bs-toggle="modal"
                           data-bs-target="#supportModal">
                            Give / Support
                        </a>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">

                <h2 class="text-white">
                    Service Times
                </h2>

                <ul class="footer-services">

                    <li>

                        <div class="service-icon">
                            <i class="fa-solid fa-church"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                Sunday Worship Service
                            </h5>

                            <p class="text-light mb-0">
                                <i class="fa-regular fa-clock me-2"></i>
                                Sunday — 9:30AM - 12:00 PM
                            </p>
                        </div>

                    </li>

                    <li>

                        <div class="service-icon">
                            <i class="fa-solid fa-book-bible"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                Mid-Week Service
                            </h5>

                            <p class="text-light mb-0">
                                <i class="fa-regular fa-clock me-2"></i>
                                Wednesday — 8:00PM - 09:00 PM
                            </p>
                        </div>

                    </li>

                    <li>

                        <div class="service-icon">
                            <i class="fa-solid fa-person-dress"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                Women's Ministry
                            </h5>

                            <p class="text-light mb-0">
                                <i class="fa-regular fa-clock me-2"></i>
                                Monday — 8:00PM - 09:00 PM
                            </p>
                        </div>

                    </li>

                    <li>

                        <div class="service-icon">
                            <i class="fa-solid fa-people-group"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                Youth Ministry
                            </h5>

                            <p class="text-light mb-0">
                                <i class="fa-regular fa-clock me-2"></i>
                                Friday — 8:00PM - 09:00 PM
                            </p>
                        </div>

                    </li>

                    <li>

                        <div class="service-icon">
                            <i class="fa-solid fa-hands-praying"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                Dawn Prayers
                            </h5>

                            <p class="text-light mb-1">
                                <i class="fa-regular fa-clock me-2"></i>
                                Saturday — 5:00 AM – 6:00 AM
                            </p>

                            <p class="text-light mb-1 small">
                                <strong>Meeting ID:</strong>
                                351 813 550 82
                            </p>

                            <p class="text-light mb-2 small">
                                <strong>Passcode:</strong>
                                bdJjfN
                            </p>

                            <a
                                href="https://teams.microsoft.com/l/meetup-join/19%3ameeting_MGI2ODBiZjAtM2VmNC00NjEyLWE3NTgtMTQ3ZjIzODRkNDRm%40thread.v2/0?context=%7b%22Tid%22%3a%22e7f4d11b-2181-4bd7-bda1-b01b09d32ae9%22%2c%22Oid%22%3a%22779ce3a1-d75c-4585-86e0-aea5b64ba03a%22%7d"
                                target="_blank"
                                class="join-teams-link"
                            >
                                <i class="fa-brands fa-microsoft me-2"></i>
                                Join on Teams
                            </a>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

        <div class="copy-right">

            <div class="social">

                <ul class="social-medias">

                    <!-- Instagram -->
                    <li>
                        <a href="https://www.instagram.com/hullpiwc/"
                           target="_blank"
                           aria-label="Instagram">

                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>

                    <!-- YouTube -->
                    <li>
                        <a href="https://www.youtube.com/@Hullpiwc"
                           target="_blank"
                           aria-label="YouTube">

                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>

                </ul>

            </div>

            <div class="footer-rights">

                <p class="text-white">© Copyright <span class="text-light text-underline">2026 PIWC HULL</span>. All
                    Rights Reserved.</p>

            </div>


        </div>

    </div>

</footer>
<!-- Footer One End -->

<!-- Scroll to top -->

<button id="scrollTop" class="scrollTopStick">
    <svg viewBox="0 0 490.523 490.523" fill="#fff" height="15">
        <path style="fill:#FFC107;"
              d="M487.411,355.047L252.744,120.38c-4.165-4.164-10.917-4.164-15.083,0L2.994,355.047 c-4.093,4.237-3.976,10.99,0.262,15.083c4.134,3.993,10.687,3.993,14.821,0l227.115-227.115l227.115,227.136 c4.237,4.093,10.99,3.976,15.083-0.261c3.993-4.134,3.993-10.688,0-14.821L487.411,355.047z"></path>
        <path d="M479.859,373.266c-2.831,0.005-5.548-1.115-7.552-3.115L245.192,143.015L18.077,370.151 c-4.237,4.093-10.99,3.976-15.083-0.262c-3.993-4.134-3.993-10.687,0-14.821l234.667-234.667c4.165-4.164,10.917-4.164,15.083,0 l234.667,234.667c4.159,4.172,4.148,10.926-0.024,15.085C485.388,372.146,482.681,373.265,479.859,373.266z"></path>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
        <g></g>
    </svg>
</button>

<div class="modal fade" id="weekendServiceModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content weekend-modal">

            <button type="button" class="btn-close custom-close"
                    data-bs-dismiss="modal"></button>

            <div class="row g-0 h-100">

                <!-- LEFT -->
                <div class="col-lg-6 left-panel">

                    <h2 class="modal-title-text">
                        Join Us This Weekend
                    </h2>

                    <div class="service-group">

                        <h4>
                            <i class="fa-regular fa-clock me-2"></i>
                            Sunday Service
                        </h4>

                        <div class="service-item">
                            <h5>10:00 AM – Worship Service</h5>
                            <p>92 Spring Bank, Hull HU3 1AA</p>
                        </div>

                    </div>

                    <div class="service-group">

                        <h4>
                            <i class="fa-solid fa-book-bible me-2"></i>
                            Midweek Service
                        </h4>

                        <div class="service-item">
                            <h5>Wednesday – Bible Study & Prayer</h5>
                            <p>7:00 PM – 8:30 PM</p>
                        </div>

                    </div>

                </div>

                <!-- RIGHT -->
                <div class="col-lg-6 right-panel">

                    <h4 class="location-title">
                        <i class="fa-solid fa-location-dot me-2"></i>
                        Our Location
                    </h4>

                    <div class="location-box">
                        <h5>PIWC Hull</h5>
                        <p>
                            92 Spring Bank <br>
                            Hull, HU3 1AA
                        </p>

                        <a href="https://maps.google.com/?q=92+Spring+Bank+HU3+1AA"
                           target="_blank"
                           class="direction-btn">

                            <i class="fa-solid fa-location-arrow me-2"></i>
                            Get Directions
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="supportModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content support-modal">

            <button
                type="button"
                class="btn-close custom-close"
                data-bs-dismiss="modal">
            </button>

            <div class="modal-body text-center">

                <div class="support-icon">
                    <i class="fa-solid fa-building-columns"></i>
                </div>

                <h2>Support the Ministry</h2>

                <p class="support-text">
                    Thank you for supporting the work of God.
                    You can support the ministry using the bank details below.
                </p>

                <div class="bank-details">

                    <!-- Main Church Account -->
                    <div class="bank-item full-width">
                        <span>Main Church Account</span>
                        <h4>National Westminster Bank PLC</h4>

                        <div class="account-info">
                            <p>
                                <strong>Account Number:</strong> 45886946
                            </p>

                            <p>
                                <strong>Sort Code:</strong> 60-50-09
                            </p>
                        </div>
                    </div>

                    <!-- Special Offering -->
                    <div class="bank-item special-account">
                        <span>Special Offering Account</span>
                        <h4>National Westminster Bank PLC</h4>

                        <div class="account-info">
                            <p>
                                <strong>Account Number:</strong> 45888280
                            </p>

                            <p>
                                <strong>Sort Code:</strong> 60-50-09
                            </p>
                        </div>

                        <div class="account-note">
                            <i class="fa-solid fa-circle-info"></i>
                            Tithes & offerings should not be paid into this account.
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- Jquery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Waypoint -->

<script src="assets/js/jquery.waypoints.min.js"></script>

<!-- Counter -->

<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Slick Slider Js -->
<script src="assets/js/slick.min.js"></script>
<!-- Animate on scroll Js -->
<script src="assets/js/aos.js"></script>
<!-- Fontawesome Js -->
<script src="assets/js/fontawesome.js"></script>
<!-- Fancybox Js -->
<script src="assets/js/jquery.fancybox.min.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom.js"></script>
@yield('scripts')
</body>
</html>

@extends('layouts.base')

@section('title')
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
@endsection

@section('content')
    <!-- Hero One here -->

    <section class="hero-one">
        <div class="hero-one-slider">
            <div>
                <img src="assets/images/hero-1.png" alt="hero-one-slider">
                <div class="hero-data">
                    <div class="welcome-text">WELCOME TO</div>
                    <div class="hero-title">PIWC HULL</div>
                    <p class="text-warning mt-0 fw-light">A CHURCH WHERE LIVES ARE TRANSFORMED <br> AND DESTINES
                        FULFILLED
                    </p>
                    <button
                        class="btn btn-warning mt-3 me-3"
                        data-bs-toggle="modal"
                        data-bs-target="#weekendServiceModal"
                    >
                        JOIN US THIS WEEKEND
                    </button>
                    <a href="https://www.youtube.com/@Hullpiwc" target="_blank" class="btn btn-outline-light mt-3">WATCH
                        ONLINE</a>
                </div>
            </div>
            <div>
                <img src="assets/images/hero-2.png" alt="hero-one-slider">
                <div class="hero-data">
                    <div class="welcome-text">Join Our</div>

                    <div class="hero-title">
                        WORSHIP COMMUNITY
                    </div>

                    <p class="hero-subtitle text-warning mt-0 fw-light">
                        EXPERIENCE GOD’S PRESENCE, LOVE, <br>
                        AND FELLOWSHIP WITH US
                    </p>
                </div>
            </div>
            <div>
                <img src="assets/images/hero-3.png" alt="hero-one-slider">
                <div class="hero-data">
                    <div class="welcome-text">Growing In</div>

                    <div class="hero-title">
                        FAITH & FELLOWSHIP
                    </div>

                    <p class="hero-subtitle text-warning mt-0 fw-light">
                        EXPERIENCE GOD’S LOVE, WORSHIP <br>
                        AND A TRANSFORMING COMMUNITY
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- banner part end -->

    <!-- Hero One End -->


    <!-- About One Start -->

    <section class="gap no-top about-one">

        <div class="container">

            <div class="row align-items-end">

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="about-data">

                        <h2>A Church that Loves God and People</h2>

                        <p>At PIWC Hull, we are passionate about knowing God and making Him known. We are a welcoming
                            community where faith grows, lives are transformed and everyone is empowered to fulfil their
                            God-given purpose.</p>

                        <a href="about-us.html" class="theme-btn">More About us</a>

                    </div>

                    <div class="about-gallery gallery">

                        <figure>

                            <img src="assets/images/pastor-1.jpg" alt="about image">

                            <a data-fancybox="gallery" href="assets/images/pastor-1.jpg"><img
                                    src="assets/images/plus.svg"
                                    alt="Plus"></a>

                        </figure>

                        <figure>

                            <img src="assets/images/pastor-2.jpg" alt="about image">

                            <a data-fancybox="gallery" href="assets/images/pastor-2.jpg"><img
                                    src="assets/images/plus.svg"
                                    alt="Plus 1"></a>

                        </figure>

                        <figure>

                            <img src="assets/images/pastor-3.jpg" alt="about image">

                            <a data-fancybox="gallery" href="assets/images/pastor-3.jpg"><img
                                    src="assets/images/plus.svg"
                                    alt="Plus 1"></a>

                        </figure>

                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="prayers-slider green-bg">

                        <div>

                            <img class="img-fluid w-100" src="assets/images/about-1.jpg" alt="About Image">

                            <div class="slider-data">

                                <h2 class="text-white">O Lord, you have searched me out and known me; you know my
                                    sitting
                                    down and my rising up.</h2>

                                <h3 class="text-white">Psalm 139: 1-2</h3>

                            </div>

                        </div>

                        <div>

                            <img class="img-fluid w-100" src="assets/images/about-three-img.webp" alt="about image 1">

                            <div class="slider-data">

                                <h2 class="text-white">Unless the Lord builds the house, those who build it labour in
                                    vain.</h2>

                                <h3 class="text-white">Psalm 127: 1-2</h3>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- About One End -->


    <!-- Recent Sermons One Start -->

    <section class="gap light-bg life-piwc">

        <div class="container">

            <div class="heading text-center">

                <img src="assets/images/piwc-logo.png"
                     alt="PIWC Hull"
                     style="width:80px">

                <h2>Life at PIWC Hull</h2>

                <p class="mx-auto">
                    A vibrant church family growing together in worship,
                    prayer, fellowship and faith.
                </p>

            </div>

            <div class="row mt-5">

                <!-- Worship -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="life-card">

                        <img src="assets/images/worship-3.jpg"
                             alt="Sunday Worship">

                        <div class="life-content">

                        <span>
                            <i class="fa-solid fa-church"></i>
                            Worship
                        </span>

                            <h4>Sunday Worship Experience</h4>

                            <p>
                                Join us every Sunday for powerful worship,
                                prayer and life-transforming messages.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- Youth -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="life-card">

                        <img src="assets/images/worship2.jpg"
                             alt="Youth Ministry">

                        <div class="life-content">

                        <span>
                            <i class="fa-solid fa-users"></i>
                            Community
                        </span>

                            <h4>Youth & Family Life</h4>

                            <p>
                                Building strong relationships through fellowship,
                                youth activities and family-centred ministry.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- Fellowship -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="life-card">

                        <img src="assets/images/worship.jpg"
                             alt="Prayer and Fellowship">

                        <div class="life-content">

                        <span>
                            <i class="fa-solid fa-hands-praying"></i>
                            Prayer
                        </span>

                            <h4>Prayer & Spiritual Growth</h4>

                            <p>
                                Growing deeper in faith through prayer meetings,
                                Bible study and spiritual development.
                            </p>

                        </div>

                    </div>
                </div>

            </div>

            <div class="text-center mt-4">

                <button class="theme-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#weekendServiceModal">

                    Join Us This Weekend
                </button>

            </div>

        </div>

    </section>

    <!-- Recent Sermons One End -->


    <!-- Live Stream Start -->

    <section class="gap no-bottom live-stream mb-5">

        <div class="container">

            <div class="heading text-center">

                <img src="assets/images/piwc-logo.png"
                     alt="PIWC Hull"
                     style="width:80px">

                <p class="text-warning">
                    Stay Connected With Our Digital Ministry
                </p>

                <h2>
                    Watch Live Services & Sermons
                </h2>

            </div>

            <div class="row">

                <!-- Featured YouTube Video -->
                <div class="col-lg-8 mb-4">

                    <div class="youtube-main-video">

                        <div class="latest-sermon-card">

                            <iframe
                                id="latest-sermon"
                                width="100%"
                                height="550"
                                frameborder="0"
                                allowfullscreen>
                            </iframe>

                        </div>

                    </div>

                </div>

                <!-- Channel Info -->
                <div class="col-lg-4">

                    <div class="youtube-channel-card">

                        <i class="fa-brands fa-youtube"></i>

                        <h3>PIWC Hull YouTube</h3>

                        <p>
                            Watch livestream services, Bible studies,
                            recorded sermons and special events anytime.
                        </p>

                        <a href="https://www.youtube.com/@Hullpiwc"
                           target="_blank"
                           class="theme-btn">

                            Visit Channel
                        </a>

                    </div>

                </div>

            </div>

            <!-- Recent Sermons -->
            <!-- Recent Sermons -->
            <div class="row mt-5" id="recent-sermons">
            </div>

            <div class="d-flex justify-content-center loadmore mt-4">

                <a href="https://www.youtube.com/@Hullpiwc"
                   target="_blank"
                   class="theme-btn">

                    <i class="fa-brands fa-youtube me-2"></i>
                    View All Videos

                </a>

            </div>

        </div>

    </section>

    <!-- Live Stream End -->

    <!-- Donation Start -->

    <section class="donation light-bg overflow-hidden">

        <div class="container-fluid p-0">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <img class="img-fluid sideimage" src="assets/images/offering.png" alt="Donation Image">

                </div>

                <div class="col-lg-6">
                    <div class="parallax pattren" style="background-image: url(assets/images/pattren.jpg);"></div>
                    <div class="donation-data">

                        <h2 data-aos="fade-up" data-aos-duration="900">Be a Blessing Today</h2>

                        <p data-aos="fade-up" data-aos-duration="1100">You can give to the PIWC Hull Church if you've been blessed by any of our services in person or online. God bless you!</p>

                        <div class="donation-form">

                            <button
                                class="theme-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#supportModal"
                            >
                                Support the Church
                            </button>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>


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

@endsection

@section('scripts')
    <script>
        async function loadLatestSermon() {

            const channelId = "UCs6U3QTWJHwGBI5230G9HrQ";

            const feedUrl =
                `https://www.youtube.com/feeds/videos.xml?channel_id=${channelId}`;

            const apiUrl =
                `https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(feedUrl)}`;

            try {

                const response = await fetch(apiUrl);
                const data = await response.json();

                if (data.items && data.items.length > 0) {

                    const latestVideo = data.items[0];

                    // Extract video ID
                    const videoId =
                        latestVideo.link.split("v=")[1];

                    document.getElementById("latest-sermon").src =
                        `https://www.youtube.com/embed/${videoId}?rel=0`;
                }

            } catch (error) {
                console.error("Could not load latest sermon:", error);
            }
        }

        loadLatestSermon();
    </script>

    <script>
        async function loadRecentSermons() {

            const channelId = "UCs6U3QTWJHwGBI5230G9HrQ";

            const feedUrl =
                `https://www.youtube.com/feeds/videos.xml?channel_id=${channelId}`;

            const apiUrl =
                `https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(feedUrl)}`;

            try {

                const response = await fetch(apiUrl);
                const data = await response.json();

                const container =
                    document.getElementById("recent-sermons");

                // Skip first video (latest sermon)
                const videos = data.items.slice(1, 4);

                videos.forEach(video => {

                    const videoId =
                        video.link.split("v=")[1];

                    const thumbnail =
                        `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

                    container.innerHTML += `
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="youtube-card">

                        <a href="${video.link}"
                            target="_blank"
                            class="video-thumbnail">

                            <img src="${thumbnail}"
                                alt="${video.title}">

                            <div class="play-btn">
                                <i class="fa-solid fa-play"></i>
                            </div>

                        </a>

                        <div class="youtube-content">
                            <h5>${video.title}</h5>
                        </div>

                    </div>

                </div>
            `;
                });

            } catch (error) {
                console.error(error);
            }
        }

        loadRecentSermons();
    </script>
@endsection

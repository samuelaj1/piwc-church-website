@extends('layouts.base')

@section('content')

    <style>
        .page-header{
            position: relative;
            height: 350px;
            overflow: hidden;
        }

        /* Background image */
        .page-header-bg{
            position: absolute;
            inset: 0;
            background-size: cover;
            background: linear-gradient(
                rgba(4, 6, 92, 0.75),
                rgba(4, 6, 92, 0.75)
            );
        }

        /* Content */
        .page-header-content{
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page-header-content h2{
            color: #fff;
            padding-top: 160px;
            padding-bottom: 50px;
            font-size: 65px;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Mobile */
        @media(max-width:768px){

            .page-header{
                height: 220px;
            }

            .page-header-content h2{
                font-size: 40px;
            }
        }
    </style>

    <section class="page-header position-relative">

        <div class="page-header-bg"></div>

        <div class="page-header-content text-center">
            <h2>Contact Us</h2>
        </div>

    </section>
    <!-- Banner End -->



    <!-- Contact Us Start -->

    <section class="contact-us">

        <div class="heading">

            <h1 class="m-auto mt-5">If You Have any Questions Feel Free to Contact Us</h1>

        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="content">

                        <div class="content">

                            <div class="c-detail d-flex" data-aos="fade-right" data-aos-delay="500"
                                 data-aos-duration="1000">
                                <span class="font-bold">PIWC Hull</span>
                                <ul>
                                    <li>
                                        92 Spring Bank, <br>
                                        Hull, HU3 1AA, United Kingdom
                                    </li>
                                    <li>
                                        <span>Telephone:</span> <br>
                                        <a href="tel:07944200894">(+44) 7944200894</a>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <a href="mailto:contact@hullpiwc.co.uk">
                                            contact@hullpiwc.co.uk
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <form>

                        <input type="text" name="text" placeholder="Full Name" data-aos="fade-up" data-aos-delay="100"
                               data-aos-duration="400">

                        <input type="email" name="email" placeholder="Email Id" data-aos="fade-up" data-aos-delay="200"
                               data-aos-duration="500">

                        <input type="text" name="text" placeholder="Subject" data-aos="fade-up" data-aos-delay="300"
                               data-aos-duration="600">

                        <textarea placeholder="Your Message" data-aos="fade-up" data-aos-delay="400"
                                  data-aos-duration="700"></textarea>

                        <button type="submit" class="theme-btn" data-aos="fade-up" data-aos-delay="400"
                                data-aos-duration="800">Send Message
                        </button>

                    </form>

                </div>

            </div>

            <div class="row">

                <div class="map">
                    <iframe
                        class="w-100"
                        src="https://maps.google.com/maps?q=92%20Spring%20Bank%20HU3%201AA&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>

            </div>

            <div class="row">

                <div class="social-medias pb-5">

                    <ul class="flex-all">

                        <li class="flex-all">

                            <ul class="flex-all social-links">
                                <!-- Instagram -->
                                <li class="flex-all">
                                    <a href="https://www.instagram.com/shalompiwcdistrict/"
                                       target="_blank"
                                       class="text-white font-semi-bold flex-all insta">

                                        <i class="fa-brands fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>

                                <li class="flex-all">
                                    <a href="https://www.youtube.com/@Hullpiwc"
                                       target="_blank"
                                       class="text-white font-semi-bold flex-all utube">

                                        <i class="fa-brands fa-youtube"></i>
                                        YouTube
                                    </a>
                                </li>



                            </ul>

                        </li>



                    </ul>

                </div>

            </div>

        </div>

    </section>

@endsection

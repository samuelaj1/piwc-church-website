@extends('layouts.base')

@section('title')
    <title>Events | Shalom PIWC Hull</title>

    <link rel="stylesheet" href="{{asset('assets/css/event.css')}}">

@endsection

@section('content')

    <style>
        .page-header {
            height: 350px;
            background: linear-gradient(rgba(4, 6, 92, .8), rgba(4, 6, 92, .8));
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .page-header h2 {
            color: #fff;
            font-size: 65px;
            font-family: 'Playfair Display', serif;
            text-transform: uppercase;
            padding-top: 200px;
            padding-bottom: 70px;
        }

        .sermon-thumb img {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .play-btn i {
            width: 65px;
            height: 65px;
            background: #ff0000;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        .latest-sermon-card iframe {
            width: 100%;
            height: 560px;
            border-radius: 25px;
        }

        @media (max-width: 768px) {
            .page-header {
                height: 220px;
            }

            .page-header h2 {
                font-size: 38px;
            }

            .latest-sermon-card iframe {
                height: 260px;
            }
        }
    </style>

    <section class="page-header text-center">
        <h2>Upcoming Events</h2>
    </section>

    <section class="gap events">

        <div class="container">

            <div class="row">
                <!-- Event 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="event event-card"
                         data-bs-toggle="modal"
                         data-bs-target="#eventImageModal"
                         data-image="{{ asset('/assets/images/prayer_tower.jpg') }}">

                        <img src="{{ asset('/assets/images/prayer_tower.jpg') }}"
                             alt="Prayer Tower">

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="event event-card"
                         data-bs-toggle="modal"
                         data-bs-target="#eventImageModal"
                         data-image="{{ asset('/assets/images/victory_over.jpg') }}">

                        <img src="{{ asset('/assets/images/victory_over.jpg') }}"
                             alt="Victory Over">

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="event event-card"
                         data-bs-toggle="modal"
                         data-bs-target="#eventImageModal"
                         data-image="{{ asset('/assets/images/half_night.jpg') }}">

                        <img src="{{ asset('/assets/images/half_night.jpg') }}"
                             alt="National Project Day">

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="event event-card"
                         data-bs-toggle="modal"
                         data-bs-target="#eventImageModal"
                         data-image="{{ asset('/assets/images/national_pemem_week.jpg') }}">

                        <img src="{{ asset('/assets/images/national_pemem_week.jpg') }}"
                             alt="National Project Day">

                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="event event-card"
                         data-bs-toggle="modal"
                         data-bs-target="#eventImageModal"
                         data-image="{{ asset('/assets/images/event-1.jpg') }}">

                        <img src="{{ asset('/assets/images/event-1.jpg') }}"
                             alt="Event Image 1">

                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">

                    <div class="event event-card"
                         data-bs-toggle="modal"
                         data-bs-target="#eventImageModal"
                         data-image="{{ asset('/assets/images/project_day.jpg') }}">

                        <img src="{{ asset('/assets/images/project_day.jpg') }}"
                             alt="National Project Day">

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Event Image Modal -->
    <div class="modal fade"
         id="eventImageModal"
         tabindex="-1">

        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content image-modal">

                <button type="button"
                        class="custom-close-btn"
                        data-bs-dismiss="modal"
                        aria-label="Close">

                    <i class="fa-solid fa-xmark"></i>

                </button>

                <img id="popup-event-image"
                     src=""
                     alt="Event Image"
                     class="img-fluid w-100">

            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <script>
        $(document).on('click', '.event-card', function () {

            const image =
                $(this).data('image');

            $('#popup-event-image')
                .attr('src', image);

        });
    </script>

@endsection

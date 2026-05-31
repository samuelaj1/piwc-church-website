@extends('layouts.base')

@section('title')
    <title>Events | PIWC Hull</title>
@endsection

@section('content')

    <style>
        .page-header{
            height: 350px;
            background: linear-gradient(rgba(4,6,92,.8), rgba(4,6,92,.8));
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .page-header h2{
            color: #fff;
            font-size: 65px;
            font-family: 'Playfair Display', serif;
            text-transform: uppercase;
            padding-top: 200px;
            padding-bottom: 70px;
        }

        .sermon-card{
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,.08);
            height: 100%;
        }

        .sermon-thumb{
            position: relative;
            display: block;
        }

        .sermon-thumb img{
            width: 100%;
            height: 240px;
            object-fit: cover;
        }

        .play-btn{
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .play-btn i{
            width: 65px;
            height: 65px;
            background: #ff0000;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sermon-content{
            padding: 25px;
        }

        .latest-sermon-card iframe{
            width: 100%;
            height: 560px;
            border-radius: 25px;
        }

        @media(max-width:768px){
            .page-header{height:220px;}
            .page-header h2{font-size:38px;}
            .latest-sermon-card iframe{height:260px;}
        }
    </style>

    <section class="page-header text-center">
        <h2>Sermons & Messages</h2>
    </section>

    <section class="gap light-bg">

        <div class="container">

            <div class="heading text-center">
                <img src="assets/images/piwc-logo.png" style="width:80px" alt="PIWC Hull">
                <p class="text-warning">Spirit-filled teachings</p>
                <h2>Grow Through God’s Word</h2>
            </div>

            <div class="latest-sermon-card mt-5" id="featured-sermon">
                <iframe id="latest-sermon" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="row mt-5" id="recent-sermons"></div>

            <div class="text-center mt-5">
                <a href="https://www.youtube.com/@Hullpiwc" target="_blank" class="theme-btn">
                    <i class="fa-brands fa-youtube me-2"></i>
                    Watch More on YouTube
                </a>
            </div>

        </div>

    </section>

    <script>
        async function loadSermons() {
            const channelId = "UCs6U3QTWJHwGBI5230G9HrQ";
            const feedUrl = `https://www.youtube.com/feeds/videos.xml?channel_id=${channelId}`;
            const apiUrl = `https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(feedUrl)}`;

            try {
                const response = await fetch(apiUrl);
                const data = await response.json();

                if (!data.items || data.items.length === 0) return;

                const latest = data.items[0];
                const latestId = latest.link.split("v=")[1];

                document.getElementById("latest-sermon").src =
                    `https://www.youtube.com/embed/${latestId}?rel=0`;

                const container = document.getElementById("recent-sermons");

                data.items.slice(1, 7).forEach(video => {
                    const videoId = video.link.split("v=")[1];
                    const thumbnail = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

                    container.innerHTML += `
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="sermon-card">
                        <a href="${video.link}" target="_blank" class="sermon-thumb">
                            <img src="${thumbnail}" alt="${video.title}">
                            <div class="play-btn">
                                <i class="fa-solid fa-play"></i>
                            </div>
                        </a>

                        <div class="sermon-content">
                            <h5>${video.title}</h5>
                            <a href="${video.link}" target="_blank" class="text-warning">
                                Watch on YouTube
                            </a>
                        </div>
                    </div>
                </div>
            `;
                });

            } catch (error) {
                console.error("Could not load sermons:", error);
            }
        }

        loadSermons();
    </script>

@endsection

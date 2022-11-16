<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EzCV</title>
    <!-- Icon css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="vendors/linearicons/style.css" rel="stylesheet">
    <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Rev slider css -->
    <link href="vendors/revolution/css/settings.css" rel="stylesheet">
    <link href="vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">
    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Galindo' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Extra plugin css -->
    <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
    <style>
        li {
            color: #0000;
        }

        a {
            color: #4a4a4a !important;
            text-decoration: none !important;
            background-color: transparent !important;
        }
    </style>
</head>

<body>
    <div class="preloading">
    </div>
    @include('ap.navbar')
    <div id="welcome-page">
        <section id="box-search-job">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <br>
                        <h2>Tìm việc phù hợp với bạn</h2>
                        <div class="form-search">
                            <form id="frm-search-job" method="GET" onsubmit="return false;">
                                <div class="box-search">
                                    <input class="form-control input-search ui-autocomplete-input border-hover"
                                        value="" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển"
                                        id="keyword" autocomplete="off">
                                    <button type="submit" class="btn btn-search-job"><i
                                            class="fa-solid fa-magnifying-glass"></i> <span>Tìm việc
                                            ngay</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 box-search-job-image">
                        <img src="{{ url('img/home-removebg-preview.png') }}" title="Nhân viên tuyển dụng tại EzCV"
                            alt="Nhan vien tuyen dung tai EzCV" class="img-home">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row box-jobs mt-3">
        <div class="container">
            <div class="box-header">
                <h2 class="text_ellipsis uppercase box-title">
                    Tin tuyển dụng, việc làm tốt nhất
                </h2>
            </div>
            <div class="box-smart">
                <div class="prev-button"><i class="fa-solid fa-angle-left" data-bs-target="#carousel-job"
                        data-bs-slide="prev"></i></div>
                <div class="box-smart-list-button">
                </div>
                <div class="next-button"><i class="fa-solid fa-angle-right" data-bs-target="#carousel-job"
                        data-bs-slide="next"></i></div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="container">
                    <div id="carousel-job" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" id="indicators" data-bs-target="#carousel-job"
                                data-bs-slide-to="0" class="active" aria-current="true"
                                aria-label="Slide 1"></button>
                            <button type="button" id="indicators" data-bs-target="#carousel-job"
                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" id="indicators" data-bs-target="#carousel-job"
                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    @if (!empty($listAll))
                                        @foreach ($listAll as $key => $item)
                                            <div class="col-md-4 col-sm-6 feature-job job-ta">
                                                <div class="feature-job-item">
                                                    <div class="cvo-flex"><a href="/ap/detail-job/{{ $item->id }}"
                                                            tabindex="-1">
                                                            <div class="box-company-logo"><img
                                                                    title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV"
                                                                    alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV"
                                                                    src="{{ url('img/company1.png') }}"
                                                                    class="img-responsive"></div>
                                                        </a>
                                                        <div class="col-title cvo-flex-grow"><a data-toggle="tooltip"
                                                                title="" data-placement="top"
                                                                href="/ap/detail-job/{{ $item->id }}" target="_blank"
                                                                class="title text_ellipsis"
                                                                data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)"
                                                                tabindex="-1">
                                                                <strong class="underline-box-job"
                                                                    style="font-weight: bold;">
                                                                    {{ $item->title }}
                                                                </strong>
                                                            </a> <a href="/ap/detail-job/{{ $item->id }}"
                                                                data-toggle="tooltip" title=""
                                                                data-placement="top" data-container="body"
                                                                class="text-silver company text_ellipsis underline-box-job"
                                                                data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS"
                                                                tabindex="-1">
                                                                {{ $item->nameBusiness }}
                                                            </a></div>
                                                        <div class="col-like"><button data-id="69610"
                                                                class="btn-outline-hover save-job" tabindex="-1"><i
                                                                    class="fa-regular fa-heart icon-first"></i> <i
                                                                    class="fa-solid fa-heart icon-last"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="col-job-info">
                                                        <div class="salary text_ellipsis">{{ $item->wage }}
                                                            {{ $item->currency }}
                                                        </div>
                                                        <div data-html="true" data-toggle="tooltip" title=""
                                                            data-placement="top" data-container="body"
                                                            class="address text_ellipsis"
                                                            data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                            {{ $item->area }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(window).on("load", function() {
            $(".preloading").fadeOut("slow");
        });
        var loader = document.getElementById("preloading");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>
</body>

</html>

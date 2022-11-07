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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                                    <input class="form-control input-search ui-autocomplete-input border-hover" value="" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển" id="keyword" autocomplete="off">
                                    <button type="submit" class="btn btn-search-job"><i class="fa-solid fa-magnifying-glass"></i> <span>Tìm việc ngay</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 box-search-job-image">
                        <img src="{{ url('img/home-removebg-preview.png') }}" title="Nhân viên tuyển dụng tại EzCV" alt="Nhan vien tuyen dung tai EzCV" class="img-home">
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
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company2.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company3.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company4.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company4.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company6.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6 feature-job job-ta">
                                            <div class="feature-job-item">
                                                <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                        <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                    </a>
                                                    <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                                Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                            </strong>
                                                        </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                            CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                        </a></div>
                                                    <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                                </div>
                                                <div class="col-job-info">
                                                    <div class="salary text_ellipsis">7-9 triệu
                                                    </div>
                                                    <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                        Hà Nội
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY SERBIA&amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Đóng phim Serrbia
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ SERBIA
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 feature-job job-ta">
                                        <div class="feature-job-item">
                                            <div class="cvo-flex"><a href="" target="_blank" tabindex="-1">
                                                    <div class="box-company-logo"><img title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" alt="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS tuyển dụng tại TopCV" src="{{ url('img/company1.png') }}" class="img-responsive"></div>
                                                </a>
                                                <div class="col-title cvo-flex-grow"><a data-toggle="tooltip" title="" data-placement="top" href="" target="_blank" class="title text_ellipsis" data-original-title="Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)" tabindex="-1">
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!----> <strong class="underline-box-job" style="font-weight: bold;">
                                                            Nhân Viên Vận Hành Lớp Học (Làm Ca Linh Hoạt, Thu Nhập 7-9M)
                                                        </strong>
                                                    </a> <a href="https://www.topcv.vn/brand/tekyholdings" target="_blank" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="text-silver company text_ellipsis underline-box-job" data-original-title="CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS" tabindex="-1">
                                                        CÔNG TY CỔ PHẦN CÔNG NGHỆ &amp; SÁNG TẠO TRẺ TEKY HOLDINGS
                                                    </a></div>
                                                <div class="col-like"><button data-id="69610" class="btn-outline-hover save-job" tabindex="-1"><i class="fa-regular fa-heart icon-first"></i> <i class="fa-solid fa-heart icon-last"></i></button></div>
                                            </div>
                                            <div class="col-job-info">
                                                <div class="salary text_ellipsis">7-9 triệu
                                                </div>
                                                <div data-html="true" data-toggle="tooltip" title="" data-placement="top" data-container="body" class="address text_ellipsis" data-original-title="<p style='text-align: left'>Hà Nội: Cầu Giấy, Nam Từ Liêm, Hà Đông</p>">
                                                    Hà Nội
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
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
    <div class="list-job">
        <div class="job-header">
            <span>Tìm thấy <b class="text-highlight">{{ count($result) }}</b> việc làm phù hợp với yêu cầu của
                bạn.</span>
        </div>
        <div class="show-important" id="sort-advanced">
            <span>Ưu tiên hiển thị:</span>
            <div sort-value="top_related" class="option-item-sort  active ">
                <i class="fa-solid fa-circle-check first"></i>
                <i id="top_related" class="fa-regular fa-circle last"></i>
                <span class="name_sort" for="top_related">Phù hợp nhất</span>
            </div>
            <div sort-value="up_top" class="option-item-sort ">
                <i class="fa-solid fa-circle-check first"></i>
                <i id="up_top" class="fa-regular fa-circle last"></i>
                <span class="name_sort" for="up_top">Cập nhật gần nhất</span>
            </div>
            <div sort-value="urgent" class="option-item-sort ">
                <i class="fa-solid fa-circle-check first"></i>
                <i id="urgent" class="fa-regular fa-circle last"></i>
                <span class="name_sort" for="urgent">Cần tuyển gấp</span>
            </div>
            <div sort-value="high_salary" class="option-item-sort ">
                <i class="fa-solid fa-circle-check first"></i>
                <i id="high_salary" class="fa-regular fa-circle last"></i>
                <span class="name_sort" for="high_salary">Lương cao nhất</span>
            </div>
            <div sort-value="new" class="option-item-sort ">
                <i class="fa-solid fa-circle-check first"></i>
                <i id="new" class="fa-regular fa-circle last"></i>
                <span class="name_sort" for="new">Việc mới đăng</span>
            </div>
        </div>
        <div class="job-body row">
            <div class="col-md-9">
                <div class="lists">
                    @if (!empty($result))
                    @foreach ($result as $key => $item)
                    <div class="job-item  bg-highlight  job-ta result-job-hover" data-job-id="886513" data-job-position="1" data-box="BoxSearchResult">
                        <div class="avatar">
                            <a target="_blank" href="/ap/detail-job/{{ $item->id }}" class="company-logo" rel="nooppener noreferrer">
                                <img src="https://cdn.topcv.vn/80/company_logos/wJkIBg82x3ThF5dFWomXPzuME6KiGzVp_1670214125____d721696b3ff67a5ce6ab96de8fac9005.PNG" class="w-100" alt="CÔNG TY TNHH KCC (VIỆT NAM NHƠN TRẠCH" title="Nhân Viên Kỹ Thuật Bảo Trì Điện">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <div class="ml-auto">
                                    <h3 class="title">
                                        <a target="_blank" class="underline-box-job" href="/ap/detail-job/{{ $item->id }}" rel="nooppener noreferrer">
                                            <span class="bold transform-job-title" data-toggle="tooltip" title="" data-placement="top" data-container="body" data-original-title="">{{ $item->title }}</span>
                                        </a>
                                    </h3>
                                    <p class="company underline-box-job">
                                        <a href="/ap/detail-job/{{ $item->id }}" data-toggle="tooltip" title="" data-placement="top" data-container="body" target="_blank" rel="nooppener noreferrer" data-original-title="CÔNG TY TNHH KCC (VIỆT NAM NHƠN TRẠCH">{{ $item->nameBusiness }}</a>
                                    </p>
                                </div>
                                <div class="mr-auto text-right">
                                    <p class="deadline">
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="label-content ml-auto">
                                    <label class="salary">{{ $item->wage }} {{ $item->currency }} </label>
                                    <label class="address" data-toggle="tooltip" data-html="true" title="" data-placement="top" data-container="body" data-original-title="<p style='text-align: left'">{{ $item->area }}</label>
                                </div>
                                <div class="icon mr-auto">
                                    <div id="box-save-job-886513" class="box-save-job  box-save-job-hover   job-notsave " style="width: 23px">
                                        <a href="javascript:void(0)" class="btn-unsave unsave text-highlight" data-toggle="tooltip" title="" data-id="886513" data-title="Nhân Viên Kỹ Thuật Bảo Trì Điện" data-placement="top" data-container="body" data-original-title="Bỏ lưu">
                                            <span id="unsave-job-loading" style="display: none;">
                                                <img src="https://www.topcv.vn/v3/images/ap-loading.gif" style="width: 20px">
                                            </span>
                                            <i class="fa-solid fa-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                {!! $result->withQueryString()->links() !!}
            </div>
            <div class="col-md-3 right-box">
                <div class="interested">
                    <div class="box box-white box-no-padding" id="company-spotlight">
                        <h3 class="title-spotlight">Có thể bạn quan tâm</h3>
                        <div class="spotlight-company">
                            <div class="spotlight-image">
                                <a href="https://www.topcv.vn/brand/chailease">
                                    <div class="spotlight-cover-wraper">
                                        <img src="https://cdn.topcv.vn/247/company_covers/cong-ty-cho-thue-tai-chinh-tnhh-mtv-quoc-te-chailease-faaaab73a31c881be517e4d50fc0bef2-6324407085818.jpg" data-src="https://cdn.topcv.vn/247/company_covers/cong-ty-cho-thue-tai-chinh-tnhh-mtv-quoc-te-chailease-faaaab73a31c881be517e4d50fc0bef2-6324407085818.jpg" alt="Công ty Cho thuê tài chính TNHH MTV Quốc tế Chailease" class="spotlight-cover">
                                    </div>
                                </a>
                            </div>
                            <div class="spotlight-info">
                                <div class="company-name"><a class="text-highlight bold text_uppercase" style="font-size: 15px;" href="https://www.topcv.vn/brand/chailease">Công ty
                                        Cho thuê tài chính TNHH MTV Quốc tế Chailease</a></div>
                            </div>
                            <div class="job">
                                <a href="https://www.topcv.vn/brand/chailease/tuyen-dung/compliance-officer-j876552.html?ta_source=JobSearchList" target="_blank" data-toggle="tooltip" title="" data-placement="top" class="job-name text-dark-blue underline-box-job" rel="nooppener noreferrer" data-original-title="Compliance Officer">Compliance Officer</a>
                                <div class="d-flex">
                                    <div class="deadline ml-auto">
                                        <i class="fa-light fa-money-bill text-highlight"></i> Thoả thuận
                                    </div>
                                    <div class="salary mr-auto">
                                        <i class="fa-light fa-timer text-highlight"></i> 23/12/2022
                                    </div>
                                </div>
                            </div>
                            <div class="job">
                                <a href="https://www.topcv.vn/brand/chailease/tuyen-dung/legal-executive-j876573.html?ta_source=JobSearchList" target="_blank" data-toggle="tooltip" title="" data-placement="top" class="job-name text-dark-blue underline-box-job" rel="nooppener noreferrer" data-original-title="Legal Executive">Legal Executive</a>
                                <div class="d-flex">
                                    <div class="deadline ml-auto">
                                        <i class="fa-light fa-money-bill text-highlight"></i> Thoả thuận
                                    </div>
                                    <div class="salary mr-auto">
                                        <i class="fa-light fa-timer text-highlight"></i> 23/12/2022
                                    </div>
                                </div>
                            </div>
                            <div class="spotlight-count text-center">
                                <a href="https://www.topcv.vn/brand/chailease" target="_blank" class="text-highlight get-more" rel="nooppener noreferrer">TÌM HIỂU NGAY</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="image">
                        <a target="_blank" href="https://www.topcv.vn/mau-cv" rel="nooppener noreferrer"><img src="https://static.topcv.vn/manual/cv-tim-viec-topcv.png" alt="Apply việc gì cũng dễ" class="w-100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ url('js/app.js') }}"></script>

</html>
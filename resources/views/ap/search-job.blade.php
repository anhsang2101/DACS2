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
@include('ap.navbar');
    <div class="page-welcome">
        <section id="box-search-job">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <br>
                        <br>
                        <div class="form-search">
                            <form id="frm-search-job" method="GET" action="{{ route('ap.searchjob') }}" target="_blank">
                                <div class="box-search">
                                    <div class="col-input">
                                        <input name="keyword" id="keyword" required class="form-control input-search ui-autocomplete-input border-hover" value="" placeholder="T??n c??ng vi???c, v??? tr?? b???n mu???n ???ng tuy???n" id="keyword" autocomplete="off" onfocus="show()" required>


                                        <div class="search-advanced" id="search-advanced">
                                            <div class="d-flex mt-2">
                                                <p class="title">T??m ki???m n??ng cao</p>
                                                <button type="button" class="less-content" id="hide-button"><i class="fa-light fa-arrow-up-from-dotted-line d-none"></i> Thu g???n</button>
                                            </div>
                                            <div class="d-flex">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search1" onclick="showhide(1)">
                                                        <label class="form-check-label" for="1">
                                                            Ng??nh ngh???
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search2" onclick="showhide(2)">
                                                        <label class="form-check-label" for="2">
                                                            Khu v???c
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search3" onclick="showhide(3)">
                                                        <label class="form-check-label" for="3">
                                                            C???p b???c
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search4" onclick="showhide(4)">
                                                        <label class="form-check-label" for="4">
                                                            H??nh th???c l??m vi???c
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search5" onclick="showhide(5)">
                                                        <label class="form-check-label" for="5">
                                                            M???c l????ng
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search6" onclick="showhide(6)">
                                                        <label class="form-check-label" for="5">
                                                            Kinh nghi???m
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="form-1" style="display: none;">
                                                    <select name="major" id="major" class="form-control">
                                                        <option value="Kinh doanh / B??n h??ng">Kinh doanh / B??n h??ng</option>
                                                        <option value="Bi??n / Phi??n d???ch">Bi??n / Phi??n d???ch</option>
                                                        <option value="B??o ch?? / Truy???n h??nh">B??o ch?? / Truy???n h??nh</option>
                                                        <option value="B??u ch??nh - Vi???n th??ng">B??u ch??nh - Vi???n th??ng</option>
                                                        <option value="B???o hi???m">B???o hi???m</option>
                                                        <option value="B???t ?????ng s???n">B???t ?????ng s???n</option>
                                                        <option value="Ch???ng kho??n / V??ng / Ngo???i t???">Ch???ng kho??n / V??ng / Ngo???i t???</option>
                                                        <option value="IT Ph???n c???ng / M???ng">IT Ph???n c???ng / M???ng</option>
                                                        <option value="IT ph???n m???m">IT ph???n m???m</option>
                                                        <option value="Th?? k?? / Tr??? l??">Th?? k?? / Tr??? l??</option>
                                                        <option value="Phi ch??nh ph??? / Phi l???i nhu???n">Phi ch??nh ph??? / Phi l???i nhu???n</option>
                                                        <option value="C??ng ngh??? ?? t??">C??ng ngh??? ?? t??</option>
                                                        <option value="Qu???n l?? ??i???u h??nh">Qu???n l?? ??i???u h??nh</option>
                                                        <option value="M??? thu???t / Ngh??? thu???t / ??i???n ???nh">M??? thu???t / Ngh??? thu???t / ??i???n ???nh
                                                        <option value="Ki???n tr??c">Ki???n tr??c</option>
                                                        <option value="Logistics">Logistics</option>
                                                        <option value="Lu???t/Ph??p l??">Lu???t/Ph??p l??</option>
                                                        <option value="X??y d???ng">X??y d???ng</option>
                                                        <option value="Xu???t nh???p kh???u">Xu???t nh???p kh???u</option>
                                                        <option value="Y t??? / D?????c">Y t??? / D?????c</option>
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-2" style="display: none;">
                                                    <select name="area" id="area" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">T???nh th??nh</option>
                                                        <option value="An Giang">An Giang
                                                        <option value="B?? R???a - V??ng T??u">B?? R???a - V??ng T??u
                                                        <option value="B???c Giang">B???c Giang
                                                        <option value="B???c K???n">B???c K???n
                                                        <option value="B???c Li??u">B???c Li??u
                                                        <option value="B???c Ninh">B???c Ninh
                                                        <option value="B???n Tre">B???n Tre
                                                        <option value="B??nh ?????nh">B??nh ?????nh
                                                        <option value="B??nh D????ng">B??nh D????ng
                                                        <option value="B??nh Ph?????c">B??nh Ph?????c
                                                        <option value="B??nh Thu???n">B??nh Thu???n
                                                        <option value="B??nh Thu???n">B??nh Thu???n
                                                        <option value="C?? Mau">C?? Mau
                                                        <option value="Cao B???ng">Cao B???ng
                                                        <option value="?????k L???k">?????k L???k
                                                        <option value="?????k N??ng">?????k N??ng
                                                        <option value="??i???n Bi??n">??i???n Bi??n
                                                        <option value="?????ng Nai">?????ng Nai
                                                        <option value="?????ng Th??p">?????ng Th??p
                                                        <option value="?????ng Th??p">?????ng Th??p
                                                        <option value="Gia Lai">Gia Lai
                                                        <option value="H?? Giang">H?? Giang
                                                        <option value="H?? Nam">H?? Nam
                                                        <option value="H?? T??nh">H?? T??nh
                                                        <option value="H???i D????ng">H???i D????ng
                                                        <option value="H???u Giang">H???u Giang
                                                        <option value="H??a B??nh">H??a B??nh
                                                        <option value="H??ng Y??n">H??ng Y??n
                                                        <option value="Kh??nh H??a">Kh??nh H??a
                                                        <option value="Ki??n Giang">Ki??n Giang
                                                        <option value="Kon Tum">Kon Tum
                                                        <option value="Lai Ch??u">Lai Ch??u
                                                        <option value="L??m ?????ng">L??m ?????ng
                                                        <option value="L???ng S??n">L???ng S??n
                                                        <option value="L??o Cai">L??o Cai
                                                        <option value="Long An">Long An
                                                        <option value="Nam ?????nh">Nam ?????nh
                                                        <option value="Ngh??? An">Ngh??? An
                                                        <option value="Ninh B??nh">Ninh B??nh
                                                        <option value="Ninh Thu???n">Ninh Thu???n
                                                        <option value="Ph?? Th???">Ph?? Th???
                                                        <option value="Qu???ng B??nh">Qu???ng B??nh
                                                        <option value="Qu???ng B??nh">Qu???ng B??nh
                                                        <option value="Qu???ng Ng??i">Qu???ng Ng??i
                                                        <option value="Qu???ng Ninh">Qu???ng Ninh
                                                        <option value="Qu???ng Tr???">Qu???ng Tr???
                                                        <option value="S??c Tr??ng">S??c Tr??ng
                                                        <option value="S??n La">S??n La
                                                        <option value="T??y Ninh">T??y Ninh
                                                        <option value="Th??i B??nh">Th??i B??nh
                                                        <option value="Th??i Nguy??n">Th??i Nguy??n
                                                        <option value="Thanh H??a">Thanh H??a
                                                        <option value="Th???a Thi??n Hu???">Th???a Thi??n Hu???
                                                        <option value="Ti???n Giang">Ti???n Giang
                                                        <option value="Tr?? Vinh">Tr?? Vinh
                                                        <option value="Tuy??n Quang">Tuy??n Quang
                                                        <option value="V??nh Long">V??nh Long
                                                        <option value="V??nh Ph??c">V??nh Ph??c
                                                        <option value="Y??n B??i">Y??n B??i
                                                        <option value="Ph?? Y??n">Ph?? Y??n
                                                        <option value="Tp.C???n Th??">Tp.C???n Th??
                                                        <option value="Tp.???? N???ng">Tp.???? N???ng
                                                        <option value="Tp.H???i Ph??ng">Tp.H???i Ph??ng
                                                        <option value="Tp.H?? N???i">Tp.H?? N???i
                                                        <option value="TP  HCM">TP HCM
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-3" style="display: none;">
                                                    <select name="rank" id="rank" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">C???p b???c</option>
                                                        <option value="Tr?????ng chi nh??nh">Tr?????ng chi nh??nh</option>
                                                        <option value="Tr?????ng ph??ng">Tr?????ng ph??ng</option>
                                                        <option value="Gi??m ?????c">Gi??m ?????c</option>
                                                        <option value="Ph?? gi??m ?????c">Ph?? gi??m ?????c</option>
                                                        <option value="Th???c t???p sinh">Th???c t???p sinh</option>
                                                        <option value="Nh??n vi??n">Nh??n vi??n</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-4" style="display: none;">
                                                    <select name="type" id="type" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">H??nh th???c l??m vi???c</option>
                                                        <option value="To??n th???i gian">To??n th???i gian</option>
                                                        <option value="B??n th???i gian">B??n th???i gian</option>
                                                        <option value="Th???c t???p">Th???c t???p</option>
                                                        <option value="Remote - L??m vi???c t??? xa">Remote - L??m vi???c t??? xa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-5" style="display: none;">
                                                    <select name="wage" id="wage" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">M???c l????ng</option>
                                                        <option value="3000000">&nbsp;&nbsp;D?????i 3 tri???u</option>
                                                        <option value="5000000">&nbsp;&nbsp;3 - 6 tri???u</option>
                                                        <option value="7000000">&nbsp;&nbsp;6 - 9 tri???u</option>
                                                        <option value="10000000">&nbsp;&nbsp;9 -12 tri???u</option>
                                                        <option value="120">&nbsp;&nbsp;12 - 15 tri???u</option>
                                                        <option value="6">&nbsp;&nbsp;18 - 21 tri???u</option>
                                                        <option value="7">&nbsp;&nbsp;24 - 27 tri???u</option>
                                                        <option value="8">&nbsp;&nbsp;27 - 30 tri???u</option>
                                                        <option value="10">&nbsp;&nbsp;Tr??n 30 tri???u</option>
                                                        <option value="Th???a thu???n">&nbsp;&nbsp;Tho??? thu???n</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-6" style="display: none;">
                                                    <select name="exp" id="exp" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Kinh nghi???m</option>
                                                        <option value="Ch??a c?? kinh nghi???m">Kh??ng y??u c???u kinh nghi???m</option>
                                                        <option value="D?????i 1 n??m kinh nghi???m">D?????i 1 n??m kinh nghi???m</option>
                                                        <option value="1 n??m kinh nghi???m">1 n??m kinh nghi???m</option>
                                                        <option value="2 n??m kinh nghi???m">2 n??m kinh nghi???m</option>
                                                        <option value="3 n??m kinh nghi???m">3 n??m kinh nghi???m</option>
                                                        <option value="4 n??m kinh nghi???m">4 n??m kinh nghi???m</option>
                                                        <option value="5 n??m kinh nghi???m">5 n??m kinh nghi???m</option>
                                                        <option value="Tr??n 5 n??m kinh nghi???m">Tr??n 5 n??m kinh nghi???m</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-button">
                                        <button type="submit" class="btn btn-search-job"><span>T??m vi???c ngay</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="list-job">
        <div class="job-body row">
            <div class="col-md-3">
            <div class="image">
                        <a target="_blank" href="" rel="nooppener noreferrer"><img src="{{asset('/img/banner-doc1.png')}}" alt="Apply vi???c g?? c??ng d???" class="w-100"></a>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="lists" id="container">
                <div class="job-header">
            <span>T??m th???y <b class="text-highlight">{{ $result->total() }}</b> vi???c l??m ph?? h???p v???i y??u c???u c???a
                b???n.</span>
        </div>
                    @if (!empty($result))
                    @foreach ($result as $key => $item)
                    <div class="job-item  bg-highlight  job-ta result-job-hover" data-job-id="886513" data-job-position="1" data-box="BoxSearchResult" id="datapaging">
                        <div class="avatar">
                            <a target="_blank" href="/ap/detail-job/{{ $item->id }}" class="company-logo" rel="nooppener noreferrer">
                                <img src="{{asset('/img/logo/' .$item->image)}}" class="w-100" alt="C??NG TY TNHH KCC (VI???T NAM NH??N TR???CH" title="Nh??n Vi??n K??? Thu???t B???o Tr?? ??i???n">
                            </a>
                        </div>
                        <div class="body">
                            <div class="content">
                                <div class="ml">
                                    <h3 class="title">
                                        <a target="_blank" class="underline-box-job" href="/ap/detail-job/{{ $item->id }}" rel="nooppener noreferrer">
                                            <span class="bold transform-job-title" data-toggle="tooltip" title="" data-placement="top" data-container="body" data-original-title="">{{ $item->title }}</span>
                                        </a>
                                    </h3>
                                    <p class="company underline-box-job">
                                        <a href="/ap/detail-job/{{ $item->id }}" data-toggle="tooltip" title="" data-placement="top" data-container="body" target="_blank" rel="nooppener noreferrer" data-original-title="C??NG TY TNHH KCC (VI???T NAM NH??N TR???CH">{{ $item->nameBusiness }}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="label-content">
                                    <label class="salary">{{ $item->wage }} {{ $item->currency }} </label>
                                    <label class="address" data-toggle="tooltip" data-html="true" title="" data-placement="top" data-container="body" data-original-title="<p style='text-align: left'">{{ $item->area }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                {!! $result->withQueryString()->links() !!}
            </div>
            <div class="col-md-3">
                    <div class="image">
                        <a target="_blank" href="" rel="nooppener noreferrer"><img src="{{asset('/img/banner-doc2.png')}}" alt="Apply vi???c g?? c??ng d???" class="w-100"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ url('js/app.js') }}"></script>
<script>
    
//     $(document).ready(function () {
//     $(document).on("click", ".pagination a", function (event) {
//         event.preventDefault();
//         var page = $(this).attr("href").split("page=")[1];
//         var datapaging = document.getElementById("datapaging");
//         fetch_data(page);
//     });

//     function fetch_data(page) {
//         $.ajax({
//             url: "/ap/searchjob?page=" + page,
//             success: function (data) {
//                 $("#container").html(data);
//             },
//         });
//     }
// });
</script>
</html>
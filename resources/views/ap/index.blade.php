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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
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
                            <form id="frm-search-job" method="GET" action="{{ route('ap.searchjob') }}">
                                <div class="box-search">
                                    <div class="col-input">
                                        <input name="keyword" id="keyword" class="form-control input-search ui-autocomplete-input border-hover" value="" placeholder="Tên công việc, vị trí bạn muốn ứng tuyển" id="keyword" autocomplete="off" onfocus="show()" required>


                                        <div class="search-advanced" id="search-advanced">
                                            <div class="d-flex mt-2">
                                                <p class="title">Tìm kiếm nâng cao</p>
                                                <button type="button" class="less-content" id="hide-button"><i class="fa-light fa-arrow-up-from-dotted-line d-none"></i> Thu gọn</button>
                                            </div>
                                            <div class="d-flex">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search1" onclick="showhide(1)">
                                                        <label class="form-check-label" for="1">
                                                            Ngành nghề
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search2" onclick="showhide(2)">
                                                        <label class="form-check-label" for="2">
                                                            Khu vực
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search3" onclick="showhide(3)">
                                                        <label class="form-check-label" for="3">
                                                            Cấp bậc
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search4" onclick="showhide(4)">
                                                        <label class="form-check-label" for="4">
                                                            Hình thức làm việc
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search5" onclick="showhide(5)">
                                                        <label class="form-check-label" for="5">
                                                            Mức lương
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="1" id="search6" onclick="showhide(6)">
                                                        <label class="form-check-label" for="5">
                                                            Kinh nghiệm
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group" id="form-1" style="display: none;">
                                                    <select name="major" id="major" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Chọn ngành nghề</option>
                                                        <option value="Bán hàng kỹ thuật">&nbsp;Bán hàng kỹ thuật</option>
                                                        <option value="Kinh doanh / Bán hàng">Kinh doanh / Bán hàng</option>
                                                        <option value="Biên / Phiên dịch">Biên / Phiên dịch</option>
                                                        <option value="Báo chí / Truyền hình">Báo chí / Truyền hình</option>
                                                        <option value="Bưu chính - Viễn thông">Bưu chính - Viễn thông</option>
                                                        <option value="Bảo hiểm">Bảo hiểm</option>
                                                        <option value="Bất động sản">Bất động sản</option>
                                                        <option value="Chứng khoán / Vàng / Ngoại tệ">Chứng khoán / Vàng / Ngoại tệ</option>
                                                        <option value="Dầu khí/Hóa chất">&nbsp;Dầu khí/Hóa chất</option>
                                                        <option value="Dệt may / Da giày">&nbsp;Dệt may / Da giày</option>
                                                        <option value="ịa chất / Khoáng sản">&nbsp;Địa chất / Khoáng sản</option>
                                                        <option value="Dịch vụ khách hàng">&nbsp;Dịch vụ khách hàng</option>
                                                        <option value="Điện / Điện tử / Điện lạnh">&nbsp;Điện / Điện tử / Điện lạnh</option>
                                                        <option value="Điện tử viễn thông">&nbsp;Điện tử viễn thông</option>
                                                        <option value="Du lịch">&nbsp;Du lịch</option>
                                                        <option value="Dược phẩm / Công nghệ sinh học">&nbsp;Dược phẩm / Công nghệ sinh học</option>
                                                        <option value="Giáo dục / Đào tạo">&nbsp;Giáo dục / Đào tạo</option>
                                                        <option value="Hàng cao cấp">&nbsp;Hàng cao cấp</option>
                                                        <option value="Hàng không">&nbsp;Hàng không</option>
                                                        <option value="Hành chính / Văn phòng">&nbsp;Hành chính / Văn phòng</option>
                                                        <option value="Hoá học / Sinh học">&nbsp;Hoá học / Sinh học</option>
                                                        <option value="In ấn / Xuất bản">&nbsp;In ấn / Xuất bản</option>
                                                        <option value="IT Phần cứng / Mạng<">&nbsp;IT Phần cứng / Mạng</option>
                                                        <option value="IT phần mềm<">&nbsp;IT phần mềm</option>
                                                        <option value="Kế toán / Kiểm toán">&nbsp;Kế toán / Kiểm toán</option>
                                                        <option value="Khách sạn / Nhà hàng">&nbsp;Khách sạn / Nhà hàng</option>
                                                        <option value="Kiến trúc">&nbsp;Kiến trúc</option>
                                                        <option value="Logistics">&nbsp;Logistics</option>
                                                        <option value="Luật/Pháp lý">&nbsp;Luật/Pháp lý</option>
                                                        <option value="Marketing / Truyền thông / Quảng cáo">&nbsp;Marketing / Truyền thông / Quảng cáo</option>
                                                        <option value="Môi trường / Xử lý chất thải">&nbsp;Môi trường / Xử lý chất thải</option>
                                                        <option value="Mỹ thuật / Nghệ thuật / Điện ảnh">&nbsp;Mỹ thuật / Nghệ thuật / Điện ảnh</option>
                                                        <option value="Ngân hàng / Tài chính<">&nbsp;Ngân hàng / Tài chính</option>
                                                        <option value="NGO / Phi chính phủ / Phi lợi nhuận">&nbsp;NGO / Phi chính phủ / Phi lợi nhuận</option>
                                                        <option value="Nhân sự">&nbsp;Nhân sự</option>
                                                        <option value="Nông / Lâm / Ngư nghiệp">&nbsp;Nông / Lâm / Ngư nghiệp</option>
                                                        <option value="Quản lý chất lượng (QA/QC)">&nbsp;Quản lý chất lượng (QA/QC)</option>
                                                        <option value="Quản lý điều hành">&nbsp;Quản lý điều hành</option>
                                                        <option value="Sản phẩm công nghiệp">&nbsp;Sản phẩm công nghiệp</option>
                                                        <option value="Tài chính / Đầu tư">&nbsp;Tài chính / Đầu tư</option>
                                                        <option value="Thiết kế đồ họa">&nbsp;Thiết kế đồ họa</option>
                                                        <option value="Thiết kế nội thất">&nbsp;Thiết kế nội thất</option>
                                                        <option value="Thời tran">&nbsp;Thời trang</option>
                                                        <option value="Thư ký / Trợ lý<">&nbsp;Thư ký / Trợ lý</option>
                                                        <option value="Thực phẩm / Đồ uống">&nbsp;Thực phẩm / Đồ uống</option>
                                                        <option value="Tổ chức sự kiện / Quà tặng">&nbsp;Tổ chức sự kiện / Quà tặng</option>
                                                        <option value="Vận tải / Kho vận">&nbsp;Vận tải / Kho vận</option>
                                                        <option value="Xây dựng">&nbsp;Xây dựng</option>
                                                        <option value="Xuất nhập khẩu">&nbsp;Xuất nhập khẩu</option>
                                                        <option value="Y tế / Dược">&nbsp;Y tế / Dược</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-2" style="display: none;">
                                                    <select name="area" id="area" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Tỉnh thành</option>
                                                        <option value="An Giang">An Giang
                                                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                        <option value="Bắc Giang">Bắc Giang
                                                        <option value="Bắc Kạn">Bắc Kạn
                                                        <option value="Bạc Liêu">Bạc Liêu
                                                        <option value="Bắc Ninh">Bắc Ninh
                                                        <option value="Bến Tre">Bến Tre
                                                        <option value="Bình Định">Bình Định
                                                        <option value="Bình Dương">Bình Dương
                                                        <option value="Bình Phước">Bình Phước
                                                        <option value="Bình Thuận">Bình Thuận
                                                        <option value="Bình Thuận">Bình Thuận
                                                        <option value="Cà Mau">Cà Mau
                                                        <option value="Cao Bằng">Cao Bằng
                                                        <option value="Đắk Lắk">Đắk Lắk
                                                        <option value="Đắk Nông">Đắk Nông
                                                        <option value="Điện Biên">Điện Biên
                                                        <option value="Đồng Nai">Đồng Nai
                                                        <option value="Đồng Tháp">Đồng Tháp
                                                        <option value="Đồng Tháp">Đồng Tháp
                                                        <option value="Gia Lai">Gia Lai
                                                        <option value="Hà Giang">Hà Giang
                                                        <option value="Hà Nam">Hà Nam
                                                        <option value="Hà Tĩnh">Hà Tĩnh
                                                        <option value="Hải Dương">Hải Dương
                                                        <option value="Hậu Giang">Hậu Giang
                                                        <option value="Hòa Bình">Hòa Bình
                                                        <option value="Hưng Yên">Hưng Yên
                                                        <option value="Khánh Hòa">Khánh Hòa
                                                        <option value="Kiên Giang">Kiên Giang
                                                        <option value="Kon Tum">Kon Tum
                                                        <option value="Lai Châu">Lai Châu
                                                        <option value="Lâm Đồng">Lâm Đồng
                                                        <option value="Lạng Sơn">Lạng Sơn
                                                        <option value="Lào Cai">Lào Cai
                                                        <option value="Long An">Long An
                                                        <option value="Nam Định">Nam Định
                                                        <option value="Nghệ An">Nghệ An
                                                        <option value="Ninh Bình">Ninh Bình
                                                        <option value="Ninh Thuận">Ninh Thuận
                                                        <option value="Phú Thọ">Phú Thọ
                                                        <option value="Quảng Bình">Quảng Bình
                                                        <option value="Quảng Bình">Quảng Bình
                                                        <option value="Quảng Ngãi">Quảng Ngãi
                                                        <option value="Quảng Ninh">Quảng Ninh
                                                        <option value="Quảng Trị">Quảng Trị
                                                        <option value="Sóc Trăng">Sóc Trăng
                                                        <option value="Sơn La">Sơn La
                                                        <option value="Tây Ninh">Tây Ninh
                                                        <option value="Thái Bình">Thái Bình
                                                        <option value="Thái Nguyên">Thái Nguyên
                                                        <option value="Thanh Hóa">Thanh Hóa
                                                        <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                        <option value="Tiền Giang">Tiền Giang
                                                        <option value="Trà Vinh">Trà Vinh
                                                        <option value="Tuyên Quang">Tuyên Quang
                                                        <option value="Vĩnh Long">Vĩnh Long
                                                        <option value="Vĩnh Phúc">Vĩnh Phúc
                                                        <option value="Yên Bái">Yên Bái
                                                        <option value="Phú Yên">Phú Yên
                                                        <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                        <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                        <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                        <option value="Tp.Hà Nội">Tp.Hà Nội
                                                        <option value="TP  HCM">TP HCM
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-3" style="display: none;">
                                                    <select name="rank" id="rank" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Cấp bậc</option>
                                                        <option value="Trưởng chi nhánh">Trưởng chi nhánh</option>
                                                        <option value="Trưởng phòng">Trưởng phòng</option>
                                                        <option value="Giám đốc">Giám đốc</option>
                                                        <option value="Phó giám đốc">Phó giám đốc</option>
                                                        <option value="Thực tập sinh">Thực tập sinh</option>
                                                        <option value="Nhân viên">Nhân viên</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-4" style="display: none;">
                                                    <select name="type" id="type" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Hình thức làm việc</option>
                                                        <option value="Toàn thời gian">&nbsp;Toàn thời gian</option>
                                                        <option value="Bán thời gian">&nbsp;Bán thời gian</option>
                                                        <option value="Thực tập">&nbsp;Thực tập</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-5" style="display: none;">
                                                    <select name="wage" id="wage" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Mức lương</option>
                                                        <option value="3000000">&nbsp;&nbsp;Dưới 3 triệu</option>
                                                        <option value="5000000">&nbsp;&nbsp;3 - 6 triệu</option>
                                                        <option value="7000000">&nbsp;&nbsp;6 - 9 triệu</option>
                                                        <option value="10000000">&nbsp;&nbsp;9 -12 triệu</option>
                                                        <option value="120">&nbsp;&nbsp;12 - 15 triệu</option>
                                                        <option value="6">&nbsp;&nbsp;18 - 21 triệu</option>
                                                        <option value="7">&nbsp;&nbsp;24 - 27 triệu</option>
                                                        <option value="8">&nbsp;&nbsp;27 - 30 triệu</option>
                                                        <option value="10">&nbsp;&nbsp;Trên 30 triệu</option>
                                                        <option value="Thỏa thuận">&nbsp;&nbsp;Thoả thuận</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" id="form-6" style="display: none;">
                                                    <select name="exp" id="exp" class="form-control" tabindex="-1" aria-hidden="true">
                                                        <option value="">Kinh nghiệm</option>
                                                        <option value="Chưa có kinh nghiệm">Không yêu cầu kinh nghiệm</option>
                                                        <option value="Dưới 1 năm kinh nghiệm">Dưới 1 năm kinh nghiệm</option>
                                                        <option value="1 năm kinh nghiệm">1 năm kinh nghiệm</option>
                                                        <option value="2 năm kinh nghiệm">2 năm kinh nghiệm</option>
                                                        <option value="3 năm kinh nghiệm">3 năm kinh nghiệm</option>
                                                        <option value="4 năm kinh nghiệm">4 năm kinh nghiệm</option>
                                                        <option value="5 năm kinh nghiệm">5 năm kinh nghiệm</option>
                                                        <option value="Trên 5 năm kinh nghiệm">Trên 5 năm kinh nghiệm</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-button">
                                        <button type="submit" class="btn btn-search-job"><i class="fa-solid fa-magnifying-glass"></i> <span>Tìm việc
                                                ngay</span></button>
                                    </div>
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
        <div class="container" id="container">
            <div class="box-header">
                <h2 class="text_ellipsis uppercase box-title">
                    Tin tuyển dụng, việc làm tốt nhất
                </h2>
            </div>

            @include('ap.pagination')

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const keyword = document.getElementById('keyword');
        hidebutton = document.getElementById('hide-button');
        const advanced = document.getElementById('search-advanced');
        advanced.style.display = 'none';
        hidebutton.addEventListener('click', (event) => {
            advanced.style.display = "none";
        });

        function hide() {
            advanced.style.display = "none";
        }

        function show() {
            advanced.style.display = "block";
        }
    </script>
    <script>
        $(window).on("load", function() {
            $(".preloading").fadeOut("slow");
        });
        var loader = document.getElementById("preloading");
        window.addEventListener("load", function() {
            loader.style.display = "none";
        })
    </script>

    <script>
        $(document).ready(function() {

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                var datapaging = document.getElementById('datapaging');
                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/ap/pagination?page=" + page,
                    success: function(data) {
                        $('#container').html(data);
                    }
                });
            }

        });
    </script>
    <script>
        function showhide(x) {
            var major = document.getElementById('form-1');
            var area = document.getElementById('form-2');
            var rank = document.getElementById('form-3');
            var type = document.getElementById('form-4');
            var wage = document.getElementById('form-5');
            var exp = document.getElementById('form-6');
            var input = document.getElementById('keyword');
            major.style.display = 'none';
            area.style.display = 'none';
            rank.style.display = 'none';
            type.style.display = 'none';
            wage.style.display = 'none';
            exp.style.display = "none";

            input.addEventListener("focus", function() {
                document.getElementById('search1').checked = false;
                document.getElementById('search2').checked = false;
                document.getElementById('search3').checked = false;
                document.getElementById('search4').checked = false;
                document.getElementById('search5').checked = false;
                document.getElementById('search6').checked = false;
                major.style.display = 'none';
                area.style.display = 'none';
                rank.style.display = 'none';
                type.style.display = 'none';
                wage.style.display = 'none';
                exp.style.display = 'none';
                $("[name='major']").prop("required", false);
                $("[name='area']").prop("required", false);
                $("[name='rank']").prop("required", false);
                $("[name='type']").prop("required", false);
                $("[name='wage']").prop("required", false);
                $("[name='exp']").prop("required", false);



            });
            input.addEventListener("focusout", function() {
                $("#keyword").children().prop('disabled', true);
            });

            if (x == 1) {
                major.style.display = 'block';
                $("[name='major']").prop("required", true);;
                $("[name='keyword']").prop("required", false);

                input.value = '';
            } else {
                major.style.display = 'none';
                document.getElementById('major').value = "";
                $("[name='major']").prop("required", false);

            }
            if (x == 2) {
                area.style.display = 'block';
                $("[name='keyword']").prop("required", false);
                input.value = '';
                $("[name='area']").prop("required", true);
            } else {
                area.style.display = 'none';
                document.getElementById('area').value = "";
                $("[name='area']").prop("required", false);

            }
            if (x == 3) {
                rank.style.display = 'block';
                $("[name='keyword']").prop("required", false);
                input.value = '';
                $("[name='rank']").prop("required", true);
            } else {
                rank.style.display = 'none';
                document.getElementById('rank').value = "";
                $("[name='rank']").prop("required", false);

            }
            if (x == 4) {
                type.style.display = 'block';
                $("[name='keyword']").prop("required", false);
                input.value = '';
                $("[name='type']").prop("required", true);
            } else {
                type.style.display = 'none';
                document.getElementById('type').value = "";
                $("[name='type']").prop("required", false);

            }
            if (x == 5) {
                wage.style.display = 'block';
                $("[name='keyword']").prop("required", false);
                input.value = '';
                $("[name='wage']").prop("required", true);
            } else {
                wage.style.display = 'none';
                document.getElementById('wage').value = "";
                $("[name='wage']").prop("required", false);

            }
            if (x == 6) {
                exp.style.display = 'block';
                $("[name='keyword']").prop("required", false);
                input.value = '';
                $("[name='exp']").prop("required", true);
            } else {
                exp.style.display = 'none';
                document.getElementById('exp').value = "";
                $("[name='exp']").prop("required", false);

            }
        }
    </script>
</body>

</html>
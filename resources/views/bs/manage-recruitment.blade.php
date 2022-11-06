<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng tin tuyển dụng miễn phí - Tìm CV ứng viên trên EZCV</title>
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

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
    <style>
    input,
    select,
    input[type=number] {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 2px;
        box-shadow: none;
        color: #333;
        font-size: 14px;
        font-weight: 400;
        height: 40px;
        line-height: 24px;
        padding: 11px 0 11px 20px;
        width: 380px;
    }

    textarea {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 2px;
        box-shadow: none;
        color: #333;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        padding: 11px 0 11px 20px;
    }

    .fullsize {
        width: 1140px;
    }

    * {
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        ;
    }

    .table tbody tr {
        background: #fff;
    }

    .table tbody th,
    .table tbody td {
        border: none;
        padding: 20px 30px;
        font-size: 14px;
        vertical-align: middle;
        text-align: left !important;
    }

    th {
        text-align: left !important;
    }

    .btn {
        width: 200px;
    }
    .btn1{
        background-color: #00b14f;
    color: #fff !important;
    font-size: 14px;
    font-weight: 700;
    padding: 10px 20px !important;
    text-align: center;
    width: 40px;;
    }

    .btn-search {
        background-color: #333;
    }

    .btn-edit {
        background-color: blue;
    }

    .btn-del {
        background-color: red;
    }
</style>
</head>


<body>

    @include('bs.navbar')


    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Mã chiến dịch</th>
                            <th>Tên chiến dịch</th>
                            <th>Ngày đăng</th>
                            <th>Số người ứng tuyển</th>
                            <th>Lọc CV</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1001</th>
                            <td>Đóng phim Serbia</td>
                            <td>22/10/2022</td>
                            <td>100</td>
                            <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm</a></td>
                            <td><a href="#" class="btn btn-success">Đã duyệt</a></td>
                            <td><a href="#" class="btn1 btn-edit">Sửa</a>
                                <a href="#" class="btn1 btn-del">Xóa</a>
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">1001</th>
                            <td>Đóng phim Serbia</td>
                            <td>22/10/2022</td>
                            <td>100</td>
                            <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm</a></td>
                            <td><a href="#" class="btn btn-success">Đã duyệt</a></td>
                            <td><a href="#" class="btn1 btn-edit">Sửa</a>
                                <a href="#" class="btn1 btn-del">Xóa</a>
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">1001</th>
                            <td>Đóng phim Serbia</td>
                            <td>22/10/2022</td>
                            <td>100</td>
                            <td><a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm</a></td>
                            <td><a href="#" class="btn btn-warning">Đang chờ</a></td>
                            <td><a href="#" class="btn1 btn-edit">Sửa</a>
                                <a href="#" class="btn1 btn-del">Xóa</a>
                            </td>
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">1001</th>
                            <td>Đóng phim Serbia</td>
                            <td>22/10/2022</td>
                            <td>100</td>
                            <td><a href="#"> <i class="fa-solid fa-magnifying-glass"></i> Tìm</a></td>
                            <td><a href="#" class="btn btn-danger">Không thành công</a></td>
                            <td><a href="#" class="btn1 btn-edit">Sửa</a>
                                <a href="#" class="btn1 btn-del">Xóa</a>
                            </td>

                            </th>>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
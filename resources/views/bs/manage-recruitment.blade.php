<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>
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
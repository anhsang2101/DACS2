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
    .page-wrapper, body{
        background: transparent linear-gradient(380deg,#adffb0,#f6f3ff) 0 0 no-repeat padding-box;
    }
    input, select{
        border: 1px solid #333;
        border-radius: 2px;
        box-shadow: none;
        color: #333;
        font-size: 14px;
        font-weight: 400;
        height: 40px;
        line-height: 24px;
        padding: 11px 0 11px 20px;
        resize: vertical;
        background: transparent !important;

    }

    select {
        display: inline-block;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    textarea {
        background: transparent !important;
        border: 1px solid #333;
        border-radius: 2px;
        box-shadow: none;
        color: #333;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
        padding: 11px 0 11px 20px;
    }

    .h2{
        color: #333 !important;
    }


    * {
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        ;
    }
</style>

<body>

    @include('bs.navbar')
    <div class="page-wrapper chiller-theme ml-0 mt-3 bg-white">
        <div class="container">
            <h2 class="h2">Đăng tin tuyển dụng mới</h2>
            <div class="row">
                <div class="col-md-12">
                    <form>
                        <div class="form-group">
                            <label for="name" class="title">Tên chiến dịch tuyển dụng</label>
                            <input required name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="VD: Tuyển dụng nhân viên Design tháng 12">
                        </div>
                        <div class="form-group">
                            <label for="role" class="title">Vị trí tuyển dụng</label>
                            <input required name="role" type="text" class="form-control" id="role" placeholder="VD: Nhân viên Marketing, Designer, Sales">
                        </div>
                        <div class="form-group">
                            <label for="platform" class="title">Khu vực làm việc</label> <br>
                            <select name="tinhthanh" id="tinhthanh" class="form-control">
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
                        <h3 class="h3">Thông tin đăng tuyển chi tiết</h3>
                        <div class="form-group">
                            <label for="title" class="title">Tiêu đề tin tuyển dụng</label>
                            <input required type="text" class="form-control" id="title" placeholder="VD: Nhân viên kinh doanh">
                        </div>
                        <div class="form-group">
                            <label for="career" class="title">Ngành nghề & lĩnh vực</label> <br>
                            <select required name="career" id="career" class="form-control">
                                <option value="1">Kinh doanh / Bán hàng</option>
                                <option value="1">Biên / Phiên dịch</option>
                                <option value="1">Báo chí / Truyền hình</option>
                                <option value="1">Bưu chính - Viễn thông</option>
                                <option value="1">Bảo hiểm</option>
                                <option value="1">Bất động sản</option>
                                <option value="1">Chứng khoán / Vàng / Ngoại tệ</option>
                                <option value="1">Công nghệ thông tin</option>
                                <option value="1">Thư ký / Trợ lý</option>
                                <option value="1">Phi chính phủ / Phi lợi nhuận</option>
                                <option value="1">Công nghệ Ô tô</option>
                                <option value="1">Quản lý điều hành</option>
                                <option value="1">Mỹ thuật / Nghệ thuật / Điện ảnh</option>
                            </select>
                        </div>
                        <h3 class="h3">Thông tin chung</h3>
                        <div class="form-group">

                            <label for="exampleInputPassword1" class="title">Số lượng tuyển</label>
                            <input required type="number" class="form-control" id="number" placeholder="Nhập số lượng tuyển">


                            <label for="exampleInputPassword1" class="title">Loại công việc</label> <br>
                            <select required name="type" class="form-control" id="type">
                                <option value="1">Toàn thời gian</option>
                                <option value="1">Bán thời gian</option>
                                <option value="1">Thực tập</option>
                                <option value="1">Remote - Làm việc từ xa</option>
                            </select>

                        </div>
                        <div class="form-group">

                            <label for="exampleInputPassword1" class="title">Giới tính</label> <br>
                            <select class="form-control" required name="gt" id="gt">
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>

                            <label for="exampleInputPassword1" class="title">Cấp bậc</label> <br>
                            <select class="form-control" required name="capbac" id="capbac">
                                <option value="1">Trưởng chi nhánh</option>
                                <option value="1">Trưởng phòng</option>
                                <option value="1">Giám đốc</option>
                                <option value="1">Phó giám đốc</option>
                                <option value="1">Thực tập sinh</option>
                                <option value="1">Nhân viên</option>
                            </select>

                            <label for="exampleInputPassword1" class="title">Kinh nghiệm</label> <br>
                            <select class="form-control" required name="kinhnghiem" id="kinhnghiem">
                                <option value="1">Chưa có kinh nghiệm</option>
                                <option value="1">Dưới 1 năm kinh nghiệm</option>
                                <option value="1">1 năm kinh nghiệm</option>
                                <option value="1">2 năm kinh nghiệm</option>
                                <option value="1">3 năm kinh nghiệm</option>
                                <option value="1">4 năm kinh nghiệm</option>
                                <option value="1">5 năm kinh nghiệm</option>
                                <option value="1">Trên 5 năm kinh nghiệm</option>
                            </select>
                        </div>
                        <h5 class="title">Mức lương</h5>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="title">Loại tiền tệ</label> <br>
                            <select class="form-control" required name="loaitiente" id="loaitiente">
                                <option value="USD">USD</option>
                                <option value="VND">VND</option>
                            </select>
                            <label for="exampleInputPassword1" class="title">Lương</label> <br>
                            <input class="form-control" required type="text">
                        </div> <br>
                        <h3 class="h3">Nội dung đăng tuyển chi tiết</h3>
                        <div class="form-group">
                            <label for="name" class="title">Mô tả công việc</label> <br>
                            <textarea class="form-control" required id="des" placeholder="Nhập nội dung mô tả công việc" name="des" rows="4" cols="140"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name" class="title">Yêu cầu ứng viên</label> <br>
                            <textarea class="form-control" required id="des" placeholder="Nhập nội dung yêu cầu ứng tuyển" name="des" rows="4" cols="140"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name" class="title">Quyền lợi của ứng viên</label> <br>
                            <textarea class="form-control" required id="des" placeholder="Nhập nội dung quyền lợi của ứng viên" name="des" rows="4" cols="140"></textarea>
                        </div>
                        <h3 class="h3">Thông tin nhận CV</h3>
                        <div class="form-group">
                            <label for="name" class="title">Hạn chót nhận CV</label> <br>
                            <input required name="date" type="date" class="form-control" id="datepicker">
                        </div>
                        <h4 class="title">Thông tin người nhận CV</h4>
                        <div class="form-group">

                            <label for="name" class="title">Họ và tên</label> <br>
                            <input class="form-control" required name="fullname" type="text" id="fullname">

                            <label for="name" class="title">Số điện thoại</label> <br>
                            <input class="form-control" required name="phone" type="text" id="phone">

                            <label for="name" class="title">Email</label> <br>
                            <input class="form-control" required name="email" type="email" id="email">
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- <p class="agree-term">
                                Bằng việc đăng ký tài khoản, bạn đã đồng ý với <span class="text-highlight">Điều khoản dịch vụ</span> và <span class="text-highlight">Chính sách bảo
                                    mật</span> của chúng tôi
                            </p> -->
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    <button type="reset" class="btn btn-reset btn-block mb-4">Nhập lại</button>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Hoàn tất</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
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

<body>

    @include('bs.navbar-dashboard')

    <div class="page-wrapper chiller-theme ml-0 mt-3 bg-white">
        <div class="container">
            <div class="row" style="margin-right: -15px;margin-left: -15px;">
                <div class="col-md-6">
                    <div class="box-create-cv mb-16">
                        <div class="col-md-7 box-item">
                            <h2>Đăng tin tuyển dụng dễ dàng nhanh chóng </h2>
                            <h3>Với EZCV bạn có thể dễ dàng đăng tin tuyển dụng mọi lúc mọi nơi</h3>
                            <a href="https://www.topcv.vn/mau-cv" class="btn btn-topcv btn-search-job" style="font-weight: bold;"><i class="fa-solid fa-plus"></i> Đăng tin ngay</a>
                        </div>
                        <div class="box-image">
                            <img src="{{ url('img/dangtin1.png') }}" alt="Dang tin" title="Tạo CV online ấn tượng" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-create-cv">
                        <div class="col-md-7 box-item">
                            <h2>Quản lý tin tuyển dụng hiệu quả</label> </h2>
                            <h3>Dễ dàng quản lý và thống kê tin đã đăng, cho phép hiệu quả và năng suất đến 60%</h3>
                            <a href="https://www.topcv.vn/upload-cv" class="btn btn-topcv btn-search-job" style="font-weight: bold;"> <i class="fa-solid fa-bars-progress"></i> Vào trang quản lý</a>
                        </div>
                        <div class="box-image box-upload">
                            <img src="https://www.topcv.vn/v4/image/welcome/upload-cv.png?v=1.0.0" title="Sử dụng CV theo ngành nghề" alt="Su dung CV theo nganh nghe" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
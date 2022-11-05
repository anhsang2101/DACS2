<html>
<title>Đăng nhập tài khoản Online - EZCV</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
<link rel="manifest" href="../img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<style>
    button {
        background-color: #00b14f !important;
        border-top: 1px solid #00b14f !important;
        border-left: 1px solid #00b14f !important;
        border-right: 1px solid #00b14f !important;
        border-bottom: 1px solid #00b14f !important;
    }

    .btn-link {
        color: white !important;
        border-top: 1px solid white !important;
        border-left: 1px solid white !important;
        border-right: 1px solid white !important;
        border-bottom: 1px solid white !important;
    }

    .text-primary {
        color: #df3e39 !important;
    }

    h1 {
        font-size: 65px !important;
    }

    .btn-primary {
        background-color: #df3e39 !important;
        border-top: 1px solid #df3e39 !important;
        border-left: 1px solid #df3e39 !important;
        border-right: 1px solid #df3e39 !important;
        border-bottom: 1px solid #df3e39 !important;
    }

    #form-login .btn-primary:hover {
        background-color: #fd534d !important;
        border-top: 1px solid #fd534d !important;
        border-left: 1px solid #fd534d !important;
        border-right: 1px solid #fd534d !important;
        border-bottom: 1px solid #fd534d !important;
        /* transition: background-color 0.5s ; */
    }
</style>
<!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-lg-start" style="background-color: hsl(0, 0%, 97%); height: 100vh;">
        <div class="container">
            <div class="row gx-lg-5 align-items-center" style="margin-top: 5%;">
                <div class="col-lg-6 mb-5 mb-lg-0">

                    <div class="logo">
                        <a href="/bs">
                            <img src="../img/logo-business.png" width="200px" height="auto">
                        </a>
                    </div>

                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        Chào mừng bạn đến với
                        <span class="text-primary" style="font-size: 85px; font-weight: normal;">EZCV</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Cùng tạo dựng lợi thế cho doanh nghiệp bằng trải nghiệm công nghệ tuyển dụng ứng dụng sâu AI & Hiring Funnel
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form action="" method="post" id="form-login">
                                <div class="form-group mb-3">
                                    <label for="email" class="mb-1">Email</label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                        </div>
                                        <input type="text" name="email" class="form-control" placeholder="Nhập email của bạn" aria-label="Nhập email của bạn" value="">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="mb-1">Mật khẩu</label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                        </div>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" aria-label="Nhập mật khẩu">
                                        <!-- <div class="input-group-prepend">
                                            <button type="button" tabindex="-1" data-input-target="#password" class="input-group-text toggle-password"></button>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>
                                </div>
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            </form>
                            <div class="mt-3 d-flex justify-content-between option-auth">
                                <div>
                                    <span>Chưa có tài khoản?</span>
                                    <a class="text-primary font-weight-bold" href="/bs/signup">
                                        Đăng ký ngay
                                    </a>
                                </div>
                                <a class="text-primary font-weight-bold" href="">
                                    Quên mật khẩu?
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

</html>
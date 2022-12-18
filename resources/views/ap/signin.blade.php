<html>
<title>Đăng nhập tài khoản Online - EZCV</title>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
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
</head>
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

    .btn-facebook {
        background-color: #365899 !important;
        border-top: 1px solid #365899 !important;
        border-left: 1px solid #365899 !important;
        border-right: 1px solid #365899 !important;
        border-bottom: 1px solid #365899 !important;
    }

    .btn-facebook:hover {
        background-color: #3f67b3 !important;
        border-top: 1px solid #3f67b3 !important;
        border-left: 1px solid #3f67b3 !important;
        border-right: 1px solid #3f67b3 !important;
        border-bottom: 1px solid #3f67b3 !important;
    }

    .btn-google {
        background-color: #ea4335 !important;
        border-top: 1px solid #ea4335 !important;
        border-left: 1px solid #ea4335 !important;
        border-right: 1px solid #ea4335 !important;
        border-bottom: 1px solid #ea4335 !important;
    }

    .btn-google:hover {
        background-color: #ff5446 !important;
        border-top: 1px solid #ff5446 !important;
        border-left: 1px solid #ff5446 !important;
        border-right: 1px solid #ff5446 !important;
        border-bottom: 1px solid #ff5446 !important;
    }

    .btn-twitter {
        background-color: #1da1f2 !important;
        border-top: 1px solid #1da1f2 !important;
        border-left: 1px solid #1da1f2 !important;
        border-right: 1px solid #1da1f2 !important;
        border-bottom: 1px solid #1da1f2 !important;
    }

    .btn-twitter:hover {
        background-color: #2eacf9 !important;
        border-top: 1px solid #2eacf9 !important;
        border-left: 1px solid #2eacf9 !important;
        border-right: 1px solid #2eacf9 !important;
        border-bottom: 1px solid #2eacf9 !important;
    }

    .btn-github {
        background-color: #24292f !important;
        border-top: 1px solid #24292f !important;
        border-left: 1px solid #24292f !important;
        border-right: 1px solid #24292f !important;
        border-bottom: 1px solid #24292f !important;
    }

    .btn-github:hover {
        background-color: #343c44 !important;
        border-top: 1px solid #343c44 !important;
        border-left: 1px solid #343c44 !important;
        border-right: 1px solid #343c44 !important;
        border-bottom: 1px solid #343c44 !important;
    }

    .text-primary {
        color: #df3e39 !important;
    }

    h1 {
        font-size: 65px !important;
    }

    #form-login .btn-primary:hover {
        background-color: #00c558 !important;
        border-top: 1px solid #00c558 !important;
        border-left: 1px solid #00c558 !important;
        border-right: 1px solid #00c558 !important;
        border-bottom: 1px solid #00c558 !important;
        /* transition: background-color 0.5s ; */
    }
    .preloading {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ffffff url(../img/preloading.gif) no-repeat center center !important;
    background-size: 15% !important;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<!-- Section: Design Block -->

<body>
    <div class="preloading">
    </div>
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-lg-start" style="background-color: hsl(0, 0%, 97%); height: 100vh;">
            <div class="container">
                <div class="row gx-lg-5 align-items-center" style="margin-top: 5%;">
                    <div class="col-lg-6 mb-5 mb-lg-0">

                        <div class="logo">
                            <a href="/">
                                <img src="/img/horizontal_on_white_by_logaster-removebg-preview.png" width="150px"
                                    height="auto">
                            </a>
                        </div>

                        <h1 class="my-5 display-3 fw-bold ls-tight">
                            Chào mừng bạn đến với
                            <span class="text-primary" style="font-size: 85px; font-weight: normal;">EZCV</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Bạn muốn tìm việc làm, bạn muốn tuyển dụng ? Hãy đến với chúng tôi, EZCV hân hạnh được tài
                            trợ
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form action="signin" method="POST" id="form-login">
                                    <input type="hidden" name="_token"
                                        value="hNrWUqkhUTLsyWQw3JEhCWLAwakXf2qoocyrRSuc">
                                    <div class="form-group mb-3">
                                        <label for="email" class="mb-1">Email</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fa-solid fa-envelope"></i></span>
                                            </div>
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Nhập email của bạn" aria-label="Nhập email của bạn"
                                                value="">
                                        </div>
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password" class="mb-1">Password</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                                            </div>
                                            <input type="password" id="password" name="password"
                                                class="form-control" placeholder="Nhập mật khẩu"
                                                aria-label="Nhập mật khẩu">
                                            <!-- <div class="input-group-prepend">
                                            <button type="button" tabindex="-1" data-input-target="#password" class="input-group-text toggle-password"></button>
                                        </div> -->
                                        </div>
                                        @error('password')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary btn-block mb-4">Đăng
                                            nhập</button>
                                        <!-- <p class="or text-center mb-0 fz-12px">Hoặc</p> -->
                                    </div>
                                    @if (session('msg'))
                                        <div class="alert alert-danger">{{ session('msg') }}</div>
                                    @endif

                                    @csrf

                                </form>

                                <br>

                                <div class="mt-3 d-flex justify-content-between option-auth">
                                    <div>
                                        <span>Bạn chưa có tài khoản?</span>
                                        <a class="text-success font-weight-bold" href="signup">
                                            Đăng ký ngay
                                        </a>
                                    </div>
                                    <a class="text-success font-weight-bold" href="forgotpassword.php">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ url('js/app.js') }}"></script>
</body>

</html>

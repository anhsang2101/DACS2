<html>
<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/bs"><img class="logo" style="background-image:none"
            src="{{ url('img/logo-business.png') }}"
            title="TopCV tuyển dụng tại TopCV" alt="TopCV tuyển dụng tại TopCV"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/bs">Trang chủ<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tuyển dụng
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/bs/create-new-job">Đăng tin tuyển dụng</a>
                    <a class="dropdown-item" href="/bs/manage-recruitment">Quản tí tin tuyển dụng</a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/ap">Version for applicants</a>
            </li>
        </ul>

        <ul class="nav_menu_right">
            @if (session()->has('nameSessionBs'))
                <li>
                    <div class="alert alert-info" role="alert">
                        Xin chào: {{ Session::get('nameSessionBs') }}
                    </div>
                </li>
                <li>
                    <a class="dangxuat" href="/bs/signout" >Đăng Xuất
                    </a>
                </li>
            @else
                <li><a class="dangnhap" style="color: #df3e39;" href="/bs/signin">
                        Đăng nhập
                    </a></li>
                <li> <a class="dangky" style="color: #ffff;"href="/bs/signup">
                        Đăng ký
                    </a></li>
            @endif
        </ul>

    </div>
</nav>

</html>

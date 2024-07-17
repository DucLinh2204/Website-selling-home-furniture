<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="{{ asset('images/Logo2.png') }}">


    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Fantastic Home Decor </title>
    <style>
        .navbar-nav .nav-link {
            font-size: 1rem;
        }

        .nav-link.active {
            color: #03989E !important;
        }
    </style>
</head>

<body  ng-app="tcApp" ng-controller="tcCtrl">

    <!-- Start Header/Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mx-3" href="/">
                <img src="{{ asset('images/1logo.png') }}" alt="Logo" height="60%" width="80%">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-1 text-lg">
                    <li class="nav-item">
                        <a class="nav-link{{ Request::is('/') ? ' active' : '' }}" href="/">Trang Chủ</a>
                    </li>
                    <li class="nav-item dropdown" id="shopDropdown">
                        <a class="nav-link{{ Request::is('shop/*') ? ' active' : '' }}" href="/shop/0"
                            id="navbarDropdown" role="button" aria-expanded="false">Cửa Hàng</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $dm)
                                <li><a class="dropdown-item{{ Request::is('shop/' . $dm->id) ? ' active' : '' }}"
                                        href="/shop/{{ $dm->id }}">{{ $dm->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::is('about') ? ' active' : '' }}" href="/about">Về Chúng Tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::is('services') ? ' active' : '' }}" href="/services">Dịch Vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ Request::is('contact') ? ' active' : '' }}" href="/contact">Liên Hệ</a>
                    </li>
                </ul>


            </div>
            <div class="d-flex align-items-center ms-auto">
                <div class="dropdown" style="height: 50px;">
                    <button class="btn d-flex align-items-center " type="button" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        <i class="fa-regular fa-circle-user icon-large" style="color: #03989E"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end btn btn-outline-light">
                        @if (!Auth::check())
                                @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                            <a href="{{ url('/') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Home
                                            </a>
                                        @else
                                            <a class="text-decoration-none" href="{{ route('login') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Đăng nhập
                                            </a> <br>

                                            @if (Route::has('register'))
                                                <a class="text-decoration-none" href="{{ route('register') }}"
                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                    Đăng ký
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                        @else
                                <li class="nav-item">
                                    <a class="dd-menu collapsed text-decoration-none" href="" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Xin chào,
                                        {{ Auth::user()->name }}</a>
                                </li>
                                @if (Auth::user()->role === 'admin')
                                    <li class="nav-item">
                                        <a class="text-decoration-none" href="{{ route('admin.dashboard') }}">Trang quản lí</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="text-decoration-none"{{--  href="{{ route('profile') }}" --}}>Trang hồ sơ</a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a class="text-decoration-none" href="{{ route('logout') }}">Đăng xuất</a>
                                </li>
                        @endif

                    </ul>
                </div>
                <form class="d-flex search-header align-items-center" role="search" style="height: 100%;">
                    <div class="input-group me-3" style="height: 50px;">
                        <input class="form-control" type="search" placeholder="Tìm Kiếm" aria-label="Search">
                        <button class="search  d-flex align-items-center" type="submit">
                            <i class="fa-solid fa-magnifying-glass me-2"></i>
                        </button>
                    </div>
                </form>
                <div class="cart" style="height: 50px;">
                    <a class="btn d-flex align-items-center" href="/cart">
                        <i class="fa-solid fa-cart-shopping icon-large" style="color: #03989E"></i>
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- End Header/Navigation -->

    <div ng-controller="viewCtrl">
        @yield('body')
    </div>

    <!-- Start Footer Section -->
    <footer class="footer-section bg-light">
        <div class="container relative">

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap">
                        <a class="navbar-brand mx-3" href="/">
                            <img src="{{ asset('images/1logo.png') }}" alt="Logo" height="30%"
                                width="50%">
                        </a>
                    </div>
                    <p class="mb-4">Fantastic Home Decor chuyên cung cấp các sản phẩm trang trí nội thất. Các sản
                        phẩm này không chỉ mang tính thẩm mỹ cao mà còn đa dạng về kiểu dáng, chất liệu, và phong cách,
                        giúp bạn dễ dàng lựa chọn để phù hợp với không gian sống của mình.</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-4">
                            <ul class="list-unstyled">
                                <li>
                                    <h5 class="text-dark">Fantastic Home Decor</h5>
                                </li>
                                <li><a href="/shop/{id}">Sản Phẩm</a></li>
                                <li><a href="/about">Về Chúng Tôi</a></li>
                                <li><a href="/services">Dịch Vụ</a></li>
                                <li><a href="/blog">Bài Viết</a></li>
                                <li><a href="/contact">Liên Hệ</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-4">
                            <ul class="list-unstyled">
                                <li>
                                    <h5 class="text-dark">Dịch Vụ</h5>
                                </li>
                                <li><a href="#">Chính Sách Bán Hàng</a></li>
                                <li><a href="#">Chính Sách Giao Hàng & Lắp Đặt</a></li>
                                <li><a href="#">Chính Sách Đổi Trả</a></li>
                                <li><a href="#">Chính Sách Bảo Hành & Bảo Trì</a></li>
                                <li><a href="#">Chính Sách Đối Tác Bán Hàng</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-4">
                            <ul class="list-unstyled">
                                <li>
                                    <h5 class="text-dark">Thông Tin Liên Hệ</h5>
                                </li>
                                <li><i class="fa-solid fa-location-dot fa-lg mx-1"></i><strong>Địa Chỉ: </strong>
                                    <p>Công Viên Phần Mềm Quang Trung, Tân Chánh Hiệp, Quận 12, Thành phố Hồ Chí Minh,
                                        Việt Nam</p>
                                </li>
                                <li><i class="fa-solid fa-phone fa-lg mx-1"></i><strong>Điện Thoại: </strong>
                                    <p>(84+) 0343840770</p>
                                </li>
                                <li><i class="fa-regular fa-envelope fa-lg mx-1"></i><strong>Gmail: </strong>
                                    <p>linhvdps29393@fpt.edu.vn</p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Bản Quyền Của Fantastic Home Decor
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Điều khoản &amp; Điều kiện</a></li>
                            <li><a href="#">Chính sách bảo mật</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->

    <script src="https://kit.fontawesome.com/592deca63b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/angular.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        document.getElementById('shopDropdown').addEventListener('mouseenter', function() {
            this.querySelector('.dropdown-menu').classList.add('show');
        });

        document.getElementById('shopDropdown').addEventListener('mouseleave', function() {
            this.querySelector('.dropdown-menu').classList.remove('show');
        });

        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);

        window.onload = function () {
        window.setTimeout(fadeout, 500);
        }

        function fadeout() {
        document.querySelector('.preloader').style.opacity = '0';
        document.querySelector('.preloader').style.display = 'none';
        }
    </script>
      <script>
        var app = angular.module('tcApp',[]);

      </script>
        @yield('viewFunction')
      <script>
        app.controller('viewCtrl', viewFunction);
      </script>
</body>

</html>

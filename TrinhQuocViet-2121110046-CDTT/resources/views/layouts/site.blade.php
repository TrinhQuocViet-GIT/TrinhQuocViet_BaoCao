<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ @asset('fontawesome/css/all.min.css') }}>
    <link rel="stylesheet" href={{ @asset('bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ @asset('css/layoutsite.css') }}>
    <link rel="stylesheet" href={{ @asset('css/mainmenu.css') }}>
    <link rel="stylesheet" href={{ @asset('css/xo.css') }}>
    <link rel="stylesheet" href={{ @asset('css/my-button.css') }}>
    <link rel="stylesheet" href={{ @asset('css/addcart.css') }}>
    <link rel="stylesheet" href={{ @asset('css/search.css') }}>
    <link rel="stylesheet" href={{ @asset('css/fullbackground.css') }}>
    <link rel="stylesheet" href={{ @asset('plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ @asset('dist/css/adminlte.min.css') }}>

    @yield('header')
</head>

<body>
    <section class="topbar" id="fullbackground">
        {{-- LOGO --}}
        <div class="container">

        </div>
    </section>
    <section class="header">
        <div class="container">
            <div class="container" id="fullbackground">
                <div class="row container" id="fullbackground">
                    <div class="col-md-2 container" id="fullbackground">
                        <x-logo-page />
                    </div>
                    <div class="col-md-2" id="fullbackground">
                    </div>
                    {{-- SEARCH --}}
                    <div class="col-md-4" id="fullbackground">
                        <x-contact-page />
                    </div>
                    <div class="col-md-3" id="fullbackground">
                        <div class="row-md-8 container">
                            <i>
                                <p style="font-size:13px">Bạn muốn tìm kiếm?</p>
                            </i>
                        </div>
                        <div class="row-md-4 container" id="container">
                            <input type="text" name="text" class="input" placeholder="Nhập từ khóa tìm kiếm..">
                            <button class="search__btn">
                                <i class="fas fa-search" style="color: #a0a0a0;"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-1 container" id="fullbackground">
                        <div class="loader">
                            <div class="loader-square"></div>
                            <div class="loader-square"></div>
                            <div class="loader-square"></div>
                            <div class="loader-square"></div>
                            <div class="loader-square"></div>
                            <div class="loader-square"></div>
                            <div class="loader-square"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="mainmenu ">
        <div class="container">
            <div class="container" id="fullbackground">
                <ul class="navbar-nav ml-auto">
                    <!-- MAIN MENU -->
                    <x-main-menu />
                </ul>
            </div>
        </div>
    </section>
    <section class="slide">
        <div class="container">
            <div class="slider">
                <x-slide-show />
            </div>
        </div>
    </section>
    <section class="maincontent">
        <div class="container">
            <div class="container " id="fullbackground"><br></div>
        </div>
        @yield('content')
    </section>
    <section class="product">
        <div class="container">
            @foreach ($list_category as $cat)
                <x-product-home :cat='$cat' />
            @endforeach
        </div>
    </section>
    <section class="footer">
        <div class="container ">
            <div class="container  bg-dark text-white py-4">
                <div class="row">
                    <h3 class="text-center text-light">Viet Loot Nuoc Hoa Mall</h3>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <x-topic-page />
                    </div>
                    <div class="col-md-4">
                        <h3 class="fs-6">BÀI VIẾT MỚI</h3>
                        <a>
                            <x-post-page />

                        </a>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row"></div>
                <div class="row"></div>
            </div>
        </div>
    </section>
    <section class="copyright">

        <div class="container">
            <div class="container bg-dark text-white" id="fullbackground">
                <p style="font-size: 12px">@BẢN QUYỀN thuộc về Viet Loot Nuoc Hoa Mall
                </p>
            </div>
        </div>
    </section>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                dost: false,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        // nav: true
                    },
                    600: {
                        items: 3,
                        // nav: false
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script> --}}
    @yield('footer')
    </section>
</body>

</html>

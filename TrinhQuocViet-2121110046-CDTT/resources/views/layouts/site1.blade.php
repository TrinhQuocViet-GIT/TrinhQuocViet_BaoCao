<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viet Loot Nuoc Hoa Mall</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href={{ @asset('css/mycss.css') }}>
    <link rel="stylesheet" href={{ @asset('css/test.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>@yield('title')</title>
    @yield('header')
</head>

<body>
    <section id="myheader" class="myheader bg-dark clearfix">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="col-2 bg-dark">
                        <a class="navbar-brand" href="#">
                            <img src="{{ @asset('image/logo/Vietloot.png') }}" alt="Logo" width="150">
                        </a>
                    </div>
                    <div class="col-3 bg-dark">
                        ???
                    </div>
                    <div class="col-3 bg-dark">
                        <div class="container-input">
                            <input type="text" placeholder="Tìm kiếm" name="text" class="input">
                            <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="col-4 bg-dark">
                        <div class="navbar-collapse collapse" id="navbarNav">
                            <div class="navbar-nav ml-auto">
                                <div class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-heart"></i> Yêu thích</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section id="menu" class="mymenu bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nước hoa nam
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nước hoa mạnh mẽ</a>
                                <a class="dropdown-item" href="#">Nước hoa quý tộc</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nước hoa nữ
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Nước hoa dịu dàng</a>
                                <a class="dropdown-item" href="#">Nước hoa bad girl</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <section id="slide">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
            data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ @asset('image/slide/slide1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ @asset('image/slide/slide2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ @asset('image/slide/slide3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section id="product-hot" class="bg-white">
        <div class="container py-2">
            <h5>SẢN PHẨM BÁN CHẠY</h5>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="product-link">
                        <div class="card">
                            <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Sản phẩm 1</h5>
                                <p class="card-text">Giá: <del>$100</del> $75</p>
                                <div class="product-buttons">
                                    <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                            class="fas fa-cart-plus"></i></button>
                                    <button class="btn btn-danger btn-favorite">Yêu thích <i
                                            class="fas fa-heart"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 2</h5>
                            <p class="card-text">Giá: <del>$100</del> $75</p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích <i
                                        class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: <del>$100</del> $75</p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: <del>$100</del> $75</p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích <i
                                        class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thêm các sản phẩm khác tương tự ở đây -->
            </div>
            <div class="row py-3">
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: <del>$100</del> $75 </p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích <i
                                        class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: <del>$100</del> $75</p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích <i
                                        class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: <del>$100</del> $75 </p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích <i
                                        class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" alt="Sản phẩm 1" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Giá: <del>$100</del> $75 </p>
                            <div class="product-buttons">
                                <button class="btn btn-success btn-cart">Thêm vào giỏ hàng <i
                                        class="fas fa-cart-plus"></i></button>
                                <button class="btn btn-danger btn-favorite">Yêu thích <i
                                        class="fas fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Thêm các sản phẩm khác tương tự ở đây -->
            </div>
        </div>
    </section>
    <section id="footer" class=" ">
        <footer class="bg-light py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h4><strong>CAM KẾT CỦA CHÚNG TÔI</strong></h4>
                        <p>Chúng tôi cam kết cung cấp các sản phẩm nước hoa chất lượng cao với giá cả hợp lý. Hài lòng
                            của khách hàng luôn là ưu tiên hàng đầu của chúng tôi.</p>
                        <img src="https://via.placeholder.com/150" alt="Cam kết hình ảnh" class="img-fluid mt-3">
                    </div>
                    <div class="col-md-5">
                        <h4><strong>CHÍNH SÁCH NGƯỜI DÙNG</strong></h4>
                        <ul>
                            <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Điều khoản và điều kiện</a></li>
                            <li><a href="#">Quyền và trách nhiệm</a></li>
                        </ul>
                        <img src="https://via.placeholder.com/150" alt="Chính sách hình ảnh" class="img-fluid mt-3">
                    </div>
                    <p><br></p>
                    <hr> <!-- Dòng gạch ngang -->
                    <div class="copyright">
                        <strong>
                            &copy; 2023 VIETLOOT. Tất cả các quyền đã được bảo lưu.
                        </strong>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        // Lấy carousel element
        var carousel = document.getElementById('carouselExampleControlsNoTouching');
        // Kích hoạt carousel
        var carouselInstance = new bootstrap.Carousel(carousel, {
            interval: 3000 // Thời gian (miligiây) giữa các slide
        });
    </script>
</body>

</html>

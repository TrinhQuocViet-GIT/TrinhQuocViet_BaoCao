<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/adminlogin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <style>
        .khung {
            border-radius: 10px;
            background: #f7f7f7;
            box-shadow: 5px 5px 10px #858585,
                -5px -5px 10px #ffffff;
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 10px;
        }
    </style> --}}
</head>

<body>
    {{-- <form action="{{ route('admin.postlogin') }}" method="post">
        @csrf
        <div class="khung ">
            <h2 class="text-center">ĐĂNG NHẬP</h2>
            <div class=" mt-3">
                <label for="username"><strong>Tên Đăng Nhập:</strong></label>
                <input type="text" class="form-control" name="username" id="username"
                    placeholder="Tên đăng nhập hoặc email">
            </div>
            <div class=" mt-3">
                <label for="username"><strong>Mật Khẩu:</strong></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div>
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Nhớ Mật Khẩu
                </label>
            </div>
            <div class=" mt-3 text-center">
                <input class="btn btn-success form-control" name="Login" type="submit" value="Đăng Nhập">
            </div>
            <div class=" mt-3 text-center">
                @isset($error)
                    <div class="text-danger">{{ $error }}</div>
                @endisset
            </div>

        </div>
    </form> --}}
    <form action="{{ route('admin.postlogin') }}" method="post" class="form">
        @csrf
        <div class="title">Chào mừng bạn,<br><span>Đăng nhập để tiếp tục</span></div>
        <div class="text-center"><input type="text" placeholder="Tên đăng nhập hoặc email" name="username"
                id="username" for="username" class="input"></div>
        <div class="text-center"> <input type="password" for="username" placeholder="Mật khẩu" name="password"
                id="password" class="input">

        </div>
        <div class="error">
            @isset($error)
                <div class="text-danger"><span>{{ $error }}</span></div>
            @endisset
        </div>
        <button class="button-confirm">Đăng nhập→</button>
    </form>

</body>

</html>

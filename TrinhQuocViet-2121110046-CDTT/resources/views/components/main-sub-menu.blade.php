<style>
    /* Màu chữ khi chưa hover */
    .nav-item.dropdown a.nav-link {
        color: #474646;
        font-size: 18px;
        font-weight: bold;
        transition: color 0.3s;

    }

    /* Màu chữ khi hover */
    .nav-item.dropdown a.nav-link:hover {
        color: #000;
    }

    /* Điều chỉnh margin và padding cho đối tượng <ul> */
    .nav-item.dropdown ul {
        margin: 0;
        /* Loại bỏ margin mặc định */
        padding: 0;
        /* Loại bỏ padding mặc định */
    }

    /* Điều chỉnh margin cho đối tượng <li> bên trong <ul> */
    .nav-item.dropdown li {
        margin-bottom: 5px;
        /* Điều chỉnh khoảng cách giữa các mục danh sách */
    }
</style>

@if (count($menus) > 0)
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ $menurow->link }}" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{ $menurow->name }}
        </a>

        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($menus as $menu)
                <li><a class="dropdown-item" href="{{ $menu->name }}">{{ $menu->name }}</a></li>
            @endforeach
        </ul>
    </li>
@else
    <li class="nav-item dropdown">
        <ul style="list-style:none;">
            <li><a class="nav-link active" aria-current="page" href="{{ $menurow->link }}">{{ $menurow->name }}</a></li>
        </ul>
    </li>
@endif

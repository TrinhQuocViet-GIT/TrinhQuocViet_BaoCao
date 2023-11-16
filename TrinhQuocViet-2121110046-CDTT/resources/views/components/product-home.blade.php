<div class="container" id="fullbackground">
    <hr> <!-- Dòng gạch ngang -->
    <div class="title_hot mb-3"><a class="nav-link" href="">
            <h4 class="text-dark text-center fw-bold text-uppercase">{{ $category->name }}</h4>
        </a></div>

    <div class="row row-cols-1 row-cols-md-3 g-4 py-3">
        @foreach ($list_product as $productitem)
            <x-product-item :productitem="$productitem" />
        @endforeach

    </div>
    <div class="all_tag_hot_product ">
        <a class="nav-link" href="">
        </a>
    </div>
</div>

<div class="col">
    <div class="card h-100 card_main">
        <div class="card_item"></div>
        <a class="nav-link" href="?option=product&slug=">
            <div class="card"><img style="w-100" src="{{ asset('image/product/' . $product->image) }}"
                    class="card-img-top img-fluid" alt="...">
            </div>
            <div class="card-body ">
                <h5 class="card-title"></h5>
                <div class="card_tm font-weight-bold "><a class="nav-link text-center"
                        href="">{{ $product->name }}</a></div>
                <div class="card_price">
                    <div class="row">
                        <div class="col">
                            <div class="card_price_after_sale text-decoration-line-through text-center">
                                {{ $product->price }}0.000₫
                            </div>
                        </div>
                        <div class="col">
                            <div class="card_price_sale px-1 text-danger text-center">
                                <strong>{{ $product->price_sale }}0.000₫</strong>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a><br></a>
                        <!-- Thêm vào giỏ hàng -->
                        <button class="my-button btn btn-success btn-block">
                            <div>
                                <span>
                                    <p>Thêm vào giỏ hàng <i class="fas fa-cart-plus"></i>~</p>

                                </span>
                            </div>
                        </button>

                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

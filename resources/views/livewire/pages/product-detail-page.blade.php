<div>
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            @foreach($this->images as $image)
                                <li class="nav-item"
                                    wire:key="image_{{ $image->id }}">
                                    <a @class(['nav-link', 'active' => $loop->first]) data-toggle="tab"
                                       href="#image_{{ $image->id }}"
                                       role="tab">
                                        <div class="product__thumb__pic set-bg"
                                             style="background-image: url({{ $image->getUrl('carousel-thumbnail') }})"></div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            @foreach($this->images as $image)
                                <div @class(['tab-pane', 'active' => $loop->first]) id="image_{{ $image->id }}"
                                     role="tabpanel">
                                    <div class="product__details__pic__item">
                                        <img src="{{ $image->getUrl('product-detail') }}"
                                             alt="{{ $this->product->translateAttribute('name') }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>
                                {{ $this->product->translateAttribute('name') }}
                            </h4>
                            {{--                            <div class="rating">--}}
                            {{--                                <i class="fa fa-star"></i>--}}
                            {{--                                <i class="fa fa-star"></i>--}}
                            {{--                                <i class="fa fa-star"></i>--}}
                            {{--                                <i class="fa fa-star"></i>--}}
                            {{--                                <i class="fa fa-star-o"></i>--}}
                            {{--                                <span> - 5 Reviews</span>--}}
                            {{--                            </div>--}}
                            <h3>
                                {{--                                $270.00 <span>70.00</span>--}}
                                <x-product-price :variant="$this->variant"/>
                            </h3>
                            {!! $this->product->translateAttribute('description') !!}
{{--                            <div class="product__details__option">--}}
{{--                                <div class="product__details__option__size">--}}
{{--                                    <span>Size:</span>--}}
{{--                                    <label for="xxl">xxl--}}
{{--                                        <input type="radio" id="xxl">--}}
{{--                                    </label>--}}
{{--                                    <label class="active" for="xl">xl--}}
{{--                                        <input type="radio" id="xl">--}}
{{--                                    </label>--}}
{{--                                    <label for="l">l--}}
{{--                                        <input type="radio" id="l">--}}
{{--                                    </label>--}}
{{--                                    <label for="sm">s--}}
{{--                                        <input type="radio" id="sm">--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                                <div class="product__details__option__color">--}}
{{--                                    <span>Color:</span>--}}
{{--                                    <label class="c-1" for="sp-1">--}}
{{--                                        <input type="radio" id="sp-1">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-2" for="sp-2">--}}
{{--                                        <input type="radio" id="sp-2">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-3" for="sp-3">--}}
{{--                                        <input type="radio" id="sp-3">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-4" for="sp-4">--}}
{{--                                        <input type="radio" id="sp-4">--}}
{{--                                    </label>--}}
{{--                                    <label class="c-9" for="sp-9">--}}
{{--                                        <input type="radio" id="sp-9">--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="product__details__cart__option">
                                <hr>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" name="">
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">
                                    add to cart
                                </a>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#">
                                    <i class="fa fa-heart"></i> add to wishlist
                                </a>
{{--                                <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>--}}
                            </div>
                            <div class="product__details__last__option">
{{--                                <h5><span>Guaranteed Safe Checkout</span></h5>--}}
{{--                                <img src="img/shop-details/details-payment.png" alt="">--}}
                                <ul>
                                    <li>
                                        <span>SKU:</span> {{ $this->variant->sku }}
                                    </li>
{{--                                    <li>--}}
{{--                                        <span>Categories:</span> Clothes--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <span>Tag:</span> Clothes, Skin, Body--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                       role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                        Previews(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                        information</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                            pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                                a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                                $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                                worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                                a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                                $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                                worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                            solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                            ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                            pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                                a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                                $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                                worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@props(['product'])

@isset($product)
    <div @class(['product__item', 'sale'])>
        <div class="product__item__pic set-bg"
             style="background-image: url({{ $product->thumbnail?->getUrl('product-thumbnail') }})">
            {{--        <span class="label">Sale</span>--}}
            <ul class="product__hover">
                <li>
                    <img src="{{ asset('img/icon/heart.png') }}" alt=""> <span>Wishlist</span>
                </li>
                {{--            <li>--}}
                {{--                <a href="#">--}}
                {{--                    <img src="img/icon/compare.png" alt=""> <span>Compare</span>--}}
                {{--                </a>--}}
                {{--            </li>--}}
                {{--            <li>--}}
                {{--                <a href="#">--}}
                {{--                    <img src="img/icon/search.png" alt="">--}}
                {{--                </a>--}}
                {{--            </li>--}}
            </ul>
        </div>
        <div class="product__item__text">
            <h6 style="height: 36px;">
                {{ $product->translateAttribute('name') }}
            </h6>
            {{--        <div class="rating">--}}
            {{--            <i class="fa fa-star"></i>--}}
            {{--            <i class="fa fa-star"></i>--}}
            {{--            <i class="fa fa-star"></i>--}}
            {{--            <i class="fa fa-star"></i>--}}
            {{--            <i class="fa fa-star-o"></i>--}}
            {{--        </div>--}}
            <h5>
                <x-product-price :product="$product"/>
            </h5>
            {{--        <div class="product__color__select">--}}
            {{--            <label for="pc-7">--}}
            {{--                <input type="radio" id="pc-7">--}}
            {{--            </label>--}}
            {{--            <label class="active black" for="pc-8">--}}
            {{--                <input type="radio" id="pc-8">--}}
            {{--            </label>--}}
            {{--            <label class="grey" for="pc-9">--}}
            {{--                <input type="radio" id="pc-9">--}}
            {{--            </label>--}}
            {{--        </div>--}}
        </div>
    </div>
@else
    <div @class(['product__item', 'placeholder-glow'])>
        <div class="product__item__pic">
            <div class="ratio ratio-1x1">
                <div class="placeholder"></div>
            </div>
        </div>
        <div class="product__item__text">
            <h6>
                <span class="placeholder col-10"></span>
                <span class="placeholder col-3"></span>
            </h6>
            <h5>
                <span class="placeholder placeholder-lg col-6"></span>
            </h5>
        </div>
    </div>
@endisset

<div>
    <div wire:init="loadProducts">
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <a href="{{ $product->defaultUrl->slug }}">
                        <x-product-item :product="$product"/>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="shop__product__option">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    @if($products)
                        <div class="shop__product__option__left">
                            <p>
                                Showing {{ $products->firstItem() }}–{{ $products->lastItem() }}
                                of {{ $products->total() }} results
                            </p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    @if($products && $products->hasPages())
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div wire:loading.class="d-flex"
         wire:loading.class.remove="d-none"
         class="d-none"
         style="position: absolute; top: 0;left: 0;width: 100%;height: 100%;align-items: center;justify-content: center;background-color:rgba(255, 255, 255, .7);">
        <div>
            <i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i>
            Loading...
        </div>
    </div>
</div>

<div wire:init="loadProducts">
    <div wire:loading.block>
        <div class="row">
            @foreach(range(1, 3) as $product)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <x-product-item/>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row" wire:loading.remove>
        @foreach($products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <a href="{{ route('products.show', $product->defaultUrl->slug) }}">
                    <x-product-item :product="$product"/>
                </a>
            </div>
        @endforeach
    </div>
    @if($products && $products->hasPages())
        <div class="shop__product__option">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="shop__product__option__left">
                        <p>
                            Showing {{ $products->firstItem() }}–{{ $products->lastItem() }}
                            of {{ $products->total() }} results
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 text-end">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    @endif
</div>

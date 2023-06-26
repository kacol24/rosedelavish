<div>
    <div class="row">
        @foreach($this->products as $product)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <a href="{{ $product->defaultUrl->slug }}">
                    <x-product-item :product="$product"/>
                </a>
            </div>
        @endforeach
    </div>
</div>

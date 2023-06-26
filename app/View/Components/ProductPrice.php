<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Lunar\Facades\Pricing;
use Lunar\Models\Price;
use Lunar\Models\ProductVariant;

class ProductPrice extends Component
{
    public ?Price $price = null;

    public ?ProductVariant $variant = null;

    /**
     * Create a new component instance.
     */
    public function __construct($product = null, $variant = null)
    {
        $this->price = Pricing::for(
            $variant ?: $product->variants->first()
        )->get()->matched;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-price');
    }
}

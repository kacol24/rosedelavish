<?php

namespace App\Http\Livewire\Components;

use App\Constants\ProductStatus;
use Livewire\Component;
use Lunar\Models\Product;

class Catalog extends Component
{
    public function getProductsProperty()
    {
        return Product::query()
                      ->status(ProductStatus::STATUS_PUBLISHED)
                      ->get();
    }

    public function render()
    {
        return view('livewire.components.catalog');
    }
}

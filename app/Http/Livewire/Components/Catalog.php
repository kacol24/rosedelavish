<?php

namespace App\Http\Livewire\Components;

use App\Constants\ProductStatus;
use Livewire\Component;
use Lunar\Models\Product;

class Catalog extends Component
{
    protected $products = [];

    public $readyToLoad = false;

    public function loadProducts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.components.catalog', [
            'products' => $this->readyToLoad
                ? Product::query()
                         ->status(ProductStatus::STATUS_PUBLISHED)
                         ->paginate(12)
                : [],
        ]);
    }
}

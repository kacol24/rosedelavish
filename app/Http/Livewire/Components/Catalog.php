<?php

namespace App\Http\Livewire\Components;

use App\Constants\ProductStatus;
use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;

class Catalog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

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
                         ->paginate(1)
                : [],
        ]);
    }
}

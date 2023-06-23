<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use Lunar\Facades\CartSession;

class Header extends Component
{
    public $storeNotice = 'Free shipping, 30-day return or refund guarantee.';

    /**
     * Get the current cart instance.
     *
     * @return \Lunar\Managers\CartSessionManager
     */
    public function getCartProperty()
    {
        return CartSession::current();
    }

    public function render()
    {
        return view('livewire.site.header');
    }
}

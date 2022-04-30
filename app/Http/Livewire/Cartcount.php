<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCount extends Component
{

    protected $listeners = ['some-event' => '$refresh'];
    
    public function render()
    {
        $cart = session()->get('cart', []);
        return view('livewire.cart-count');
    }
}
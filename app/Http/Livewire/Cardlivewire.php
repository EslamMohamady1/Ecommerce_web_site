<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Cardlivewire extends Component
{
    public $qty;
    public $prod_id;
    public $user_id;
    public function addtocart()
    {
        $cart = new Cart();
        $cart->prod_qty = $this->qty;
        $cart->prod_id = $this->prod_id;
        $cart->user_id = 5;
        $cart->save();
        $this->reset();
    }
    public function render()
    {
        return view('livewire.cardlivewire');
    }
}

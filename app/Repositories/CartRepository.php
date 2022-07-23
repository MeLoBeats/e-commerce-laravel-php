<?php

namespace App\Repositories;

use App\Models\Product;

class CartRepository
{
    public function add(Product $product)
    {
        $userId = auth()->user()->userId;
        \Cart::session('');
    }
    public function content()
    {
    }
    public function count()
    {
    }
}

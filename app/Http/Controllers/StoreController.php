<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    //Index for store
    public function Index() {
        return view('store.store');
    }

    //Get Products
    public function products() {
        $product = new Product();
        $product = $product->get();
        return $product;
    }
}

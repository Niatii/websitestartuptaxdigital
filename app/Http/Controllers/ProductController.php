<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        $data = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Smartphone'],
            ['id' => 3, 'produk' => 'Tablet'],
        ];

        return view('list_product', compact('data'));
    }
}

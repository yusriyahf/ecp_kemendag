<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(): string
    {
        return view('landing/product_category');
    }

    public function detail($id = null)
    {
        // Ambil data produk
        return view('landing/product_detail', [
            // 'title' => 'Detail Product',
            // 'productId' => $id
        ]);
    }
}

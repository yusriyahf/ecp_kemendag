<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\ProdukModel;

class Product extends BaseController
{
    protected $productModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->productModel = new ProdukModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index(): string
    {
        $data = [
            'products' => $this->productModel->findAll(),
            'categories' => $this->kategoriModel->findAll(),
            'latestProducts' => $this->productModel->orderBy('created_at', 'DESC')->limit(4)->findAll(),
            'totalProducts' => $this->productModel->countAllResults(false),
        ];

        return view('landing/product_category', $data);
    }

    public function detail($id = null)
    {
        // Ambil data produk berdasarkan id
        $product = $this->productModel->find($id);

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Product not found');
        }

        return view('landing/product_detail', [
            'product' => $product,
        ]);
    }
}

<?php

namespace App\Controllers;

use App\Models\EcpModel;
use App\Models\KategoriModel;
use App\Models\ProdukModel;

class Product extends BaseController
{
    protected $productModel;
    protected $kategoriModel;
    protected $ecpModel;

    public function __construct()
    {
        $this->productModel = new ProdukModel();
        $this->kategoriModel = new KategoriModel();
        $this->ecpModel = new EcpModel();
    }

    public function index(): string
    {
        $data = [
            'ecps' => $this->ecpModel->findAll(),
            'products' => $this->productModel->getAllproduct(),
            'categories' => $this->kategoriModel->findAll(),
            'latestProducts' => $this->productModel->orderBy('created_at', 'DESC')->limit(4)->findAll(),
            'totalProducts' => $this->productModel->countAllResults(false),
        ];

        return view('landing/product_category', $data);
    }

    public function category($slugKategori)
    {
        $kategori = $this->kategoriModel->getBySlug($slugKategori);

        if (!$kategori) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Category not found');
        }

        $products = $this->productModel->getProductsByCategorySlug($slugKategori);

        $ecps = $this->ecpModel->findAll();
        $latestProducts = $this->productModel->orderBy('created_at', 'DESC')->limit(4)->findAll();
        $totalProducts = $this->productModel->countAllResults(false);

        return view('landing/product_category', [
            'products' => $products,
            'kategori' => $kategori,
            'categories' => $this->kategoriModel->findAll(),
            'ecps' => $ecps,
            'latestProducts' => $latestProducts,
            'totalProducts' => $totalProducts,
        ]);
    }

    public function detail($slugKategori, $slugProduk)
    {
        $kategori = $this->kategoriModel->getBySlug($slugKategori);

        if (!$kategori) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Category not found');
        }

        $product = $this->productModel->getProductBySlugAndCategory($slugKategori, $slugProduk);

        if (!$product) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Product not found');
        }

        $relatedProducts = $this->productModel->getRelatedProducts($product['id_perusahaan'], $product['id_produk']);

        return view('landing/product_detail', [
            'product' => $product,
            'kategori' => $kategori,
            'categories' => $this->kategoriModel->findAll(),
            'relatedProducts' => $relatedProducts,
        ]);
    }
}

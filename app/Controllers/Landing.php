<?php

namespace App\Controllers;

use App\Models\EcpModel;
use App\Models\ProdukModel;
use App\Models\KategoriModel;
use App\Controllers\BaseController;

class Landing extends BaseController
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
            'products' => $this->productModel->getAllproduct(),
            'categories' => $this->kategoriModel->findAll(),

        ];
        return view('landing/home', $data);
    }

    public function about()
    {
        return view('landing/about', ['title' => 'About Us']);
    }
}

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
        $produkEcp1 = $this->productModel->getProdukByEcp(1);
        $produkEcp2 = $this->productModel->getProdukByEcp(2);
        $produkEcp3 = $this->productModel->getProdukByEcp(3);

        $data = [
            'products' => $this->productModel->getAllproduct(),
            'categories' => $this->kategoriModel->findAll(),

            'ecp1' => [
                'nama' => $produkEcp1[0]['nama_ecp'] ?? 'ECP 1',
                'produk' => $produkEcp1
            ],
            'ecp2' => [
                'nama' => $produkEcp2[0]['nama_ecp'] ?? 'ECP 2',
                'produk' => $produkEcp2
            ],
            'ecp3' => [
                'nama' => $produkEcp3[0]['nama_ecp'] ?? 'ECP 3',
                'produk' => $produkEcp3
            ]
        ];
        return view('landing/home', $data);
    }

    public function about()
    {
        return view('landing/about', ['title' => 'About Us']);
    }
}

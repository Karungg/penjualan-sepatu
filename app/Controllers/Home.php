<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new \App\Models\Product();
    }

    public function index(): string
    {
        return view('home/index', [
            'products' => $this->productModel->findAll(3)
        ]);
    }
}

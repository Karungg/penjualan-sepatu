<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $productModel;
    protected $categoryModel;

    public function __construct()
    {
        $this->productModel = new \App\Models\Product();
        $this->categoryModel = new \App\Models\Category();
    }

    public function index(): string
    {
        return view('home/index', [
            'products' => $this->productModel->findAll(3)
        ]);
    }

    public function products()
    {
        return view('home/products', [
            'products' => $this->productModel->findAll(),
            'categories' => $this->categoryModel->findAll()
        ]);
    }
}

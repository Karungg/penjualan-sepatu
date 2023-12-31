<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $productModel;
    protected $categoryModel;
    protected $stockModel;

    public function __construct()
    {
        $this->productModel = new \App\Models\Product();
        $this->categoryModel = new \App\Models\Category();
        $this->stockModel = new \App\Models\Stock();
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

    public function detail($id)
    {
        $product = $this->productModel->find($id);

        return view('home/detail', [
            'product' => $product,
            'category' => $this->categoryModel->find($product['id_category']),
            'stocks' => $this->stockModel->where('id_product', $product['id'])->find(),
            'categories' => $this->categoryModel->findAll(),
        ]);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    protected $categoryModel;
    protected $productModel;

    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
        $this->productModel = new \App\Models\Product();
    }

    public function index(): string
    {
        return view('dashboard/index', [
            'categories' => $this->categoryModel->countAllResults(),
            'products' => $this->productModel->countAllResults(),
            'current_page' => 'dashboard'
        ]);
    }
}

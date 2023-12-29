<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    protected $categoryModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
    }

    public function index()
    {
        return view('products/index');
    }

    public function create()
    {
        return view('products/create', [
            'categories' => $this->categoryModel->findAll()
        ]);
    }
}

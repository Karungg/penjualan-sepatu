<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index(): string
    {
        return view('products/index');
    }
}

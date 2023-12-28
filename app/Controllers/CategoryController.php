<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    public function index(): string
    {
        return view('categories/index');
    }
}

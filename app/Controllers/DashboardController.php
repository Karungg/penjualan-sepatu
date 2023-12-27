<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index(): string
    {
        return view('dashboard/index');
    }
}

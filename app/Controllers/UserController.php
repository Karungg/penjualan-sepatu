<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index(): string
    {
        return view('customers/index', [
            'customers' => $this->userModel->findAll(),
            'current_page' => 'customers'
        ]);
    }

    public function show($id)
    {
        return view('customers/detail', [
            'customer' => $this->userModel->find($id),
            'current_page' => 'customers'
        ]);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StockController extends BaseController
{
    protected $stockModel;
    protected $productModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->stockModel = new \App\Models\Stock();
        $this->productModel = new \App\Models\Product();
    }

    public function index()
    {
        return view('stocks/index', [
            'stocks' => $this->stockModel->findAll()
        ]);
    }

    public function create()
    {
        return view('stocks/create', [
            'products' => $this->productModel->findAll()
        ]);
    }

    public function store()
    {
        if (!$this->request->is('post')) {
            return redirect()->to(site_url('admin/stocks/create'));
        }

        if (!$this->validate([
            'title' => 'required|min_length[4]',
            'description' => 'required|min_length[4]'
        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        $this->stockModel->insert($data);

        return redirect()->to(site_url('admin/stocks'))->with('success', 'Add Category Successfully!');
    }

    public function edit($id)
    {
        return view('stocks/edit', [
            'category' => $this->stockModel->find($id)
        ]);
    }

    public function update($id)
    {
        if (!$this->request->is('put')) {
            return redirect()->to(site_url('admin/stocks/edit/' . $id));
        }

        if (!$this->validate([
            'title' => 'required|min_length[4]',
            'description' => 'required|min_length[4]'
        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        $this->stockModel->update($id, $data);

        return redirect()->to(site_url('admin/stocks'))->with('success', 'Edit Category Successfully!');
    }

    public function delete($id)
    {
        $this->stockModel->delete($id);

        return redirect()->to(site_url('admin/stocks'))->with('success', 'Delete Category Successfully!');
    }
}

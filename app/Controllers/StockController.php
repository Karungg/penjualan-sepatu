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
            'id_product' => 'required|min_length[1]',
            'size' => 'required|min_length[2]',
            'quantity' => 'required|min_length[2]'
        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'id_product' => $this->request->getPost('id_product'),
            'size' => $this->request->getPost('size'),
            'quantity' => $this->request->getPost('quantity'),
        ];

        $this->stockModel->insert($data);

        return redirect()->to(site_url('admin/stocks'))->with('success', 'Add Stock Successfully!');
    }

    public function edit($id)
    {
        return view('stocks/edit', [
            'stock' => $this->stockModel->find($id)
        ]);
    }

    public function update($id)
    {
        if (!$this->request->is('put')) {
            return redirect()->to(site_url('admin/stocks/edit/' . $id));
        }

        if (!$this->validate([
            'size' => 'required|min_length[2]',
            'quantity' => 'required|min_length[2]'
        ])) {
            return redirect()->back()->withInput();
        }

        $data = [
            'size' => $this->request->getPost('size'),
            'quantity' => $this->request->getPost('quantity'),
        ];

        $this->stockModel->update($id, $data);

        return redirect()->to(site_url('admin/stocks'))->with('success', 'Edit Stock Successfully!');
    }

    public function delete($id)
    {
        $this->stockModel->delete($id);

        return redirect()->to(site_url('admin/stocks'))->with('success', 'Delete Stock Successfully!');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    protected $categoryModel;
    protected $productModel;
    protected $helpers = ['form', 'text'];

    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
        $this->productModel = new \App\Models\Product();
    }

    public function index()
    {
        return view('products/index', [
            'products' => $this->productModel->findAll()
        ]);
    }

    public function create()
    {
        return view('products/create', [
            'categories' => $this->categoryModel->findAll()
        ]);
    }

    public function store()
    {
        if (!$this->request->is('post')) {
            return redirect()->to(site_url('admin/categories/create'));
        }

        if (!$this->validate([
            'product_name' => 'required|min_length[4]',
            'description' => 'required|min_length[4]',
            'product_price' => 'required|min_length[4]',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,4096]'
        ])) {
            return redirect()->back()->withInput();
        }

        $upload = $this->request->getFile('image');
        $upload->move(WRITEPATH . '../public/assets/img/');

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'description' => $this->request->getPost('description'),
            'product_price' => $this->request->getPost('product_price'),
            'id_category' => $this->request->getPost('id_category'),
            'image' => $upload->getName(),
        ];

        $this->productModel->insert($data);

        return redirect()->to(site_url('admin/products'))->with('success', 'Add Products Successfully!');
    }

    public function edit($id)
    {
        return view('products/edit', [
            'product' => $this->productModel->find($id),
            'categories' => $this->categoryModel->findAll()
        ]);
    }

    public function update($id)
    {
        if (!$this->request->is('put')) {
            return redirect()->to(site_url('admin/categories/create'));
        }

        if (!$this->validate([
            'product_name' => 'required|min_length[4]',
            'description' => 'required|min_length[4]',
            'product_price' => 'required|min_length[4]',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,4096]'
        ])) {
            return redirect()->back()->withInput();
        }

        $data = $this->productModel->find($id);
        @unlink('../public/assets/img/' . $data['image']);

        $upload = $this->request->getFile('image');
        $upload->move(WRITEPATH . '../public/assets/img/');

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'description' => $this->request->getPost('description'),
            'product_price' => $this->request->getPost('product_price'),
            'id_category' => $this->request->getPost('id_category'),
            'image' => $upload->getName(),
        ];

        $this->productModel->update($id, $data);

        return redirect()->to(site_url('admin/products'))->with('success', 'Edit Product Successfully!');
    }

    public function delete($id)
    {
        $data = $this->productModel->find($id);
        $path = '../public/assets/img/';
        @unlink($path . $data['image']);

        $this->productModel->delete($id);
        return redirect()->to(site_url('admin/products'))->with('success', 'Delete Products Successfully!');
    }
}

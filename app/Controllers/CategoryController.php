<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CategoryController extends BaseController
{
    protected $categoryModel;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->categoryModel = new \App\Models\Category();
    }

    public function index()
    {
        return view('categories/index', [
            'categories' => $this->categoryModel->findAll()
        ]);
    }

    public function create()
    {
        return view('categories/create');
    }

    public function store()
    {
        if (!$this->request->is('post')) {
            return redirect()->to(site_url('admin/categories/create'));
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

        $this->categoryModel->insert($data);

        return redirect()->to(site_url('admin/categories'))->with('success', 'Add Category Successfully!');
    }

    public function edit($id)
    {
        return view('categories/edit', [
            'category' => $this->categoryModel->find($id)
        ]);
    }

    public function update($id)
    {
        if (!$this->request->is('post')) {
            return redirect()->to(site_url('admin/categories/edit/' . $id));
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

        $this->categoryModel->update($id, $data);

        return redirect()->to(site_url('admin/categories'))->with('success', 'Edit Category Successfully!');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);

        return redirect()->to(site_url('admin/categories'))->with('success', 'Delete Category Successfully!');
    }
}

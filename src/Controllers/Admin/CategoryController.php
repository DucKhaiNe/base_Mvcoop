<?php

namespace Khaind\MvcOop\Controllers\Admin;

use Khaind\MvcOop\Commons\Controller;
use Khaind\MvcOop\Models\Category;
use Rakit\Validation\Validator;

class   CategoryController extends Controller
{
    private category $category;
    public function __construct()
    {
        $this->category = new category();
    }

    public function index()
    {
        $categories = $this->category->all();

        $this->renderViewAdmin('categories.index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('categories.create');
    }

    public function store()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/categories/create'));
            exit;
        } else {
            $data = [
                'name'      => $_POST['name'],
            ];

           

            $this->category->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url('admin/categories'));
            exit;
        }
    }

    public function show($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('users.show', [
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('users.edit', [
            'category' => $category
        ]);
    }

    public function update($id)
    {
        $category = $this->category->findByID($id);

        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'name'                  => 'required|max:50',
            
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/categories/{$category['id']}/edit"));
            exit;
        } else {
            $data = [
                'name'      => $_POST['name'],
            ];

           

            $this->category->update($id, $data);

          

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công';

            header('Location: ' . url("admin/categories/{$category['id']}/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $category = $this->category->findByID($id);

            $this->category->delete($id);

           

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/categories'));
        exit();
    }
}

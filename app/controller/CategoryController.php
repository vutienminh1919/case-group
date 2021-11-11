<?php

namespace App\controller;

use App\model\CategoryModel;

class CategoryController
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();

    }

    public function index()
    {
        $categories = $this->categoryModel->getAll();
        include_once "app/view/category/list.php";
    }

    public function showFormCreate()
    {
        include_once "app/view/category/create.php";

    }

    public function create($data)
    {
        $data2 = [
            "name_category" => $data['name_category']
        ];
        $this->categoryModel->create($data2);
        header("Location:index.php?page=category-list");
    }


    public function delete($id)
    {
        $this->categoryModel->delete($id);
        include_once "app/view/category/delete.php";
        header("Location:index.php?page=category-list");
    }

    public function showFormEdit()
    {
        $id = $_REQUEST["id"];
        $category = $this->categoryModel->getById($id);
        include_once "app/view/category/edit.php";
    }

    public function edit($id, $request)
    {
        $category = $this->categoryModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data3 = [
                "name_category" => $request['name_category'],
                "id" => $id
            ];
        }
        $this->categoryModel->edit($data3);
        header("Location:index.php?page=category-list");

    }

}
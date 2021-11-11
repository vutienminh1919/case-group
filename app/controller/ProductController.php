<?php

namespace App\controller;

use App\model\CategoryModel;
use App\model\ProductModel;

class ProductController
{
    private $productModel;
    private $categoryModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();

    }

    public function index()
    {
        $products = $this->productModel->getProduct();
        include_once "app/view/product/list.php";
    }

    public function showFormCreate()
    {
        $categories = $this->categoryModel->getAll();
        include_once "app/view/product/create.php";

    }

    public function create($data)
    {
        $filepath = "";
        if (isset($_FILES["file"])) {
            $filepath = "uploads/" . $_FILES["file"]["name"];

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                echo "<img src=" . $filepath . " height=200 width=300 />";
            } else {
                echo "Error !!";
            }
        }

        $data2 = [
            "name" => $_REQUEST['name'],
            "price" => $_REQUEST['price'],
            "description" => $_REQUEST['description'],
            "category_id" => $_REQUEST['category_id'],
            "image" => $filepath
        ];
        $this->productModel->create($data2);
        header("Location:index.php?page=product-list");
    }

    public function showDetail($id)
    {
        $product = $this->productModel->getById($id);
        include_once "app/view/product/detail.php";
    }

    public function delete($id)
    {
        $this->productModel->delete($id);
        include_once "app/view/product/delete.php";
        header("Location:index.php?page=product-list");

    }

    public function showFormEdit()
    {
        $categories = $this->categoryModel->getAll();
        $id = $_REQUEST["id"];
        $product = $this->productModel->getById($id);
        include_once "app/view/product/edit.php";
    }

    public function edit($id, $request)
    {

        $product = $this->productModel->getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                "name" => $request['name'],
                "price" => $request['price'],
                "description" => $request['description'],
                "category_id" => $request['category_id'],
                "id" => $id
            ];
        }
        $this->productModel->edit($data);
        header("Location:index.php?page=product-list");

    }

    public function home()
    {
        $products = $this->productModel->getAll();
        include_once "app/view/layout/home.php";

    }

    public function showResultSearch()
    {
        $id = $_GET["search"];
        $product = $this->productModel->search($id);
        include "app/view/layout/search.php";
    }
//    public function edit($id, $request)
//    {
//        $filepath = "";
//        if (isset($_FILES["file"])) {
//            $filepath = "uploads/" . $_FILES["file"]["name"];
//            move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
//
//        }
//
//        if (isset($_REQUEST["submit"])) {
//            $product = $this->productModel->getById($id);
//            if ($_SERVER["REQUEST_METHOD"] == "POST") {
//                $data2 = [
//                    "name" => $request["name"],
//                    "price" => $request["price"],
//                    "description" => $request["description"],
//                    "category_id" => $request["category_id"],
//                    "image" => $filepath,
//                    "id" => $id
//                ];
//            }
//            $this->productModel->edit($data2);
//            header("Location:index.php?page=user-list");
//        }
//
//    }
}

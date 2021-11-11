<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\controller\AuthController;
use App\controller\CategoryController;
use App\controller\ProductController;
use App\controller\UserController;
use App\model\CategoryModel;
use App\model\ProductModel;
use App\model\UserModel;


session_start();
$productController = new ProductController();
$categoryController = new CategoryController();
$authController = new AuthController();
$userController = new UserController();
$productModel = new ProductModel();
$categoryModel = new CategoryModel();

$page = (isset($_GET["page"])) ? $_GET["page"] : "";
$username = ($_SESSION["username"] ?? "");
$role = ($_SESSION["role"] ?? "");
//var_dump($role);
//die();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">

</head>
<body>
<div class="navbar container">
    <p>Name: <?php echo $username; ?></p>
    <a href="index.php?page=logout">Logout</a>
    <a href="index.php?page=product-list">Product</a>
    <a href="index.php?page=category-list">Category</a>
    <a href="index.php?page=user-list">User</a>
    <a href="index.php?page=home">Home</a>
</div>
<?php
switch ($page) {
    case "product-list":
        if ($role == 1) {
            $authController->checkAuth();
            $productController->index();
        }
        break;
    case
    "product-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $productController->showFormCreate();
        } else {
            $productController->create($_REQUEST);
        }
        break;
    case "product-delete":
        $id = $_GET["id"];
        $productController->delete($id);
        break;
    case "product-edit":
        $id = $_GET["id"];
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $productController->showFormEdit();
        } else {
            $productController->edit($id, $_REQUEST);
        }
        break;
    case "product-detail":
        $id = $_GET["id"];
        $productController->showDetail($id);
        break;
    case "product-search":
        $productController->showResultSearch();
        break;
    case "category-list":
        $authController->checkAuth();
        $categoryController->index();
        break;
    case"category-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $categoryController->showFormCreate();
        } else {
            $categoryController->create($_REQUEST);
        }
        break;
    case "category-delete":
        $id = $_GET["id"];
        $categoryController->delete($id);
        break;
    case "category-edit":
        $id = $_GET["id"];
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $categoryController->showFormEdit();
        } else {
            $categoryController->edit($id, $_REQUEST);
        }
        break;
    case "user-list":
        $userController->getCustomer();
        break;
    case "user-delete":
        $id = $_GET["id"];
        $userController->delete($id);
        break;
    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormLogin();
        } else {
            $authController->login($_REQUEST);
        }
        break;
    case "logout":
        $authController->logout();
        break;
    case "register":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormRegister();
        } else {
            $authController->register($_REQUEST);
        }
        break;
    case "home":
        $productController->home();
        break;
    default:
            $productController->home();
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>



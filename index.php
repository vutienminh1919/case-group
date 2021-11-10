<?php

require_once __DIR__ . "/vendor/autoload.php";
use App\controller\AuthController;
use App\controller\CategoryController;
use App\controller\ProductController;
use App\model\CategoryModel;
use App\model\ProductModel;
use App\model\UserModel;


session_start();
$productController = new ProductController();
$categoryController = new CategoryController();
$authController = new AuthController();
$productModel = new ProductModel();
$categoryModel = new CategoryModel();
$page = (isset($_GET["page"])) ? $_GET["page"] : "";
$username = ($_SESSION["username"] ?? "");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="navbar">
    <p>Name: <?php echo $username; ?></p>
    <a href="index.php?page=logout">Logout</a>
    <a href="index.php?page=product-list">Product</a>
    <a href="index.php?page=category-list">Category</a>
</div>
<?php
switch ($page) {
    case "product-list":
        $authController->checkAuth();
        $productController->index();

        break;

    case "product-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $productController->showFormCreate();
        } else {
            $productController->create($_REQUEST);
        }
        break;
    case "product-delete":
        $id = $_GET["id"];
        $productController->delete($id);
        header("Location:index.php");
        break;
    case "product-edit":
        $id = $_GET["id"];
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $productController->showFormEdit();
        } else {
            $productController->edit($id, $_REQUEST);
        }
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
        header("Location:index.php?page=category-list");
        break;
    case "category-edit":
        $id = $_GET["id"];
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $categoryController->showFormEdit();
        } else {
            $categoryController->edit($id, $_REQUEST);
        }
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
    default:
        $productController->index();
}
?>

</body>
</html>

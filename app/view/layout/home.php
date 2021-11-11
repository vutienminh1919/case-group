<?php
include_once "inc/header.php";
include_once "inc/nav.php";
include_once "inc/carousel.php";
include_once "app/controller/ProductController.php";
include_once "app/controller/AuthController.php";
include_once "app/controller/CategoryController.php";
include_once "app/controller/UserController.php";
include_once "app/model/CategoryModel.php";
include_once "app/model/ProductModel.php";
include_once "app/model/UserModel.php";
$productController = new \App\controller\ProductController();
$authController = new \App\controller\AuthController();
$categoryController = new \App\controller\CategoryController();
$userController = new \App\controller\UserController();
$categoryModel = new \App\model\CategoryModel();
$productModel = new \App\model\ProductModel();
$userModel = new \App\model\UserModel();
$page = (isset($_GET["page"])) ? $_GET["page"] : "";
$username = ($_SESSION["username"] ?? "");
$role = ($_SESSION["role"] ?? "");
?>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-3 mb-5 ">
                    <div class="card ">
                        <img src="<?php echo isset($product['image'])?$product['image']:'uploads/default.jpg';?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product["name"] ?></h5>
                            <h6 class="card-text">
                                <?php echo $product["price"] ?>
                            </h6>
                            <p class="card-text"><?php echo $product["description"] ?></p>
                            <button class="btn btn-primary">Mua</button>
                            <a href="index.php?page=product-detail&id=<?php echo $product["id"] ?>" class="btn btn-primary">Chi tiết sản phẩm</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
switch ($page) {
    case "product-list":
        if ($role == 1) {
            $authController->checkAuth();
            $productController->index();
        }
        break;
}
?>
<?php
include_once "inc/foot.php";
?>
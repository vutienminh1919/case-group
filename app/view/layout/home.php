<?php
include_once "inc/header.php";
include_once "inc/nav.php";
include_once "inc/carousel.php";
session_start();
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
include_once "inc/foot.php";
?>
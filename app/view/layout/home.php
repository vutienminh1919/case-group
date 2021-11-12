<?php
include_once "inc/header.php";
include_once "inc/nav.php";
include_once "inc/carousel.php";
session_start();
$role = ($_SESSION["role"] ?? "");
?>
    <div class="container" style="text-align: center">
        <div class="row">
            <?php foreach ($products as $product): ?>

                <div class="col-3 mt-5">
                    <div class="card " >
                            <img  src="<?php echo isset($product['image'])?$product['image']:'uploads/default.jpg';?>" class="card-img-top"  alt="..." style="width: 259px; height: 259px">
                        <div class="card-body" >
                            <h4 class="card-title" style="text-align: center; width: 240px;overflow: hidden;white-space: nowrap; text-overflow: ellipsis;"><?php echo $product["name"] ?></h4>
                            <h4 class="card-text" style="text-align: center">
                                <?php echo number_format($product["price"]) ?> ₫
                            </h4>
                            <a href="index.php?page=product-detail&id=<?php echo $product["id"] ?>" class="btn btn-primary" style="text-align: center">DETAIL</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php
include_once "inc/foot.php";
?>
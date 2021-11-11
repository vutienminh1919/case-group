<?php
include_once "inc/header.php";
include_once "inc/nav.php";
include_once "inc/carousel.php";
?>
<?php foreach ($products as $product): ?>
    <div class="container">
        <div class="row">
            <div class="card col-4">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product["name"] ?></h5>
                    <h6 class="card-text"><?php echo $product["price"] ?></h6>
                    <p class="card-text"><?php echo $product["description"] ?></p>
                    <button class="btn btn-primary">Mua</button>
                    <a href="index.php?page=product-detail" class="btn btn-primary">Chi tiết sản phẩm</a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<?php
include_once "inc/foot.php";
?>
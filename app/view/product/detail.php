<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
    <div class="container"  style="margin-top: 100px !important;">
    <div class="row">
        <div class="col">
            <div>
                <img src="<?php echo $product['image']; ?>">
            </div>

        </div>
        <div class="col">
            <h4>Name Product: <?php echo $product['name']; ?></h4>
            <h5 style="font-weight: 700">Price: <?php echo number_format($product['price']); ?></h5>
            <p style="white-space: pre-wrap">Description: <?php echo $product["description"];?></p>
            <a href="index.php?page=product-cart&id=<?php echo $product["id"]; ?>" type="button" class="btn btn-success"">BUY</a>
            <a href="index.php?page=home" type="button" class="btn btn-danger">BACK</a>

        </div>
    </div>
    </div>

<?php
include_once "inc/foot.php";
?>
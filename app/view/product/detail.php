<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
    <div class="container">
    <div class="row">
        <div class="col">
            <div>
                <img style="margin-left: 100px" src="<?php echo $product['image']; ?>">
            </div>

        </div>
        <div class="col">
            <h4>Name Product: <?php echo $product['name']; ?></h4>
            <h5>Price: <?php echo number_format($product['price']); ?></h5>
            <p style="white-space: pre-wrap">Description: <?php echo $product["description"];?></p>
            <a href="#" type="button" class="btn btn-success"">Buy Product</a>
            <a href="index.php?page=home" type="button" class="btn btn-danger">Back</a>
        </div>
    </div>

<?php
include_once "inc/foot.php";
?>
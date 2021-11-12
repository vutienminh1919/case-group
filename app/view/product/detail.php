<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
    <div class="container">
    <div class="row">
        <div class="col">
            <img style="margin-left: 100px" src="<?php echo $product['image']; ?>">
        </div>
        <div class="col">
            <h4>Tên sản phẩm : <?php echo $product['name']; ?></h4>
            <h5 style="font-weight: 700"> Giá tiền: <?php echo $product['price']; ?>₫</h5>
            <p>Mô tả sản phẩm: <?php echo $product["description"];?></p>
            <a href="index.php?page=product-cart&id=<?php echo $product["id"]; ?>" type="button" class="btn btn-success"">Mua Hàng</a>
            <a href="index.php?page=home" type="button" class="btn btn-danger">Quay về</a>
        </div>
    </div>
<!--<h2 style="text-align:center">Product Detail</h2>-->
<!--<div class="card">-->
<!--    <img src="--><?php //echo $product['image']; ?><!--">-->
<!--    <h1>--><?php //echo $product['name']; ?><!--</h1>-->
<!--    <p> --><?php //echo $product['price']; ?><!--</p>-->
<!--    <p> --><?php //echo $product["description"];?><!--</p>-->
<!--        <button>Add to Cart</button>-->
<!--    </p>-->
<!--</div>-->

<?php
include_once "inc/foot.php";
?>
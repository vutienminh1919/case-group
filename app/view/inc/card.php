<?php if (isset($products)) ?>
<?php foreach ($products as $product):?>
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $product["name"] ?></h5>
            <h6 class="card-text"><?php echo $product["price"] ?></h6>
            <p class="card-text"><?php echo $product["description"] ?></p>
            <button class="btn btn-primary">Mua</button>
            <a href="index.php?page=product-detail" class="btn btn-primary">Chi tiết sản phẩm</a>
        </div>
    </div>
<?php endforeach; ?>

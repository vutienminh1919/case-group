<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
<div class="container">
    <table border="1px" class="table table-bordered"  style="margin-top: 100px !important;">
        <thead class="table-dark" style="text-align: center">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>TOTAL</th>
            <th colspan="3">ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php $sum = 0 ?>
        <?php if (isset($products)): ?>
            <?php foreach ($products as $product): ?>
                <?php
                $total = $product["quantity"] * $product["price"];
                $sum += $total
                ?>
                <tr>
                    <td style="text-align: center"><?php echo $product["id"] ?></td>
                    <td style="text-align: center"><img width="150px" src="<?php echo $product["image"] ?>"</td>
                    <td style="text-align: center"><?php echo $product["name"] ?></td>
                    <td style="text-align: center"><?php echo number_format($product["price"]) ?>₫</td>
                    <td style="text-align: center"><?php echo $product["quantity"] ?></td>
                    <td style="text-align: center"><?php echo number_format($product["quantity"] * $product["price"]) ?>₫</td>
                    <td style="text-align: center"><a type="button" class="btn btn-danger"
                                                      onclick="return confirm('ARE YOU SURE?')"
                                                      href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <tr style="text-align: center">
            <td colspan="5">TOTAL</td>
            <td colspan="2"><?php echo number_format($sum)?>₫</td>
        </tr>
        <?php else: ?>
            <tr>
                <td colspan="6">Khong co gi hien thi ca</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
include_once "inc/foot.php";
?>

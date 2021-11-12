<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
<div class="container">
    <table border="1px" class="table table-bordered"  style="margin-top: 100px !important;">
        <thead class="table-dark" style="text-align: center" >
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>price</th>
            <th style="text-align: center">description</th>
            <th>Category name</th>
            <th>image</th>
            <th style="text-align: center" colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>

                    <td style="text-align: center"><?php echo $product["id"] ?></td>
                    <td style="text-align: center"><?php echo $product["name"] ?></td>
                    <td style="text-align: center"><?php echo number_format($product["price"]) ?>₫</td>
                    <td style="text-align: center"><?php echo $product["description"] ?></td>
                    <td style="text-align: center"><?php echo $product["name_category"] ?></td>

<!--                    <td>--><?php //echo $product["id"] ?><!--</td>-->
<!--                    <td>--><?php //echo $product["name"] ?><!--</td>-->
<!--                    <td>--><?php //echo number_format($product["price"] ) ?><!--</td>-->
<!--                    <td>--><?php //echo $product["description"] ?><!--</td>-->
<!--                    <td>--><?php //echo $product["name_category"] ?><!--</td>-->

                    <td><img  width="100px" src="<?php echo $product["image"] ?>"</td>
                    <td><a style="margin-top: 40px" type="button" class="btn btn-info" href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Detail</a></td>
                    <td><a style="margin-top: 40px" type="button" class="btn btn-success" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Edit</a></td>
                    <td><a style="margin-top: 40px" type="button" class="btn btn-danger" onclick="return confirm('ARE YOU SURE?')" href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
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



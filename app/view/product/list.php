<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
<div class="container">
    <a type="button" class="btn btn-primary" href="index.php?page=product-create">add new product</a>
    <table border="1px" class="table table-bordered" >
        <thead class="table-dark ">
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
                    <td><?php echo $product["id"] ?></td>
                    <td><?php echo $product["name"] ?></td>
                    <td><?php echo number_format($product["price"] ) ?></td>
                    <td><?php echo $product["description"] ?></td>
                    <td><?php echo $product["name_category"] ?></td>
                    <td><img width="100px" src="<?php echo $product["image"] ?>"</td>
                    <td><a type="button" class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                    <td><a type="button" class="btn btn-success" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Edit</a></td>
                    <td><a type="button" class="btn btn-info" href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Detail</a></td>

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



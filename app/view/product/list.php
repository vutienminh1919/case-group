<a href="index.php?page=product-create">add new product</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
        <th>description</th>
        <th>Category name</th>
        <th>image</th>
        <th colspan="3">Action</th>

    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product["id"] ?></td>
                <td><?php echo $product["name"] ?></td>
                <td><?php echo $product["price"] ?></td>
                <td><?php echo $product["description"] ?></td>
                <td><?php echo $product["name_category"] ?></td>
                <td><img width="100px" src="<?php echo $product["image"] ?>"</td>
                <td><a onclick="return confirm('Are you sure ?')" href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Xóa</a></td>
                <td><a href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Sửa</a></td>
                <td><a href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Chi tiết</a></td>

            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Khong co gi hien thi ca</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

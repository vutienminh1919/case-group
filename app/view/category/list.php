<a href="index.php?page=category-create">add new category</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>name</th>

    </tr>
    </thead>
    <tbody>
    <?php if (isset($categories)): ?>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?php echo $category["id"] ?></td>
                <td><?php echo $category["name"] ?></td>
                <td><a onclick=" return confirm('are you sure ?')"
                       href="product/category-delete.php?id=<?php echo $category["id"] ?>">Delete</a></td>
                <td><a href="product/category-edit.php?id=
                <?php echo $category["id"] ?>">Edit</a></td>

            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Khong co gi hien thi ca
            </td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<div class="container">
    <a href="index.php?page=category-create">add new category</a>
    <table border="1px" class="table">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th colspan="2 ">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($categories)): ?>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?php echo $category["id"] ?></td>
                    <td><?php echo $category["name_category"] ?></td>
                    <td><a onclick=" return confirm('are you sure ?')"
                           href="index.php?page=category-delete&id=<?php echo $category["id"] ?>">Delete</a></td>
                    <td><a href="index.php?page=category-edit&id=<?php echo $category["id"] ?>">Edit</a></td>

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
</div>


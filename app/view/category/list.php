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
            <th colspan="2 ">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($categories)): ?>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td style="text-align: center"><?php echo $category["id"] ?></td>
                    <td style="text-align: center"><?php echo $category["name_category"] ?></td>
                    <td style="text-align: center"><a type="button" class="btn btn-success" href="index.php?page=category-edit&id=<?php echo $category["id"] ?>">Edit</a></td>
                    <td style="text-align: center"><a type="button" class="btn btn-danger" onclick=" return confirm('ARE YOU SURE?')"
                           href="index.php?page=category-delete&id=<?php echo $category["id"] ?>">Delete</a></td>

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


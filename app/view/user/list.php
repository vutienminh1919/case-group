<?php
include_once "inc/header.php";
include_once "inc/nav.php";
?>
<table border="1px" class="table table-bordered">
    <thead class="table-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th style="text-align: center">Action</th>

    </tr>
    </thead>
    <tbody>
    <?php if (isset($customers)): ?>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?php echo $customer["id"] ?></td>
                <td><?php echo $customer["name"] ?></td>
                <td><?php echo $customer["email"] ?></td>
                <td><a type="button" class="btn btn-danger" onclick="return confirm('Are you sure ?')"
                       href="index.php?page=user-delete&id=<?php echo $customer["id"] ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="6">Nothing to show here !</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
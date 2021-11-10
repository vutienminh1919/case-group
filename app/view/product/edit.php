
<form method="post">
    <form method="post">
        <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden>
        <input type="text" name="name" value="<?php echo $product['name'] ?>">
        <input type="text" name="price" value="<?php echo $product['price'] ?>">
        <input type="text" name="description" value="<?php echo $product['description'] ?>">
        <input type="file" name="file" value="<?php echo $product['image'] ?>"><br>
        <button type="submit" name="upload">Update</button>
        <td><a href="index.php?page=product-list">Back</a></td>
    </form>
</form>
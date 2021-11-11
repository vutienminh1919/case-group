

    <form method="post" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden>
        <input type="text" name="name" value="<?php echo $product['name'] ?>">
        <input type="text" name="price" value="<?php echo $product['price'] ?>">
        <input type="text" name="description" value="<?php echo $product['description'] ?>">
        <input type="text" name="description" value="<?php echo $product['category_id'] ?>">
        <input type="file" name="file" width="200px" value="<?php echo $product['image'] ?>">
        <button type="submit" name="upload">Update</button>
        <td><a href="index.php?page=product-list">Back</a></td>
    </form>
</form>
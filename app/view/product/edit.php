
    <form method="post" enctype="multipart/form-data">
        <select name="demo">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category["name_category"] ?>"><?php echo $category["id"].".".$category["name_category"] ?></option>
            <?php endforeach; ?>

            <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden>
        <input type="text" name="name" value="<?php echo $product['name'] ?>">
        <input type="text" name="price" value="<?php echo $product['price'] ?>">
        <input type="text" name="description" value="<?php echo $product['description'] ?>">
        <input type="text" name="category_id" value="<?php echo $product['category_id'] ?>">
        <button type="submit" name="upload">Update</button>
        <td><a href="index.php?page=product-list">Back</a></td>
    </form>
</form>
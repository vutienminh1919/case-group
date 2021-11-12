<div class="container mt-5 " style="width: 30%">
    <form method="post" enctype="multipart/form-data">
        <select name="demo">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category["name_category"] ?>"><?php echo $category["id"] . "." . $category["name_category"] ?></option>
            <?php endforeach; ?>
        </select><br>

            <input type="text" name="id" value="<?php echo $product['id'] ?>" hidden><br><br>
            <input type="text" name="name" value="<?php echo $product['name'] ?>"><br><br>
            <input type="text" name="price" value="<?php echo $product['price'] ?>"><br><br>
            <textarea name="description" cols="30" rows="10"><?php echo $product['description'] ?></textarea>
            <input type="text" name="category_id" value="<?php echo $product['category_id'] ?>"><br><br>
            <button type="submit" name="upload">Update</button>
            <td><a href="index.php?page=product-list">Back</a></td>
    </form>
</div>


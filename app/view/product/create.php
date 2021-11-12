<div class="container mt-2" style="width: 30%">
    <form method="post" enctype="multipart/form-data">
        <select name="demo">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category["name_category"] ?>"><?php echo $category["id"].".".$category["name_category"] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="text" name="name" placeholder="ten san pham"><br><br>
        <input type="text" name="price" placeholder="gia san pham"><br><br>
        <textarea name="description" cols="30" rows="10" placeholder="mo ta san pham"></textarea><br><br>
        <input type="text" name="category_id" placeholder="category san pham"><br><br>
        <input type="file" name="file" placeholder="anh san pham"><br><br>
        <button class="btn btn-success" type="submit" name="submit">ADD</button>
        <a class="btn btn-danger" href="index.php?page=product-list">Back</a>
    </form>
</div>




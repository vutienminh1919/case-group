<form method="post" enctype="multipart/form-data">
    <select name="demo">
        <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category["name_category"] ?>"><?php echo $category["id"].".".$category["name_category"] ?></option>
        <?php endforeach; ?>

    <input type="text" name="name" placeholder="ten san pham">
    <input type="text" name="price" placeholder="gia san pham">
    <input type="text" name="description" placeholder="mo ta san pham">
    <input type="text" name="category_id" placeholder="category san pham">
    <input type="file" name="file" placeholder="anh san pham">
    <button type="submit" name="submit">them moi</button>
</form>


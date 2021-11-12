<div class="container mt-5 " style="width: 30%">
    <form method="post">
        <input type="text" name="id" value="<?php echo $category['id'] ?>" hidden><br>
        <input style="height: 50px" type="text" name="name_category" value="<?php echo $category['name_category'] ?>"><br><br>
        <button class="btn btn-success" type="submit">Update</button>
        <td><a type="button" class="btn btn-danger" href="index.php?page=category-list">Back</a></td>
    </form>
    </form>
</div>



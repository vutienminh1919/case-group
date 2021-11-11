<?php
session_start();
$role = ($_SESSION["role"] ?? "");
$username = ($_SESSION["username"] ?? "");
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand" href="index.php?page=home" style="color: black">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORY
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($categories as $category) :?>

                            <li><a class="dropdown-item" href="#"><?php echo $category["name_category"]?></a></li>
                                <li><hr class="dropdown-divider"></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <?php if ($role == 1) : ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                               href="index.php?page=product-list">PRODUCT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=user-list">USER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?page=category-list">CATEGORY-ADMIN</a>
                        </li>
                    <?php endif; ?>
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>
                <a class="nav-link active" href="index.php?page=product-cart">CART(<?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):?></a>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $username; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php?page=logout">LOGOUT</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>

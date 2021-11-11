<?php
include_once "app/view/inc/header.php";
include_once "app/view/inc/nav.php";
include_once "app/view/inc/carousel.php";
?>
<h1> <?php echo $product["name"];?></h1>
<p><?php echo $product["price"];?></p>
<p><?php echo $product["description"];?></p>
<?php
include_once "app/view/inc/foot.php";
?>
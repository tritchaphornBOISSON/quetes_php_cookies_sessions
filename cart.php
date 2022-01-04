<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>

<section class="cookies container-fluid">
    <div class="row">
       <ul>
           <?php

           foreach ($_SESSION['cart'] as $id_cookie) {
               if (isset($catalog[$id_cookie])) {
           ?>
                <li><?= $catalog[$id_cookie]['name']; ?></li>
           <?php
               }
           }
           ?>
       </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

<?php require 'inc/head.php'; ?>
<?php

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
            if (isset($_SESSION['cookie_id'])) {
                echo $_SESSION['cookie_name'];
            }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

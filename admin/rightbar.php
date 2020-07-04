<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="logout.php" class="mega-menu" title="Sign Out"><i class="zmdi zmdi-power"></i></a></li>

        <?php

        if (isset($_SESSION['user_id'])) {


        ?>
            <li><a href=<?php echo "edit_login.php?id=" . $_SESSION["user_id"] ?> class="js-right-sidebar" title="Update Password"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>

        <?php
        } else {
        ?>
            <li><a href=<?php echo "edit_login.php?id=" . $_COOKIE["remember_me"] ; ?> class="js-right-sidebar" title="Update Password"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>

        <?php
        }
        ?>
    </ul>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<?php

session_start();

if(isset($_SESSION['uid'])){ ?>

    <div class="admin-panel">
        <div class="container container--large">
            Logged in as: <?php echo $_SESSION['uid'] ?>| <a href="admin/index.php">Admin Panel</a> | <a href="/admin/includes/logout.inc.php">Logout</a>
        </div>
    </div>

<?php } ?>
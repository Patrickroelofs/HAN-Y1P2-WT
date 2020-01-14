<?php
//======================================================================
// Patrick Roelofs | 584025
//======================================================================
?>
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['uid'])){ ?>

    <div class="admin-panel">
        <div class="container container--large">
            Logged in as: <a href="/admin/userinfo.php"><?php echo $_SESSION['uid'] ?></a> |

            <?php
                if($thisPage == 'AdminHome' || $thisPage == 'AdminMessages' || $thisPage == 'AdminPages' || $thisPage == 'AdminProjects' || $thisPage == 'AdminSetup' || $thisPage == 'AdminUserinfo' || $thisPage =='AdminAddBlog' || $thisPage == 'AdminAddProject' || $thisPage == 'AdminEditProject' || $thisPage == 'AdminBlog' || $thisPage == 'AdminEditBlog' || $thisPage == 'AdminViewMessage'){
                    echo "<a href='../index.php'>Homepage</a> | ";
                } else {
                    echo "<a href='admin/index.php'>Admin Panel</a> | ";
                }
            ?>

            <a href="/admin/includes/logout.inc.php">Logout</a>
        </div>
    </div>

<?php } ?>
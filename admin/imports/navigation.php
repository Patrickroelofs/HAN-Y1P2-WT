<aside>
    <nav>
        <ul>
            <li><a href="home.php" class="<?php if($thisPage == 'Home'){ echo 'active'; } ?>">Home</a></li>
            <li><a href="pages.php" class="<?php if($thisPage == 'Pages'){ echo 'active'; } ?>">Pages</a></li>
            <li><a href="projects.php" class="<?php if($thisPage == 'Projects' || $thisPage == 'AddProject'){ echo 'active'; } ?>">Projects</a></li>
            <li><a href="blog.php" class="<?php if($thisPage == 'Blog' || $thisPage == 'AddBlog'){ echo 'active'; } ?>">Blog</a></li>
            <li><a href="messages.php" class="<?php if($thisPage == 'Messages'){ echo 'active'; } ?>">Messages</a></li>
            <li><a href="setup.php" class="<?php if($thisPage == 'Setup'){ echo 'active'; } ?>">Setup</a></li>
        </ul>
    </nav>
    <a href="userinfo.php" class="profile--icon">
        <span class="icon--circle">P</span>
        <span class="icon--title">Patrick Roelofs</span>
    </a>
    <form action="includes/logout.inc.php" method="post"><button type="submit" name="logout-submit">Logout</button></form>
</aside>
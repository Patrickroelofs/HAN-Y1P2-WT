<?php include 'includes/adminBar.inc.php'; ?>
<nav>
    <div class="container container--large nav">
        <input class="nav--icon" type="checkbox" id="menu-btn"/>
        <label class="menu--icon" for="menu-btn">
            <svg viewbox="0 0 100 100" width="64">
                <path class="line top"  d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                </path>
                <path class="line middle" d="m 30,50 h 40"></path>
                <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                </path>
            </svg>
        </label>
        <div class="nav__logo">
            <a href="index.php">
                <h1>Patrick Roelofs</h1>
            </a>
        </div>
        <div class="nav__navigation">
            <ul>
                <li><a href="index.php" class="nav__link <?php if ($thisPage == 'Home') echo 'nav--active' ?>">Home</a></li>
                <li><a href="about.php" class="nav__link <?php if ($thisPage == "About") echo "nav--active"; ?>">About</a></li>
                <li><a href="projects.php" class="nav__link <?php if ($thisPage == 'Projects' || $thisPage == 'Project') echo 'nav--active' ?>">Projects</a></li>
                <li><a href="blog.php" class="nav__link <?php if ($thisPage == 'Blog' || $thisPage == 'BlogPost') echo 'nav--active' ?>">Blog</a></li>
                <li><a href="contact.php" class="nav__link <?php if ($thisPage == 'Contact') echo 'nav--active' ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
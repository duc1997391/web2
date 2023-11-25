<?php
$activeMenu = isset($activeMenu) ? $activeMenu : 'index'
?>
<nav class="tm-main-nav">
    <ul class="tm-main-nav-ul">
        <li class="tm-nav-item"><a href="index.php" class="tm-nav-item-link tm-button <?php if($activeMenu === 'index') echo 'active'; ?>">Gallery</a>
        </li>
        <li class="tm-nav-item"><a href="timeline.php" class="tm-nav-item-link tm-button <?php if($activeMenu === 'timeline') echo 'active'; ?>">Timeline</a>
        </li>
        <li class="tm-nav-item"><a href="about.php" class="tm-nav-item-link tm-button <?php if($activeMenu === 'about') echo 'active'; ?>">About</a>
        </li>
        <li class="tm-nav-item"><a href="contact.php" class="tm-nav-item-link tm-button <?php if($activeMenu === 'contact') echo 'active'; ?>">Contact</a>
        </li>
        <li class="tm-nav-item"><a href="show.php" class="tm-nav-item-link tm-button <?php if($activeMenu === 'show') echo 'active'; ?>">Trình Bày 20810206</a>
        </li>
        <li class="tm-nav-item"><a href="add.php" class="tm-nav-item-link tm-button <?php if($activeMenu === 'add') echo 'active'; ?>">Thêm 20810206</a>
        </li>
    </ul>
</nav>
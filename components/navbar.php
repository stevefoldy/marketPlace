<nav class="mp-menu">
    <ul class="mp-menu-group">
        <li class="mp-menu-item"><a class="mp-menu-item-link <?php if($page == 'home'){echo 'active';}?>" href="index.php">
                <i class="fas fa-home mr-2"></i>
                <span>Főoldal</span>
            </a></li>
        <li class="mp-menu-item"><a class="mp-menu-item-link <?php if($page == 'products'){echo 'active';}?>" href="products.php">
                <i class="fas fa-tag mr-2"></i>
                <span>Termékek</span>
            </a></li>
        <li class="mp-menu-item"><a class="mp-menu-item-link <?php if($page == 'support'){echo 'active';}?>" href="support.php">
                <i class="fas fa-life-ring mr-2"></i>
                <span>Segítség</span>
            </a></li>
    </ul>
</nav>
<div class="header">
            <div class="nav">
                <div class="nav-item nav-b"><a href="index.php"><b></b></a></div>
                <?php for ($i = 0; $i < count($menu_list); $i++): ?>
                <div class="nav-item"><a href=<?php echo $menu_id[$i]?>><?php echo $menu_list[$i] ?></a></div>
                <?php endfor?>
            </div>
</header>

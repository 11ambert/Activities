<?php
    $path = "./src/";
    $menu = file($path."main-menu.txt");
?>
<ul>
    <?php
        foreach($menu as $i){
    ?>
        <li><a href="#"><?=$i?></a></li>
    <?php
        }
    ?>
</ul>
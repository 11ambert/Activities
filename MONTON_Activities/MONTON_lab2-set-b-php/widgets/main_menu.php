<ul>
    <?php #PHP CODE
        $path = "./src/";
        $menu = file($path."main-menu.txt");
        foreach($menu as $item){
    ?>
        <!-- HTML CODE -->
        <li><a href='#'><?=$item?></a></li>
    <?php
        } #PHP CODE
    ?>
</ul>
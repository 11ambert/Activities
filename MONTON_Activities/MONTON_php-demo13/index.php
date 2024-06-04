<?php
    $menu = array(
        "Home",
        "Products",
        "About us",
        "Contact us"
    );
?>
<ul>
    <?php 
        #PHP CODE
        foreach($menu as $i){
    ?>
        <!-- HTML CODE -->
        <li><a href="#"><?=$i?></a></li>
    <?php
        } #PHP CODE
    ?>
</ul>

<?php
    for($i=1;$i<=4;$i++){
?>
        <h<?=$i?>>This is a heading <?=$i?></h<?=$i?>>
<?php
    }
?>
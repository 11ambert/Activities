<?php
    $path = "./widgets/";
    $header = $path."header.php";
    $nav = $path."main_menu.php";
    $content = $path."content.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Demo</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <?php include($header)?>
        </div>
        <div class="nav">
            <?php include($nav)?>
        </div>
        <div class="content">
            <?php include($content)?>
        </div>
        <div class="footer">
            <p>Footer goes here</p>
        </div>
    </div>
</body>
</html>
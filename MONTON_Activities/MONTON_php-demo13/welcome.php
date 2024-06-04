<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <div class="wrapper">
        <?php
            $user_name = NULL;
            if(isset($user_name)){
        ?>
            <h1><?=greeting($user_name)?></h1>
        <?php
            }else{
        ?>
            <h1>Please login.</h1>
        <?php
            }
        ?>
    </div>
</body>
</html>

<?php
    function greeting($e){
        return "Welcome, ".$e;
    }
?>
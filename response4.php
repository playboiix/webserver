<!DOCTYPE html>
<html>
    <?php
        $led=(int)($_GET["led"]);
        $led2=(int)($_GET["led2"]);
    ?>
    <head>
        <title>Sauce Village</title>
    </head>
    <body bgcolor="#696969">
        <?= "led value: {$led}"?>
    <p><?=`gpio write 0 $led`?></p>
    You changed the state of your LED!
</html>
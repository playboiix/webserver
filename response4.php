<!DOCTYPE html>
<html>
    <?php
        $led=(int)($_GET["led"]);
        $led=(int)($_GET["led2"]);
    ?>
    <head>
        <title>Sauce Village</title>
    </head>
    <body bgcolor="#696969">
    <p><?= `gpio write 0 $led`?></p>
</html>
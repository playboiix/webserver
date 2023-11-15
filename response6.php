<!DOCTYPE html>
<html>
    <?php
        $raw = `./bme/bme280`;
        $deserialized = json_decode($raw, true);
    ?>
    <head>
        <title>Sauce Village</title>
    </head>
    <body bgcolor="#696969">
    <p>The sensor you are using is <?=$deserialized["sensor"]?></p>
</html>
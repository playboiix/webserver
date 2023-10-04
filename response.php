<!DOCTYPE html>
<html>
        <head>
            <title>Sauce Village</title>
        </head>
        <body bgcolor="#696969">
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>
        <p>Hello your name is: <?=$_POST["firstname"] . " " . $_POST["lastname"]?> </p> <br/>
        <p>You are <?=$_POST["age"] ?> years old </p>
        </body>
</html>
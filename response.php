<!DOCTYPE html>
<html>
        <head>
            <title>Sauce Village</title>
        </head>
        <body bgcolor="#696969">
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>
        <p>Hello your name is: <?=$_POST["firstname"] . " " . $_POST["lastname"]?> </p>
        <p>You are <?=$_POST["age"] ?> years old </p>
        <p>Your email is <?=$_POST["email"]." and your phone number is:" . $_POST["phone"] ?> 
        </body>
</html>
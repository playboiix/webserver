<!DOCTYPE html>
<html>
        <head>
            <title>Sauce Village</title>
        </head>
        <body bgcolor="#696969">
        <p><?= var_dump($_GET) ?></p>
        <p><?= var_dump($_POST) ?></p>
        
        <p>Hello your name is: <?=htmlspecialchars($_POST["firstname"]) . " " . htmlspecialchars($_POST["lastname"])?> </p>
        <p>You are a <?=(int)$_POST["age"]. " year old " . $_POST["gender"] ?> </p>
        <p>Your email is <?=htmlspecialchars($_POST["email"])." and your phone number is: " . (int)$_POST["phone"] ?>
        </body>
</html>
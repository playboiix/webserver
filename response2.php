<!DOCTYPE html>
<html>
        <head>
            <title>Sauce Village</title>
            <?php
            $id= htmlspecialchars($_GET["Students"]);
            $server = "localhost";
            $username = "sal";
            $password = "spiderman";
            $database = "DawsonCollege";
            $conn = mysqli_connect($server,$username,$password,$database);  
            $sql = "select * from Students;";
            $result = mysqli_query($conn, $sql);
            ?>
        </head>
        <body bgcolor="#6A5ACD">
        <p><?= var_dump($_GET) ?></p>
        You selected <?= $id ?>.<br/>
        <?php
            foreach($result as $row)
            {
                echo "{$row['gender']}";
            }
            mysqli_close($conn);
        ?>
        </body>
</html>
<!DOCTYPE html>
<html>
        <head>
            <?php
            $search= htmlspecialchars($_GET["search"]);
            $ip= htmlspecialchars($_SERVER['REMOTE_ADDR']);
            $server = "localhost";
            $username = "sal";
            $password = "spiderman";
            $database = "DawsonCollege";
            $conn = mysqli_connect($server,$username,$password,$database);  
            $sql = "insert into Logs (search, ip) values ('$search', '$_SERVER')";
            $result = mysqli_query($conn, $sql);
            ?>
        </head>
        <body>
            <?php
            //header("Location: https://google.com/search?q={$search}");
            echo $sql;
            echo $search;
            echo $_SERVER;
            $sql = "insert into Logs (search, ip) values ('$search', $_SERVER)";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
            ?>
        </body>
</html>
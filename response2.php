<!DOCTYPE html>
<html>
        <head>
            <title>Sauce Village</title>
            <?php
            $gender= (int)($_GET["gender"]);
            $server = "localhost";
            $username = "sal";
            $password = "spiderman";
            $database = "DawsonCollege";
            $conn = mysqli_connect($server,$username,$password,$database);  
            $sql = "select * from Students where id={$gender};";
            $result = mysqli_query($conn, $sql);
            ?>
        </head>
        <body bgcolor="#6A5ACD">
        The student you selected is...<br/>
        <?php
            foreach($result as $row)
            {
                echo "A {$row['gender']} who is {$row['age']} years old and has an average of {$row['avg']}.";
            }
            mysqli_close($conn);
        ?>
        </body>
</html>
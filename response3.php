<!DOCTYPE html>
<html>
        <head>
            <title>Sauce Village</title>
            <?php
            $gender= htmlspecialchars($_GET["gender"]);
            $age= (int)($_GET["age"]);
            $avg= (int)($_GET["avg"]);
            $server = "localhost";
            $username = "sal";
            $password = "spiderman";
            $database = "DawsonCollege";
            $conn = mysqli_connect($server,$username,$password,$database);  
            $sql = "insert into Students (gender, avg, age) values ('$gender', $avg, $age)";
            $result = mysqli_query($conn, $sql);
            ?>
        </head>
        <body bgcolor="#6A5ACD">
        <?php
          echo "You have successfully created a student</br>";
          echo "Here are all the students below </br>";
          $sql = "SELECT * FROM Students;";
          $result = mysqli_query($conn, $sql);
            foreach($result as $row)
            {
                echo "A {$row['gender']} human who is {$row['age']} years old and has an average of {$row['avg']}.</br>";
            }
            mysqli_close($conn);
        ?>
        </body>
</html>
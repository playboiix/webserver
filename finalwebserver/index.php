<!DOCTYPE html>
<html>
    <head>
        <?php
            $server = "localhost";
            $username = "sal";
            $password = "spiderman";
            $database = "DawsonCollege";
            $conn = mysqli_connect($server,$username,$password,$database);
            // if (!$conn) 
            // {die("Connection failed: {mysqli_connect_error()}");}
            // echo "Connected successfully";              
            $sql = "select * from Students;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
        <div>About Store</div>
        <center>
            <img id="img" src="google.png"/><br/>
        </center>
        <form action="search.php" method="get">
            Perform a Google Search:<br/>
            Search:<input type="text" name="search"><br/>
            <input type="submit"/>
        </form>
    </body>
</html>
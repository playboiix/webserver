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
    <style>
        .L3eUgb{display:flex;flex-direction:column;height:100%}.o3j99{flex-shrink:0;box-sizing:border-box}.n1xJcf{height:60px}.LLD4me{min-height:150px;height:calc(100% - 560px);max-height:290px}.yr19Zb{min-height:92px}.ikrT4e{max-height:160px}.mwht9d{position:absolute;left:-1000px}.ADHj4e{padding-top:0px;padding-bottom:85px}.oWyZre{width:100%;height:500px;border-width:0}.qarstb{flex-grow:1}
    </style>
    <div>
        <style>
            .Ne6nSd{display:flex;align-items:center;padding:6px}a.MV3Tnb{display:inline-block;padding:5px;margin:0 5px;color:var(--COEmY)}a.MV3Tnb:first-of-type{margin-left:15px}.LX3sZb{display:inline-block;flex-grow:1}
        </style>
        <a class="MV3TNB">About Store</a>
    </div>
        <center>
            <img id="img" src="google.png"/><br/>
        </center>
</html>
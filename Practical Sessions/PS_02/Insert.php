<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body style='color:#03DC01;background-color:black;font-family:courier, monospace;'>

    <h2 style="display: inline-block">Youmna Jaza</h2>
    <h3 style="display: inline-block;margin-left:30%">201812214</h3>
    <p style="border-top:0.5px solid white;"></p>

    <?php
    require("db_connection.php");

  

    if ($connection) {
        $query = "INSERT INTO `s_phone_lists`(`name`, `phone`, `mobile`) VALUES ('Brony', '111000101','1111111101')";
        if (mysqli_query($connection, $query)) {
            echo "<br><h3>Data Has Been Inserted Successfully!</h3>";
        } else {
            echo "<br>Error: " . mysqli_errno($connection) . " " . mysqli_error($connection);
        }
    }
    mysqli_close($connection);
    ?>

    <p style='border-bottom: 1px solid #ddd;'>
    <h3>- Why inserting a previously inserted value in name will generate an error?</h3>
    <div style="color:white;">Because the name column is defined as unique so no duplicated elements are allowed</div>
    <br>
    <h3>- Why for phone we have used varchar and for mobile we have used char?</h3>
    <div style="color:white;">
        We used VARCHAR(10) for telephone number since the length could vary and using it indicates that the maximum is 10 byte
        which is equivalent to 10 characters since 1 byte for each character. It also allows to
        ues 10 or less. While using CHAR for mobile number is better as it's usually 10 digits.
    </div>

    <p style='margin-top:60px;font-style:italic;font-weight: bold;'>References:</p>
    <a style="color:white;" href="https://www.java67.com/2019/06/difference-between-varchar-and-char-data-type-in-sql-server.html">Difference between VARCHAR and CHAR data type in SQL Server</a>
    <br>
    <p style="font-style:italic;font-weight: bold;">Pages:</p>
    <a style="color:white;" href="Display.php">Display Page</a><br><br>
    <a style="color:white;" href="updatePage.html">Update Page</a>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>

<body style='color:#03DC01;background-color:black;font-family:courier, monospace;'>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            color: white
        }
        th {
            font-weight: bold;
        }
    </style>

    <h2 style="display: inline-block">Youmna Jaza</h2>
    <h3 style="display: inline-block;margin-left:30%;">201812214</h3>
    <p style="border-top:0.5px solid white;"></p>


    <?php
    require("db_connection.php");
   

    $query = "SELECT * FROM `s_phone_lists`"; 
    $result = mysqli_query($connection, $query); 

    echo "<h2>Data in the Database </h2>";
    if ($result) {
        echo "<table> <tr>";
        echo "<th>ID</th> <th>Name</th> <th>Phone</th> <th>Mobile</th></tr>";
        while ($result_row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$result_row[0]</td>";
            echo "<td>$result_row[1]</td>";
            echo "<td>$result_row[2]</td>";
            echo "<td>$result_row[3]</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>

    <br>
    <p style="font-style:italic;font-weight: bold;">Pages:</p>
    <a style="color:white;" href="Insert.php">Insert Page</a>
</body>
</html>
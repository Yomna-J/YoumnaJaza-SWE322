<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        table {
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            font-weight: bold;
        }
    </style>


    <?php
        include('../../../../../MyDocs/db_config.php');

        if(isset($_GET['c_code'])){
            $c_code = $_GET['c_code'];

            $query ="SELECT * FROM `courses` WHERE `c_code`='$c_code'";
            $result = mysqli_query($connection, $query);

            if ($result) {
                echo "<table> <tr>";
                echo "<th>Course Code</th> <th>Course Name</th> <th>Description</th><th>Year</th></tr>";
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

        }

    ?>

</body>
</html>

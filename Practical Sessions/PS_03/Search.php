<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
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

    <form>
        <h2>Search Type:</h2>
        <select name="search_type">
            <option name="name">Name</option>
            <option name="phone">Phone</option>
            <option name="mobile">Mobile</option>
        </select>
        <br><br>
        <input type="text" name="search_box">
        <input type="submit" value="search" name="search"><br><br>
    </form>


    <?php
    require("../PS_02/db_connection.php");

    if (isset($_GET['search']) and ($_GET['search_box'] != '')) {
        $search_type = $_GET['search_type'];

        switch ($search_type) {
            case "Name":
                search_by("name");
                break;
            case "Phone":
                search_by("phone");
                break;
            case "Mobile":
                search_by("mobile");
                break;
        }
    }

    function search_by($column_name) { #ex: name
        global $connection;
        # $name = ...
        ${$column_name} = sanitize_sql($connection, $_GET['search_box']);
        
        $query = " SELECT `id`, `name`, `phone`, `mobile` FROM `s_phone_lists` WHERE `$column_name` LIKE \"%${$column_name}%\""; #not exactly matched
        if ($result = mysqli_query($connection, $query)) {
            if (mysqli_num_rows($result) > 0) {
                $result = mysqli_query($connection, $query);
                echo "<table> <tr><th>ID</th><th>Name</th><th>Phone</th><th>Mobile</th></tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            </tr>";
                }
                echo "</table>";
            } else {
                echo "Nothing Found";
            }
        } else {
            echo "An Error has Occurred";
        }
        mysqli_close($connection);
    }
 
   
    function test_input($data){
        $data = stripslashes($data); 
        $data = trim($data); 
        return $data;
    }
    function sanitize_sql($conn, $data) {
        $data = mysqli_real_escape_string($conn, $data);
        $data = test_input($data);
        return $data;
    }


    ?>

    <br>
    <p style="font-style:italic;font-weight: bold;">Pages:</p>
    <a style="color:white;" href="../PS_02/Insert.php">Insert Page</a><br><br>
    <a style="color:white;" href="../PS_02/updatePage.html">Update Page</a><br><br>
    <a style="color:white;" href="../PS_02/Display.php">Display Page</a>


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 01</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style="background-color:#E8E8E8">
    <div class="" style="color:white;background-color:#939393;">
        <h1 style="height:100px;padding-top:20px;color:#ECECEC;text-align:center;margin:0;font-size:39px;font-family: Gotham, Tahoma, sans-serif;">My First PHP Assignment</h1>
    </div>
    <div class="container">
        <div class="row" style="padding-top:5%"> </div>
        <div class="row">
            <div class="col-sm-6" style="background-color:white;">
                <h2 style="color: #282828;font-weight: 300;font-style: italic ;text-align:left;font-size:16px;font-family: Gotham, Tahoma, sans-serif;">Name: Youmna Jaza <span style="float:right;">ID: 201812214</span></h2>
                <p style="border-top:3px solid #454545;"></p>
                <div class="row">
                    <div class="col-sm-7">
                        <div style="font-size:13px;">
                            <?php
                            echo "<b>Today's date: </b>" . date('d') . ", " . date('F') . " " . date('Y');

                            $n = 1;
                            $s = "1";
                            $n1 = $n + $s; # 2 1+1; it added them as "$s" consists of numbers only
                            $n2 = $n1 + "10 little penguins"; # 11, the string contains a leading number
                            $n3 = "hello";
                            $n4 = " world";
                            $n5 = $n3 + $n4; # 0 ; A non-numeric value;  can't be added  as + is an arithmetic operator
                            $n6 = $n3 . $n4; # hello world , concatenate 

                            echo "<b>n: </b> $n <br>";
                            echo "<b>s: </b>$s";
                            for ($i = 1; $i <= 6; $i++) {
                                echo "<br><b> n$i: </b> ${'n' .$i} ";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <?php
                            $computers = array("ENIAC", "PDP-8", "IBM 7094", "PDP-1", "IBM 5100", "Z4");
                            echo "<b>First computer in the list: </b> $computers[0]<br>";

                            $num_computers = count($computers);
                            echo "<b>Number of computers: </b> $num_computers <br>";
                            echo "<br>";
                            echo "<b>Computers: </b>";
                            for ($i = 0; $i < $num_computers; $i++) {
                                echo "<br> - $computers[$i]";
                                if ($computers[$i] == "IBM 5100") {
                                    echo " is the BEST!";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="https://image.freepik.com/free-photo/close-up-people-s-hands-working-computers_53876-15341.jpg" alt="computer image" class="img-fluid" style="padding-top:7%;max-width:100%;height:auto;">
                <p class="text-center" style="font-style:italic;font-size:10px;">Designed by Freepik</p>
            </div>
        </div>
    </div>
</body>
</html>
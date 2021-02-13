<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>

<body style="padding-bottom:50px;">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="jumbotron" style="background:#c3cdf6;">
        <h1 style="text-align:center;">PHP Basics</h1>
    </div>
    <div class="container">
        <div class="row" style="padding-top:7%;">
            <div class="col-md-7"">
                <img src="
                https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/1280px-Webysther_20160423_-_Elephpant.svg.png"
                alt="PHP" style="width:100%;padding-top:32%;">
            </div>
            <div class="col-md-5" style="font-size:22px;background-color:#c3cdf6;border-radius:22px;text-align:center">
                <h1>Youmna Jaza</h1>
                <div style="text-align:center;display:block;">
                    <button onclick="getDate()" style=" float:left;border: none;border-radius: 12px;">Today's
                        Date</button>
                    <p id="date_area" style="float:right"></p>
                    <br>
                    <br>
                    <script>
                    function getDate() {
                        var currentDay = new Date();
                        document.getElementById("date_area").innerHTML = "Date: " + currentDay.getDate() + "/" + (
                            currentDay.getMonth() + 1) + "/" + currentDay.getFullYear();
                    }
                    </script>
                    <?php
                    class Student{
                        public $name;
                        private $id;
                        public $cmpltd_courses = array();

                        function __construct(){
                            $this->create_id();
                        }
                        private function create_id(){
                            $this->id =  $this->id = "2021" . rand(10000, 99999);
                        }
                        function get_id(){
                            return $this->id;
                        }
                        function add_course($course){
                            array_push($cmpltd_courses, $course);
                        }
                        function print_cmpltd_courses(){
                            echo "<ul>";
                            foreach ($this->cmpltd_courses as $course) {
                                echo "<li><span style='left:-22%;position:relative;'>" . $course . "</span></li>";
                            }
                            echo "</ul>";
                        }
                    }
                    $student1 = new Student();
                    $student1->name = "Pranav Yngvi";
                    $student1->cmpltd_courses = ["Fundamental of Web Design", "Discrete Mathematics", "Writing Skills in Arabic"];

                    $student2 = new Student();
                    $student2->name = "Valerian Iva";
                    $student2->cmpltd_courses = ["Operating Systems", "Interactive Media", "Physics II", "Computer Architecture", "Advanced Web Programming"];

                    $student3 = new Student();
                    $student3->name = "Tóki Gani";
                    $student3->cmpltd_courses = ["Differential Equations", "Advanced User Interface Design", "Information Security", "Computer Ethics"];

                    $student4 = new Student();
                    $student4->name = "Orvokki Anapa";
                    $student4->cmpltd_courses = ["Software Quality Assurance", "Game Development", "Software Requirement Engineering", "Project Management"];


                    $students = [$student1, $student2, $student3, $student4];
                    $num_students = count($students);

                    echo "<div class='ym-grid ym-equalize'>";
                    echo "<div class='ym-g33 ym-gl'>";
                    echo "<div class='ym-gbox-left'>";
                    for ($i = 0; $i < $num_students; $i++) {
                        echo "<div class='ym-grid style='float:left;'>";
                        echo "<div class='ym-gbox' style='border-bottom: 1px solid white;text-algin:left; font-size:15px;'>";
                        echo "<p style='text-align:left;'><b>Student Name: </b>" . $students[$i]->name . "</p>";
                        echo "<p style='text-align:left;'><b>Student ID: </b>" . $students[$i]->get_id() . "</p>";
                        echo "<p style='text-align:left;'><b>Finished Courses: </b>";
                        echo "<p style='left:-144px;'>".$students[$i]->print_cmpltd_courses()."</p>";
                        if(in_array("Advanced Web Programming",$students[$i]->cmpltd_courses)){
                            echo "<p style='text-align:left'><b>This student is a Full Stack Developer!</b></p> ";
                        }
                        echo "</div></div>";
                    }
                    echo "</div></div></div>";
                    ?>
                 </div>
                </div>
          </div>
        <div>
    </div>
</body>

</html>
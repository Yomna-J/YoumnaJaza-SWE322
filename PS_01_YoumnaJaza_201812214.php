<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>

</head>

<body>
  <h3>Youmna Jaza</h3>

    <button onclick="getDate()">Today's Date</button>
    <p id="date_area"></p>
    <script>
        function getDate() {
            var currentDay = new Date();
            document.getElementById("date_area").innerHTML = "Date: " + currentDay.getDate() + "/" + (currentDay.getMonth() + 1) + "/" + currentDay.getFullYear();
        }
    </script>

    <?php
    class Student
    {
        public $name;

        private $id;
        public $cmpltd_courses = array();


        function __construct()
        {
            $this->create_id();
        }
        private function create_id()
        {
            $this->id =  $this->id = "2021" . rand(100, 100000);
        }
        function get_id()
        {
            return $this->id;
        }
        function add_course($course)
        {
            array_push($cmpltd_courses, $course);
        }
        function get_compltd_courses()
        {
            echo "Completed courses:<br>";
            foreach ($this->cmpltd_courses as $course) {
                echo "- $course <br>";
            }
        }
    }
    $student1 = new Student();
    $student1->name = "Pranav Yngvi";
    $student1->compltd_courses = ["SWE202", "PHY302", "MTH001"];

    $student2 = new Student();
    $student2->name = "Valerian Iva";
    $student2->compltd_courses = ["SWE301", "SWE411", "MTH001", "CIS304", "CIS386"];

    $student3 = new Student();
    $student3->name = "Tóki Gani";
    $student3->compltd_courses = ["MTH104", "NES483", "NES 481", "CIS304", "NES341", "CIS386"];

    $student4 = new Student();
    $student4->name = "Orvokki Anapa";
    $student4->compltd_courses = ["MIS327", "MIS329", "ARB202", "ISL202", "MTH001", "MIS428"];


    $students = [$student1, $student2, $student3, $student4];
    $num_students = count($students);
    for ($i = 0; $i < $num_students; $i++) {
       #
    }

    ?>



</body>

</html>
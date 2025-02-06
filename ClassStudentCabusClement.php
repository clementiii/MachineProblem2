<?php
class Student {
    private $id;
    private $name;
    private $course;
    private $year;
    private $section;

    public function __construct($id = '', $name = '', $course = '', $year = '', $section = '') {
        $this->id = $id;
        $this->name = $name;
        $this->course = $course;
        $this->year = $year;
        $this->section = $section;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setCourse($course) {
        $this->course = $course;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setSection($section) {
        $this->section = $section;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCourse() {
        return $this->course;
    }

    public function getYear() {
        return $this->year;
    }

    public function getSection() {
        return $this->section;
    }

    public function generateStudentCard() {
        return "
        <div class='student-card'>
            <div class='student-header'>
                <h2>" . htmlspecialchars($this->name) . "</h2>
            </div>
            <div class='student-body'>
                <div class='student-detail'>
                    <span class='detail-label'>Student ID:</span>
                    <span class='detail-value'>" . htmlspecialchars($this->id) . "</span>
                </div>
                <div class='student-detail'>
                    <span class='detail-label'>Course:</span>
                    <span class='detail-value'>" . htmlspecialchars($this->course) . "</span>
                </div>
                <div class='student-detail'>
                    <span class='detail-label'>Year:</span>
                    <span class='detail-value'>" . htmlspecialchars($this->year) . "</span>
                </div>
                <div class='student-detail'>
                    <span class='detail-label'>Section:</span>
                    <span class='detail-value'>" . htmlspecialchars($this->section) . "</span>
                </div>
            </div>
        </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .student-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .student-card:hover {
            transform: scale(1.05);
        }
        .student-header {
            background-color: #3498db;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .student-body {
            padding: 20px;
        }
        .student-detail {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            border-bottom: 1px solid #ecf0f1;
            padding-bottom: 5px;
        }
        .detail-label {
            font-weight: bold;
            color: #2c3e50;
        }
        .detail-value {
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        //first student object
        $student1 = new Student();
        $student1->setId("2021-0001");
        $student1->setName("Juan Dela Cruz");
        $student1->setCourse("Computer Science");
        $student1->setYear("2nd Year");
        $student1->setSection("A");

        //second student object
        $student2 = new Student("2021-0002", "Maria Santos", "Information Technology", "3rd Year", "B");

        echo $student1->generateStudentCard();
        echo $student2->generateStudentCard();
        ?>
    </div>
</body>
</html>
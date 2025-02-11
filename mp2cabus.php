<?php
class Student {
    private $id;
    private $name;
    private $course;
    private $year;
    private $section;
    
    // Constructor
    public function __construct($id = "", $name = "", $course = "", $year = "", $section = "") {
        $this->id = $id;
        $this->name = $name;
        $this->course = $course;
        $this->year = $year;
        $this->section = $section;
    }
    
    // Setter methods
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
    
    // Getter methods
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
    
    // Display method
    public function displayInfo() {
        $html = '<div class="student-container">';
        $html .= '<div class="student-header">';
        $html .= '<h2>Student Information (Using Display Method)</h2>';
        $html .= '</div>';
        
        $html .= '<div class="student-info"><span class="info-label">ID:</span>';
        $html .= '<span class="info-value">' . $this->id . '</span></div>';
        
        $html .= '<div class="student-info"><span class="info-label">Name:</span>';
        $html .= '<span class="info-value">' . $this->name . '</span></div>';
        
        $html .= '<div class="student-info"><span class="info-label">Course:</span>';
        $html .= '<span class="info-value">' . $this->course . '</span></div>';
        
        $html .= '<div class="student-info"><span class="info-label">Year:</span>';
        $html .= '<span class="info-value">' . $this->year . '</span></div>';
        
        $html .= '<div class="student-info"><span class="info-label">Section:</span>';
        $html .= '<span class="info-value">' . $this->section . '</span></div>';
        
        $html .= '</div>';
        return $html;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information System</title>
    <link rel="stylesheet" href="student-styles.css">
</head>
<body>
    <div class="container">
        <h1 class="main-title">Student Information System</h1>
        
        <?php
        // Creating two student objects
        $student1 = new Student("2024-0001", "John Doe", "Computer Science", "3rd", "A");
        $student2 = new Student("2024-0002", "Jane Smith", "Information Technology", "2nd", "B");

        //Display both students using displayInfo() method
        echo "<div class='display-section'>";
        echo "<h2 class='section-title'>Display Using displayInfo() Method</h2>";
        echo $student1->displayInfo();
        echo $student2->displayInfo();
        echo "</div>";

        //Display both students using getter methods
        echo "<div class='display-section'>";
        echo "<h2 class='section-title'>Display Using Getter Methods</h2>";
        
        // Display student1 using getters
        echo '<div class="student-container">';
        echo '<div class="student-header">';
        echo '<h2>Student 1 Information (Using Getters)</h2>';
        echo '</div>';
        
        echo '<div class="student-info"><span class="info-label">ID:</span>';
        echo '<span class="info-value">' . $student1->getId() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Name:</span>';
        echo '<span class="info-value">' . $student1->getName() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Course:</span>';
        echo '<span class="info-value">' . $student1->getCourse() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Year:</span>';
        echo '<span class="info-value">' . $student1->getYear() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Section:</span>';
        echo '<span class="info-value">' . $student1->getSection() . '</span></div>';
        echo '</div>';

        // Display student2 using getters
        echo '<div class="student-container">';
        echo '<div class="student-header">';
        echo '<h2>Student 2 Information (Using Getters)</h2>';
        echo '</div>';
        
        echo '<div class="student-info"><span class="info-label">ID:</span>';
        echo '<span class="info-value">' . $student2->getId() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Name:</span>';
        echo '<span class="info-value">' . $student2->getName() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Course:</span>';
        echo '<span class="info-value">' . $student2->getCourse() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Year:</span>';
        echo '<span class="info-value">' . $student2->getYear() . '</span></div>';
        
        echo '<div class="student-info"><span class="info-label">Section:</span>';
        echo '<span class="info-value">' . $student2->getSection() . '</span></div>';
        echo '</div>';
        
        echo "</div>";
        ?>
    </div>
</body>
</html>
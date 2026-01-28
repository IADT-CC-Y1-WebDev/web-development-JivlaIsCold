<?php

require_once __DIR__ . '/Student.php';

class Undergrad extends StudentAccount {
    protected $course;
    protected $year;



     public function __construct($Name, $Num, $Course, $Year) {
        echo "Constructing Profile";
        parent::__construct($Name, $Num);
        
        $this->course = $Course;
        $this->year = $Year;
        

       

    }



    public function getCourse() {
        return $this->course;
    }
    public function getYear() {
        return $this->year;
    }
}
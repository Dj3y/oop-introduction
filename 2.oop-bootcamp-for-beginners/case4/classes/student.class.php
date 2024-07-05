<?php 
    class student{
        private string $name;
        private float $grade;

        public function __construct(string $name, float $grade){
            $this->name = $name;
            $this->grade = $grade;
        }

        // recover the name of student
        public function getName(){
            return $this->name;
        }

        // recover the grade of student
        public function getGrade(){
            return $this->grade;
        }

        // add a grade 
        public function setGrade($grade){
            $this->$grade = $grade;
        }
    }
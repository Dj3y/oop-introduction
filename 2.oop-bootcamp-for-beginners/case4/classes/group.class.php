<?php
    class group{
        private array $students = [];

        public function addStudent(student $student){
            $this->students[] = $student;
        }
        
        public function calculateAverage(){
            $totalGrade = 0;
            foreach($this->students as $student){
                $totalGrade += $student->getGrade();
            }
            if(count($this->students) >0){
                return $totalGrade /count($this->students);
            }
            else{
                return 0;
            }
        }

        // recover the students with the high grade
        public function getTopStudent(){
            if(count($this->students) === 0){
                return null;
            }
            $topStudent = $this->students[0];
            foreach($this->students as $student){
                if($student->getGrade() >$topStudent->getGrade()){
                    $topStudent = $student;
                }
            }
            return $topStudent;
        }
        // recover the students with the lower grade
        public function getLowerStudent(){
            if(count($this->students) === 0){
                return null;
            }
            $lowerStudent = $this->students[0];
            foreach($this->students as $student){
                if($student->getGrade() >$lowerStudent->getGrade()){
                    $lowerStudent = $student;
                }
            }
            return $lowerStudent;
        }

        public function printStudents(){
            foreach($this->students as $student){
                echo "{$student->getName()} score {$student->getGrade()}" . PHP_EOL;
            }
        }

        public function moveStudentto(student $student, group $toGroup){
            $this->students = array_filter($this->students, function ($s) use ($student){
                return $s != $student;
            });
            $toGroup->addStudent($student);
        }
    }
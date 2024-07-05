<?php 
    // There's two groups, both of 10 students. 
    // Provide an easy way to calculate the average score of a group.
    // Add a function to move a student from one group to another.
    // Show the average score of both groups. Move the top student from one group with the lowest scoring student from another. Show the averages again - how were these affected?

    // forces PHP to strictly enforce variable types, thus reducing errors due to incorrect types.
    declare(strict_types=1);
    
    // call the classes we need in the folder classes
    require_once("classes/student.class.php");
    require_once("classes/group.class.php");

    // create two groups of students
    $group1 = new group();
    $group2 = new group();

    // create array with students and grade
    $students1 = [
        new student('Harry', 80),
        new student('Ron', 75),
        new student('Hermione', 90),
        new student('Drago', 60),
        new student('Albus', 85),
        new student('Voldemort', 55),
        new student('Dobby', 67),
        new student('Neville', 62),
        new student('James', 79),
        new student('Lily', 82)
    ];

    $students2 = [
        new student('Luna', 70),
        new student('Cedric', 55),
        new student('Minerva', 89),
        new student('Sirius', 77),
        new student('Peter', 50),
        new student('Viktor', 82),
        new student('Bellatrix', 59),
        new student('Ginny', 75),
        new student('Fred', 65),
        new student('George', 66)
    ]; 

    foreach ($students1 as $student) {
        $group1->addStudent($student);
    }

    foreach ($students2 as $student) {
        $group2->addStudent($student);
    }
    
    echo "Group 1 Students:" . "<br>";
    $group1->printStudents();
    echo "Group 2 Students:" . "<br>";
    $group2->printStudents();

    echo "<br>Group 1 Average " . $group1->calculateAverage() . "<br>";
    echo "Group 2 Average " . $group2->calculateAverage() . "<br>";

    $topStudentGroup1 = $group1->getTopStudent();
    $lowerStudentGroup2 = $group2->getLowerStudent();
    
    $group1->moveStudentTo($topStudentGroup1, $group2);
    $group2->moveStudentTo($lowerStudentGroup2, $group1);

    echo "<br>After moving students into other group" . "<br>";
    echo "Group 1 Students:" . "<br>";
    $group1->printStudents();
    echo "Group 2 Students:" . "<br>";
    $group2->printStudents();
    echo "<br>Group 1 Average " . $group1->calculateAverage() . "<br>";
    echo "Group 2 Average " . $group2->calculateAverage() . "<br>";

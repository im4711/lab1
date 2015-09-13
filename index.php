<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        # make the student class usable
        include('Student.php');
        
        # initialize an array of students
        $students = array();
        
        # create John Doe along with his emails and grades
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        # add John to the student array
        $students['j123'] = $first;
        
        # create Albert Einstein along with his emails and grades
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@brainiacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        #add Albert to the student array
        $students['a456'] = $second;
        
        #sort the student array
        ksort($students);
        
        # iterate throught the student array and display each student
        foreach($students as $student)
            echo $student->toString();
        
        ?>
    </body>
</html>

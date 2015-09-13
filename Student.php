<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * A student class
 *
 * @author a00848501
 */
class Student {
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * adds an email to a particular student's list of email addresses
     * @param type $which
     * @param type $address
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * adds a grade to a particular student's list of grades
     * @param type $grade
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * averages the students grades
     * @return type
     */
    function average() {
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    /**
     * displays a formatted string detailing a student's name, email, average
     * grade
     * @return type
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '<pre>';
    }
}

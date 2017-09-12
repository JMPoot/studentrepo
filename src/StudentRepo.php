<?php

include "Database.php";
include "Student.php";

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "studentdb");

class StudentRepo
{
    private $db;
    private $student;

    public function __construct()
    {
        $this->db = new Database();
        $this->student = new Student();
    }

    public function getStudent($id)
    {
        $this->db->query("SELECT * FROM students WHERE id = $id");
        $result = $this->db->single();
        return $result;
    }

    public function getStudents()
    {
        $this->db->query("SELECT * FROM students");
        $result = $this->db->resultset();
        return $result;
    }
}
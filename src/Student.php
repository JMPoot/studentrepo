<?php

class Student
{
    private $id;
    private $first_name;
    private $last_name;

    public function __construct($id = '', $first_name = '', $last_name = '')
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }
}
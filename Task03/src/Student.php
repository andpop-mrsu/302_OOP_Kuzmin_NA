<?php

namespace App;

class Student
{
    private static $idCounter = 1;
    private $id;
    private $last_name;
    private $first_name;
    private $faculty;
    private $course;
    private $group;

    public function __construct()
    {
        $this->id = self::$idCounter++;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getLastname()
    {
        return $this->last_name;
    }

    public function setLastname($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getFirstname()
    {
        return $this->first_name;
    }

    public function setFirstname($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getFaculty()
    {
        return $this->faculty;
    }

    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    public function __toString()
    {
        return "Id: {$this->id}\nФамилия: {$this->last_name}\nИмя: {$this->first_name}\nФакультет: {$this->faculty}\nКурс: {$this->course}\nГруппа: {$this->group}\n";
    } 
}
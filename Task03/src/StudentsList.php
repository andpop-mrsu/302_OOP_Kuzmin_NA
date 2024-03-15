<?php

namespace App;

require_once 'Student.php';

class StudentsList
{
    private $students = [];

    public function add(Student $student)
    {
        $this->students[] = $student;
        return $this;
    }

    public function count()
    {
        return count($this->students);
    }

    public function get($n)
    {
        return isset($this->students[$n]) ? $this->students[$n] : null;
    }

    public function store($fileName)
    {
        file_put_contents($fileName, serialize($this->students));
    }

    public function load($fileName)
    {
        if (file_exists($fileName)) {
            $this->students = unserialize(file_get_contents($fileName));
        }
    }
}
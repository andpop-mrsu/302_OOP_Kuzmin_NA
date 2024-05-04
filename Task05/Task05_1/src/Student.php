<?php

namespace App;

class Student
{
    private static $globalId = 1;

    private $id;
    private $lastname;
    private $name;
    private $faculty;
    private $course;
    private $group;

    public function __construct(string $lastname, string $name, string $faculty, int $course, string $group)
    {
        $this->id = self::$globalId++;
        $this->lastname = $lastname;
        $this->name = $name;
        $this->faculty = $faculty;
        $this->course = $course;
        $this->group = $group;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setFaculty(string $faculty)
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function getFaculty(): string
    {
        return $this->faculty;
    }

    public function setCourse(int $course)
    {
        $this->course = $course;
        return $this;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setGroup(string $group)
    {
        $this->group = $group;
        return $this;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function __toString()
    {
        $string = "Id: $this->id" . PHP_EOL .
        "Фамилия: $this->lastname" . PHP_EOL .
        "Имя: $this->name" . PHP_EOL .
        "Факультет: $this->faculty" . PHP_EOL .
        "Группа: $this->group" . PHP_EOL;
        return $string;
    }
}

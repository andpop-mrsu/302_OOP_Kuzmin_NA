<?php

require_once 'vendor/autoload.php';

use App\Student;
use App\StudentsList;

function runTest()
{
      $student1 = new Student();
      $student1->setLastname("Дыр")
            ->setFirstname("Дырыч")
            ->setFaculty("ФМиИТ")
            ->setCourse(3)
            ->setGroup(302);

      $student2 = new Student();
      $student2->setLastname("Яни")
            ->setFirstname("Гер")
            ->setFaculty("МФ")
            ->setCourse(2)
            ->setGroup(201);

      $student3 = new Student();
      $student3->setLastname("Сейджуро")
            ->setFirstname("Акаши")
            ->setFaculty("ФФК")
            ->setCourse(3)
            ->setGroup(303);
      
      $student4 = new Student();
      $student4->setLastname("Дайки")
            ->setFirstname("Аомине")
            ->setFaculty("ФФК")
            ->setCourse(3)
            ->setGroup(303);

      $student5 = new Student();
      $student5->setLastname("Курседов")
            ->setFirstname("Кирилл")
            ->setFaculty("ФМиИК")
            ->setCourse(1)
            ->setGroup(103);

      echo $student1;
      echo "\n";
      echo $student2;
      echo "\n";
      echo $student3;
      echo "\n";
      echo $student4;
      echo "\n";
      echo $student5;
      echo "\n";

      $studentsList = new StudentsList();
      $studentsList->add($student1)
            ->add($student2);

      echo "Количество студентов: " . $studentsList->count() . "\n";
      echo "Первый студент: " . $studentsList->get(0) . "\n";

      $studentsList->store('students.txt');
      $studentsList->load('students.txt');

      echo "Количество студентов после загрузки: " . $studentsList->count() . "\n";
      echo "Первый студент после загрузки: " . $studentsList->get(0) . "\n";
}
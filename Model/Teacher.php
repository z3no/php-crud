<?php
declare(strict_types=1);


class Teacher extends Student
{
    private string $listOfStudents;

    /**
     * @param string $listOfStudents
     */
    public function __construct(string $name, string $email, string $group, string $assignedTeacher, string $listOfStudents)
    {
        parent::__construct($name, $email, $group, $assignedTeacher);
        $this->listOfStudents = $listOfStudents;
    }
}
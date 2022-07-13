<?php
declare(strict_types=1);


class Student
{
    private string $name;
    private string $email;
    private string $group;
    private string $assignedTeacher;

    /**
     * @param string $name
     * @param string $email
     * @param string $group
     * @param string $assignedTeacher
     */
    public function __construct(string $name, string $email, string $group, string $assignedTeacher)
    {
        $this->name = $name;
        $this->email = $email;
        $this->group = $group;
        $this->assignedTeacher = $assignedTeacher;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getAssignedTeacher(): string
    {
        return $this->assignedTeacher;
    }
}


<?php

class Student
{
    private int $id;
    private string $name;
    private string $email;
    private string $group_id;



    public function __construct(array $studentDataRow)
    {
        $this->id = $studentDataRow['id'];
        $this->name = $studentDataRow['name'];
        $this->email = $studentDataRow['email'];
        $this->group_id = $studentDataRow['group_id'];
    }

    /**
     * @return int|mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @param int|mixed $id
     */
    public function setId(mixed $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail(): mixed
    {
        return $this->email;
    }

    /**
     * @param mixed|string $email
     */
    public function setEmail(mixed $email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed|string
     */
    public function getGroup(): mixed
    {
        return $this->group;
    }

    /**
     * @param mixed|string $group
     */
    public function setGroup(mixed $group): void
    {
        $this->group = $group;
    }

    /**
     * @return mixed|string
     */
    public function getAssignedTeacher(): mixed
    {
        return $this->assignedTeacher;
    }

    /**
     * @param mixed|string $assignedTeacher
     */
    public function setAssignedTeacher(mixed $assignedTeacher): void
    {
        $this->assignedTeacher = $assignedTeacher;
    }
}



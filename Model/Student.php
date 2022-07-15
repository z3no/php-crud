<?php

class Student
{
    private int $id;
    private string $name;
    private string $email;
    private string $group_name;



    public function __construct(array $studentDataRow)
    {
        $this->id = $studentDataRow['id'];
        $this->name = $studentDataRow['name'];
        $this->email = $studentDataRow['email'];
        $this->group_name = $studentDataRow['group_name'];
    }

    /**
     * @return int|mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail(): mixed
    {
        return $this->email;
    }

    /**
     * @return mixed|string
     */
    public function getGroupId(): mixed
    {
        return $this->group_name;
    }

}



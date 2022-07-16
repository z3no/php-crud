<?php

class Teacher {
    private int $id;
    private string $name;
    private string $email;


    public function __construct(array $teacherDataRow)
    {
        $this->id = $teacherDataRow['id'];
        $this->name = $teacherDataRow['name'];
        $this->email = $teacherDataRow['email'];

    }

    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail()
    {
        return $this->email;
    }


}
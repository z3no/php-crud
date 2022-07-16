<?php

declare(strict_types=1);

class Group
{
    private int $id;
    private string $name;
    private int $teacherID;
    private string $teacherName;
    private int $campusID;
    private string $campusName;

    /**
     * @param int $id
     * @param string $name
     * @param int $teacherID
     * @param int $campusID
     */
    public function __construct(array $groupDataRow)
    {
        $this->id = $groupDataRow['id'];
        $this->name = $groupDataRow['name'];
        $this->teacherID = $groupDataRow['teacher_id'];
        $this->teacherName = $groupDataRow['teacher_name'];
        $this->campusID = $groupDataRow['campus_id'];
        $this->campusName = $groupDataRow['campus_name'];
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
     * @return int|mixed
     */
    public function getTeacherID(): mixed
    {
        return $this->teacherID;
    }

    /**
     * @param int|mixed $teacherID
     */
    public function setTeacherID(mixed $teacherID): void
    {
        $this->teacherID = $teacherID;
    }

    /**
     * @return mixed|string
     */
    public function getTeacherName(): mixed
    {
        return $this->teacherName;
    }

    /**
     * @param mixed|string $teacherName
     */
    public function setTeacherName(mixed $teacherName): void
    {
        $this->teacherName = $teacherName;
    }

    /**
     * @return int|mixed
     */
    public function getCampusID(): mixed
    {
        return $this->campusID;
    }

    /**
     * @param int|mixed $campusID
     */
    public function setCampusID(mixed $campusID): void
    {
        $this->campusID = $campusID;
    }

    /**
     * @return mixed|string
     */
    public function getCampusName(): mixed
    {
        return $this->campusName;
    }

    /**
     * @param mixed|string $campusName
     */
    public function setCampusName(mixed $campusName): void
    {
        $this->campusName = $campusName;
    }

}
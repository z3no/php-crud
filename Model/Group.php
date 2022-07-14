<?php

declare(strict_types=1);

class Group
{
    private int $id;
    private string $name;
    private int $teacherID;
    private int $campusID;

    /**
     * @param int $id
     * @param string $name
     * @param int $teacherID
     * @param int $campusID
     */
    public function __construct(int $id, string $name, int $teacherID, int $campusID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->teacherID = $teacherID;
        $this->campusID = $campusID;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getTeacherID(): int
    {
        return $this->teacherID;
    }

    /**
     * @param int $teacherID
     */
    public function setTeacherID(int $teacherID): void
    {
        $this->teacherID = $teacherID;
    }

    /**
     * @return int
     */
    public function getCampusID(): int
    {
        return $this->campusID;
    }

    /**
     * @param int $campusID
     */
    public function setCampusID(int $campusID): void
    {
        $this->campusID = $campusID;
    }

}
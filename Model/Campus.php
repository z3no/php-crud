<?php

class Campus
{

    private int $id;
    private string $name;
    private string $location;


    public function __construct(array $campusDataRow){

        $this->id = $campusDataRow['id'];
        $this->name = $campusDataRow['name'];
        $this->location = $campusDataRow['location'];

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
    public function getLocation(): mixed
    {
        return $this->location;
    }

    /**
     * @param mixed|string $location
     */
    public function setLocation(mixed $location): void
    {
        $this->location = $location;
    }

}

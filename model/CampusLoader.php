<?php

class CampusLoader extends DataSource
{
    public function getCampus(): array
    {
        $allCampusNames = [];

        $sql = "SELECT id, name, location FROM campus_table";
        $stmt =self::connect()->query($sql);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $campus = new Campus($row);
            array_push($allCampusNames, $campus);
        }
        return $allCampusNames;
    }

    public function createCampus($name,$location)
    {
        $sql = "INSERT INTO campus_table (name, location) values ('$name','$location')";
        $this->connect()->exec($sql);
    }

    public function deleteCampus($id){
        $sql="DELETE FROM campus_table WHERE id=" .$id;
        $this->connect()->exec($sql);
    }
    /*public function deleteCampus(int $id): void{
        $sql = 'delete from campus_table where id =' . $id;
        $this->connect()->query($sql);
    }*/
    /*public function getCampusById($id): array
    {
       $sql = "SELECT * FROM campus_table WHERE ID =" . $id;
        $stmt = $this->connect()->query($sql);
        $idCampus[]= $stmt->fetch(PDO::FETCH_ASSOC);
        return $idCampus;
    }

    public function editCampus(int $id, $newName, $newLocation)
    {
        $sql = "UPDATE campus_table SET name = :name, location= :location WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':name'=>$newName, ':location'=>$newLocation, ':id'=>$id));
    }*/

}
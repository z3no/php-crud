<?php



class CampusController
{
    public function render($GET, $POST)
    {
        $campusData = new CampusLoader();


        if(isset($POST['confirm_Add'])){
        $newCampusName = $POST['newCampusName'];
        $newLocationName = $POST['newLocationName'];
        $campusData->createCampus($newCampusName,$newLocationName);
        //var_dump($newCampusName);
        //var_dump($newLocationName);
        }

        if (isset($POST['remove'])){
            $deleteCampus = $POST['remove'];
            $campusData->deleteCampus($deleteCampus);
        }
        $showAllCampus = $campusData->getCampus();

        require 'view/campusview.php';
    }

}


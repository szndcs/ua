<?php
namespace models\AdvertisementsModel;

use controllers\MysqlController\MysqlController as MySQL;

/**
 * Handle advertisements table
 */
class AdvertisementsModel extends MySQL {

    /**
     * Returns all the advertisements
     * @param null
     * 
     * @return array the result
     */
    public function getAdvertisements() :array
    {
        $query = $this->connect->query("SELECT ad.*, users.name AS username FROM advertisements AS ad LEFT JOIN users ON ad.userid = users.id");
        $result = $query->fetch_all(MYSQLI_BOTH);
        $query->free();
        return $result;
    }
}
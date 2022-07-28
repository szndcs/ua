<?php
namespace models\UsersModel;

use controllers\MysqlController\MysqlController as MySQL;

// Handle users table
class UsersModel extends MySQL {

    /**
     * Returns all the users
     * @param null
     * 
     * @return array the result
     */
    public function getUsers() :array
    {
        $query = $this->connect->query("SELECT * FROM users");
        $result = $query->fetch_all(MYSQLI_BOTH);
        $query->free();
        return $result;
    }
}
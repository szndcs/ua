<?php
namespace controllers\MysqlController;

use mysqli;

// Main controller to handle MySQL connections
class MysqlController {

    protected $connect;
    public function __construct()
    {
        $this->connect = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
        $this->connect->set_charset('utf8mb4');
    }

}
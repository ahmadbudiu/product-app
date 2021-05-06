<?php

namespace App\Controllers;

use App\Exceptions\MySQLErrorConnectionException;
use Config\Database;

class Controller
{
    protected $connection;

    public function __construct()
    {
        try {
            $this->connection = Database::connect();
        } catch (MySQLErrorConnectionException $e) {
            die('Can not connect to database');
        }
    }

    public function response($data)
    {
        return json_encode($data);
    }

}
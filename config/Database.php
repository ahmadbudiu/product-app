<?php

namespace Config;

use App\Exceptions\MySQLErrorConnectionException;

class Database
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'alumagubi';

    public function __construct()
    {
        //
    }

    /**
     * @throws MySQLErrorConnectionException
     */
    public function setup()
    {
        $mysqli = \mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($mysqli->connect_error) {
            throw new MySQLErrorConnectionException();
        }
        return $mysqli;
    }

    /**
     * @return bool
     * @throws MySQLErrorConnectionException
     */
    public static function connect()
    {
        return (new static())->setup();
    }
}

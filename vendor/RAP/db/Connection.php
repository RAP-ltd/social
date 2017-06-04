<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 18:58
 */

namespace RAP\db;

class Connection
{
    protected $config;
    protected $connection;

    public function __construct($configFile = 'db')
    {
        $this->config = require_once ROOT . '/config/' . $configFile . '.php';
    }

    public function connect()
    {
        $this->connection = new \MySQLi($this->config['host'], $this->config['user'], $this->config['pass'], $this->config['db']);
        return $this->connection;
    }

    public function close()
    {
        $this->connection->close();
        $this->connection = null;
    }
}
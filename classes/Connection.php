<?php




require_once __DIR__.'/../autoload.php';


class Connection
    extends PDO
{
    public function __construct(){
        $config = require __DIR__.'/../config.php';
        $dsn = $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];
        parent::__construct($dsn, $config['user'], $config['password']);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    }

}
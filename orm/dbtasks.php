<?php
namespace orm;

use config\Connect;
use PDO;

class DbTasks {
    private $tableName;
    private $con;
    public function __construct() {
        $this->tableName =  strtolower(substr(get_called_class(), 4));
        $connect = new Connect();
        $this->con = $connect->startConnection();
    }

    public function getAll() {
        $sth = $this->con->prepare("
          SELECT *
          FROM ".$this->tableName);

        $sth->execute();
        return $sth->fetchAll();
    }

    public function getBy($column, $value) {
        $sth = $this->con->prepare("
          SELECT *
          FROM ".$this->tableName."
          Where ".$column." = :clm");
        $sth->execute(array(':clm' => $value));

        return $sth->fetch(PDO::FETCH_ASSOC);
    }
}
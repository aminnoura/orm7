<?php
namespace config;
use modules\logger\Logger;
use PDO, PDOException;

class Connect {
    /**
     * @var string[]
     */
    private $connectionDatabase;

    public function __construct() {
        $config = new Config();
        $this->connectionDatabase = $config->getDatabaseInfo();
    }

    /**
     * @return bool
     */
    public function startConnection () {
        // extract data of the database
        $servername = $this->connectionDatabase["host"];
        $username = $this->connectionDatabase["username"];
        $password = $this->connectionDatabase["password"];
        $database = $this->connectionDatabase["database"];

        // get logger
        $logger = new Logger();

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $logger->addLog("Connected successfully -> ".date("Y-m-d H:i:s"));
            return true;
        } catch(PDOException $e) {
            $logger->addLog("Connection failed: -> ".$e->getMessage()." -> ".date("Y-m-d H:i:s"));
            return false;
        }
    }
}

<?php
class DBController {
    private $host = "interchange.proxy.rlwy.net"; // Railway MySQL Host
    private $user = "root"; // Railway MySQL Username
    private $password = "HeRlbEZqGItFQHokaJcDoCvmOlZhjWOr"; // Railway MySQL Password
    private $database = "railway"; // Railway Database Name
    private $port = 53082; // Railway MySQL Port
    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->database}", 
                $this->user, 
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database Connection Failed: " . $e->getMessage());
        }
    }
}
?>

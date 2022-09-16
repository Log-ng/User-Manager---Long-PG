<?php
class User {
    private $conn;
    private $table = 'user';

    public $username;
    public $password;
    public $fullName;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO $this->table (username, password, fullName) VALUES (?, ?, ?)";
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->fullName = htmlspecialchars(strip_tags($this->fullName));

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->password);
        $stmt->bindParam(5, $this->fullName);

        return $stmt->execute();
    }
    public function read() {
        $query = 'SELECT * FROM ' . $this->table . ';';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}

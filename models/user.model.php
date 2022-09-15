<?php
class User {
    private $conn;
    private $table = 'user';

    public $user_id;
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

        // Prepare statement
        $stmt = $this->conn->prepare($query);
        // Bind ID
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->password);
        $stmt->bindParam(5, $this->fullName);

        // Execute query
        return $stmt->execute();
    }
    public function read() {
        // Create query
        $query = 'SELECT * FROM ' . $this->table . ';';
        // Prepare statement
        $stmt = $this->conn->prepare($query);
        // Execute query
        $stmt->execute();
        return $stmt;
    }
}

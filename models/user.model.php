<?php
class User {
    private $conn;
    private $table = 'user';

    public $username;
    public $password;
    public $fullname;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO $this->table (username, password, fullname) VALUES (?, ?, ?)";
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->fullname = htmlspecialchars(strip_tags($this->fullname));

        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(1, $this->username);
        $stmt->bindParam(2, $this->password);
        $stmt->bindParam(3, $this->fullname);

        return $stmt->execute();
    }
    
    public function read() {
        $query = 'SELECT * FROM ' . $this->table . ';';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function validate() {
        $validateFullname = strlen($this->fullname) >= 3 and strlen($this->fullname) <= 20;
        $validateusername= strlen($this->username) >= 3 and strlen($this->fullname) <= 10;
        $validatePassword = strlen($this->password) >= 2 and strlen($this->fullname) <= 8;
        return $validateFullname and $validateusername and $validatePassword;
    }
}

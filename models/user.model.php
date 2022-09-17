<?php
class User {
    private $conn;
    public $table = 'user';

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
        $query = 'SELECT * FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function validate() {
        $validateFullname = strlen($this->fullname) >= 3 and strlen($this->fullname) <= 30;
        $validateusername= strlen($this->username) >= 3 and strlen($this->fullname) <= 10;
        $validatePassword = strlen($this->password) >= 2 and strlen($this->fullname) <= 8;

        return $validateFullname and $validateusername and $validatePassword;
    }

    public function checkUsername() {

        $query = 'SELECT username FROM ' . $this->table . ' WHERE username=?';
        $stmt = $this->conn->prepare($query);

        $stmt->execute([$this->username]);
        $user = $stmt->fetch();
        return ! $user;
    }

    public function totalUser() {
        $query = 'SELECT count(*) as userCount FROM ' . $this->table;
        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $count = $stmt->fetchColumn();
        return $count;
    }

    public function authLogin() {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE username=?';
        $stmt = $this->conn->prepare($query);

        $stmt->execute([$this->username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            return password_verify($this->password, $user['password']);
        }
        return false;
    }
}

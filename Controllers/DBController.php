<?php
    class DBController {
        private $dbHost = "localhost";
        private $dbUser = "root";
        private $dbPass = "";
        private $dbName = "homestay";
        private $conn;

        public function openConnection() {
             $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
             if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
             }
             else {
                return $this->conn;
             }
        }
        
        public function closeConnection() {
            if ($this->conn) {
                $this->conn->close();
            }
            else {
                echo "No connection to close";
            }
        }
        
        public function select($query) {
            $result = $this->conn->query($query);
            if ($result) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                echo "Error: " . mysqli_error($this->conn);
                return false;
            }
        }
        
        public function insert(string $query, string $types, array $params): bool {
            $stmt = $this->conn->prepare($query);
            if (!$stmt) return false;
            
            $stmt->bind_param($types, ...$params);
            $result = $stmt->execute();
            $stmt->close();
            return $result;
        }
                
    }
?>
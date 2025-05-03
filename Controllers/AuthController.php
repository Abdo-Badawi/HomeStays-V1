<?php
include_once '../Models/User.php';
use Models\User;
include_once '../Controllers/DBController.php';
    class AuthController {
        protected $db;
        
        public function login(User $user){
            $this->db = new DBController();
            if($this->db->openConnection()){
                $query = "SELECT * FROM users WHERE email = ? AND password = ?";
                $params = [$user->getEmail(), $user->getPassword()];
                $result = $this->db->selectPrepared($query, "ss", $params);
   
                if($result === false){
                    echo "Error in query";
                    return false;
                }
                else {
                    if(count($result) == 0){
                        session_start();
                        $_SESSION['errMsg'] = "Invalid email or password";
                        return false;
                    }
                    else {
                        session_start();
                        $_SESSION['userID'] = $result[0]['user_id'];
                        $_SESSION['firstName'] = $result[0]['first_name'];
                        $_SESSION['userType'] = $result[0]['user_type'];
                        return true;
                    }                    
                }
            }
            else {
                echo "Connection failed";
                return false;
            }
            
        }
    } 
?>
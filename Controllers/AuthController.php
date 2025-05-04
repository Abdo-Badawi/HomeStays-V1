<?php
include_once '../Models/User.php';
use Models\User;
include_once '../Controllers/DBController.php';

class AuthController {
    public $db;
    
    public function login(User $user){
        session_start(); // Always start the session first
        
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
                    $_SESSION['errMsg'] = "Invalid email or password";
                    return false;
                }
                else {
                    // Set session variables
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

    public function logout(){
        session_start(); // Always start the session first
        
        // Unset all session variables
        $_SESSION = array();
        
        // Destroy the session cookie
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }
        
        // Destroy the session
        session_destroy();
        
        // Redirect to login page
        header("Location: login.php");
        exit();
    }
}
?>

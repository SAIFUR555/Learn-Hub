<?php
session_start(); 

require_once '../model/db.php'; 

$loginError = "";

// Check if login form was submitted
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    //trim to remove any extra spaces

   
    $mentor = get_mentor_by_username($conn, $username);

    if ($mentor) {
  
        if (password_verify($password, $mentor['password'])) 
        //password_verify checks if the provided password matches the hashed password stored in the database
        
        {
            
            $_SESSION['mentor_id'] = $mentor['id'];
            $_SESSION['username'] = $mentor['username'];
            $_SESSION['email'] = $mentor['connected_email'];

            header("Location: ../view/mentordashboard.php");
            exit;
        } else {
            $loginError = "Incorrect password.";
        }
    } else {
        $loginError = "Username not found.";
    }

    $conn->close();
}
?>

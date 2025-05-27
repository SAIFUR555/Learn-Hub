<?php
session_start();
require_once('../Model/studentdb.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = trim($_POST['student_id']);
    $password = trim($_POST['password']);

    // Create DB connection
    $conn = createConnObj();

    // Use procedural way function for authentication
    $result = authenticateStudent($conn, $student_id, $password);

    if ($result && mysqli_num_rows($result) === 1) {
        $_SESSION['student_id'] = $student_id;
        $_SESSION['password'] = $password;
        header("Location: ../view/dashboard.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid student ID or password.";
        header("Location: ../view/login.php");
        exit();
    }
}
?>

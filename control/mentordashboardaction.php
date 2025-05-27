<?php
if (session_status() === PHP_SESSION_NONE)
 {
    session_start();
 }
 // Start the session if not already started

require_once '../model/db.php';

if (!isset($_SESSION['mentor_id'])) {
    exit;
    //if not logged in, stop the script
}

$mentor_id = $_SESSION['mentor_id'];
$mentor = get_mentor_by_id($conn, $mentor_id); 
// returns an associative array

// Handle email, phone, and present address update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['new_email']) && filter_var($_POST['new_email'], FILTER_VALIDATE_EMAIL)) {
        update_mentor_email($conn, $mentor_id, $_POST['new_email']);
        $mentor = get_mentor_by_id($conn, $mentor_id);
        // Refresh the mentor data after update
        echo "<script>alert('Email updated successfully!');</script>";
    }
    if (isset($_POST['new_phone']) && preg_match('/^\d{11}$/', $_POST['new_phone'])) {
        update_mentor_phone($conn, $mentor_id, $_POST['new_phone']);
        $mentor = get_mentor_by_id($conn, $mentor_id);
        echo "<script>alert('Phone updated successfully!');</script>";
    }
    if (isset($_POST['new_Paddress']) && !empty(trim($_POST['new_Paddress']))) {
        update_mentor_present_address($conn, $mentor_id, trim($_POST['new_Paddress']));
        $mentor = get_mentor_by_id($conn, $mentor_id);
        echo "<script>alert('Present address updated successfully!');</script>";
    }
    if (isset($_POST['delete_account'])) {
        delete_mentor_account($conn, $mentor_id);
        session_destroy();
        header("Location: mentor_login.php");
        exit;
    }
}
?>

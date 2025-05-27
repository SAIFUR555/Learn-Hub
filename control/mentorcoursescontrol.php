<?php
session_start();
require_once '../model/db.php';
require_once '../control/mentorcoursescontrol.php';
//require_once is sames as require, but it checks if the file has already been included before, preventing multiple inclusions.

if (!isset($_SESSION['mentor_id'])) {
    header("Location: mentor_login.php");
    exit;
}

$mentor_id = $_SESSION['mentor_id'];

// Get all courses and current mentor's courses
$courses = get_all_courses($conn);
$current_courses = get_mentor_course_codes($conn, $mentor_id);
?>
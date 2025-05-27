<?php

require_once '../model/db.php';
include '../control/mentorcoursescontrol.php';

if (!isset($_SESSION['mentor_id'])) {
    header("Location: mentor_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Courses</title>
    <link rel="stylesheet" type="text/css" href="../css/mentor.css">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 20px;
        }
        .grid-item {
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Your Courses</h1>
    
    <div class="grid-container">
        <?php foreach ($courses as $course): ?>
            <div class="grid-item">
                <label>
                    <input type="checkbox" disabled 
                        <?php if (in_array($course['code'], $current_courses)) echo 'checked'; ?>>
                    <?php echo $course['code'] . ' - ' . $course['title']; ?>
                </label>
            </div>
        <?php endforeach; ?>
    </div>

    <br>
    <a href="mentordashboard.php">Back to Dashboard</a>
    <div class="logout" style="margin-top:10px;">
        <a href="../control/logout.php" style="color:red; font-weight:bold;">Logout</a>
    </div>
</body>
</html>
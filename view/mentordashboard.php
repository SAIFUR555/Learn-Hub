<?php
session_start();
include '../model/db.php';
include '../control/mentordashboardaction.php';

if (!isset($_SESSION['mentor_id'])) {
    header("Location: mentor_login.php");
    exit;
}
// check if mentor_id is set in session
// if not, redirect to login page


if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = '';
}
//check if username is set in session
// if not, set it to an empty string (show Welcome, with no name)

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mentor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/mentor.css">
</head>
<body>

<h1>Mentor Dashboard</h1>

<h2>Welcome, <?php echo $username; ?></h2>

<h3>Personal Information</h3>
<p><strong>Name:</strong> <?php echo $mentor['fname']; ?></p>
<p><strong>Date of Birth:</strong> <?php echo $mentor['dob']; ?></p>
<p><strong>Age:</strong> <?php echo $mentor['age']; ?></p>
<p><strong>Gender:</strong> <?php echo $mentor['gender']; ?></p>
<p><strong>Email:</strong> <?php echo $mentor['email']; ?></p>
<p><strong>Phone:</strong> <?php echo $mentor['phone']; ?></p>
<p><strong>Present Address:</strong> <?php echo $mentor['present_address']; ?></p>

<h3>Update Email</h3>
<form method="post">
    <input type="email" name="new_email" placeholder="New Email" required>
    <input type="submit" value="Update Email">
</form>

<h3>Update Phone</h3>
<form method="post">
    <input type="text" name="new_phone" placeholder="New Phone (11 digits)" pattern="\d{11}" required>
    <input type="submit" value="Update Phone">
</form>

<h3>Update Present Address</h3>
<form method="post">
    <textarea name="new_Paddress" placeholder="Enter new present address" required></textarea>
    <br>
    <input type="submit" value="Update Present Address">
</form>

<!-- Delete Account Button -->
<form method="post" onsubmit="return confirm('Delete your account?');">
    <input type="hidden" name="delete_account" value="1"> 
    <!--adds a hidden field to the form.
When you click "Delete Account", the form sends delete_account=1 to the server, so the server knows you want to delete your account.-->
    <input type="submit" value="Delete Account">
</form>
<div style="margin-top:20px;">
    <form action="mentor_courses.php" method="get" style="display:inline;">
        <button type="submit">Manage Courses</button>
    </form>
</div>

<br><br>

<div class="logout">
    <a href="../control/logout.php" style="color:red; font-weight:bold;">Logout</a>
</div>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Action Page</title>
</head>
<body>

<h2>Submitted Information</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<p>Username: <b>{$_POST['username']}</b></p>";
    echo "<p>First Name: <b>{$_POST['fname']}</b></p>";
    echo "<p>Last Name: <b>{$_POST['lname']}</b></p>";
    echo "<p>Date of Birth: <b>{$_POST['dob']}</b></p>";
    echo "<p>Age: <b>{$_POST['age']}</b></p>";
    echo "<p>Gender: <b>{$_POST['gender']}</b></p>";
    echo "<p>Present Address: <b>{$_POST['Paddress']}</b></p>";
    echo "<p>Permanent Address: <b>{$_POST['P2address']}</b></p>";
    echo "<p>Phone: <b>{$_POST['phone']}</b></p>";
    echo "<p>Email: <b>{$_POST['email']}</b></p>";
    echo "<p>Linkedin: <b>{$_POST['linkedin']}</b></p>";
    echo "<p>Github: <b>{$_POST['github']}</b></p>";
    echo "<p>University Degree: <b>{$_POST['subject']}</b></p>";
    echo "<p>Institute: <b>{$_POST['institute']}</b></p>";
    echo "<p>Year: <b>{$_POST['year']}</b></p>";
    echo "<p>School: <b>{$_POST['school']}</b></p>";
    echo "<p>College: <b>{$_POST['college']}</b></p>";
    echo "<p>Previous Organization & Address: <b>{$_POST['organization']}</b></p>";
    echo "<p>Designation: <b>{$_POST['designation']}</b></p>";
    echo "<p>Duration: <b>{$_POST['duration']}</b></p>";
    echo "<p>Tutoring Subjects: <b>" . implode(", ", $_POST['subject']) . "</b></p>";
    echo "<p>Available Days: <b>" . implode(", ", $_POST['days']) . "</b></p>";
    echo "<p>Preferred Time: <b>From {$_POST['time_from']} to {$_POST['time_to']}</b></p>";
    echo "<p>Interested in Offline Teaching: <b>{$_POST['offline_teaching']}</b></p>";
    

} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>
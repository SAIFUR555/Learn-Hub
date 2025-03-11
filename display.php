<?php
// Check if the form data is received through POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Student Registration Information</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='8'>";

    // Display the submitted form values
    echo "<tr><th>Full Name:</th><td>" . htmlspecialchars($_POST['name']) . "</td></tr>";
    echo "<tr><th>Student ID:</th><td>" . htmlspecialchars($_POST['student_id']) . "</td></tr>";
    echo "<tr><th>Date of Birth:</th><td>" . htmlspecialchars($_POST['dob']) . "</td></tr>";

    // Gender radio buttons
    echo "<tr><th>Gender:</th><td>" . htmlspecialchars($_POST['gender']) . "</td></tr>";

    // Nationality dropdown
    echo "<tr><th>Nationality:</th><td>" . htmlspecialchars($_POST['nationality']) . "</td></tr>";

    // Contact details
    echo "<tr><th>Email:</th><td>" . htmlspecialchars($_POST['email']) . "</td></tr>";
    echo "<tr><th>Phone:</th><td>" . htmlspecialchars($_POST['phone']) . "</td></tr>";
    echo "<tr><th>Address:</th><td>" . htmlspecialchars($_POST['address']) . "</td></tr>";

    // Department and background
    echo "<tr><th>Department:</th><td>" . htmlspecialchars($_POST['department']) . "</td></tr>";
    echo "<tr><th>Previous Education:</th><td>" . htmlspecialchars($_POST['education']) . "</td></tr>";

    // Guardian details
    echo "<tr><th>Guardian's Name:</th><td>" . htmlspecialchars($_POST['guardian_name']) . "</td></tr>";
    echo "<tr><th>Guardian's Contact:</th><td>" . htmlspecialchars($_POST['guardian_phone']) . "</td></tr>";

    // Course preferences
    echo "<tr><th>Preferred Language:</th><td>" . htmlspecialchars($_POST['preferred_language']) . "</td></tr>";
    echo "<tr><th>Have You Taken Online Courses Before:</th><td>" . htmlspecialchars($_POST['online_experience']) . "</td></tr>";

    // Social Media & Communication
    echo "<tr><th>LinkedIn Profile:</th><td>" . htmlspecialchars($_POST['linkedin']) . "</td></tr>";
    echo "<tr><th>GitHub Profile:</th><td>" . htmlspecialchars($_POST['github']) . "</td></tr>";

    // Additional fields
    echo "<tr><th>Hobbies/Interests:</th><td>" . htmlspecialchars($_POST['hobbies']) . "</td></tr>";

    // Course Time & Payment
    echo "<tr><th>Preferred Course Time:</th><td>" . htmlspecialchars($_POST['course_time']) . "</td></tr>";
    echo "<tr><th>Course Fee:</th><td>" . htmlspecialchars($_POST['course_fee']) . "</td></tr>";
    echo "<tr><th>Preferred Payment Method:</th><td>" . htmlspecialchars($_POST['payment_method']) . "</td></tr>";
    echo "<tr><th>Payment Status:</th><td>" . htmlspecialchars($_POST['payment_status']) . "</td></tr>";

    echo "</table>";
}
else {
    echo "<p>No data submitted yet.</p>";
}
?>

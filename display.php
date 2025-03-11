<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Details</title>
</head>
<body>

<h2>Form Submission Details</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting and sanitizing the POST data
    $name = htmlspecialchars($_POST['name']);
    $student_id = htmlspecialchars($_POST['student_id']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $nationality = htmlspecialchars($_POST['nationality']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $emergency_contact = htmlspecialchars($_POST['emergency_contact']);
    $department = htmlspecialchars($_POST['department']);
    $education = htmlspecialchars($_POST['education']);
    $academic_interests = htmlspecialchars($_POST['academic_interests']);
    $guardian_name = htmlspecialchars($_POST['guardian_name']);
    $guardian_relationship = htmlspecialchars($_POST['guardian_relationship']);
    $guardian_phone = htmlspecialchars($_POST['guardian_phone']);
    $preferred_language = htmlspecialchars($_POST['preferred_language']);
    $online_experience = htmlspecialchars($_POST['online_experience']);
    $learning_goals = htmlspecialchars($_POST['learning_goals']);
    $linkedin = htmlspecialchars($_POST['linkedin']);
    $github = htmlspecialchars($_POST['github']);
    $contact_method = htmlspecialchars($_POST['contact_method']);
    $employed = htmlspecialchars($_POST['employed']);
    $hobbies = htmlspecialchars($_POST['hobbies']);
    $course_time = htmlspecialchars($_POST['course_time']);
    $course_fee = htmlspecialchars($_POST['course_fee']);
    $payment_method = htmlspecialchars($_POST['payment_method']);
    $payment_status = htmlspecialchars($_POST['payment_status']);

    // Displaying the submitted data
    echo "<h3>Student Information:</h3>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Student ID:</strong> $student_id</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Nationality:</strong> $nationality</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Emergency Contact:</strong> $emergency_contact</p>";
    
    echo "<h3>Department & Background:</h3>";
    echo "<p><strong>Department:</strong> $department</p>";
    echo "<p><strong>Previous Education:</strong> $education</p>";
    echo "<p><strong>Academic Interests:</strong> $academic_interests</p>";
    
    echo "<h3>Parent/Guardian Information:</h3>";
    echo "<p><strong>Guardian's Name:</strong> $guardian_name</p>";
    echo "<p><strong>Relationship:</strong> $guardian_relationship</p>";
    echo "<p><strong>Guardian's Contact:</strong> $guardian_phone</p>";
    
    echo "<h3>Course Preferences:</h3>";
    echo "<p><strong>Preferred Language:</strong> $preferred_language</p>";
    echo "<p><strong>Online Course Experience:</strong> $online_experience</p>";
    echo "<p><strong>Learning Goals:</strong> $learning_goals</p>";
    
    echo "<h3>Social Media & Communication:</h3>";
    echo "<p><strong>LinkedIn:</strong> $linkedin</p>";
    echo "<p><strong>GitHub:</strong> $github</p>";
    echo "<p><strong>Preferred Contact Method:</strong> $contact_method</p>";
    
    echo "<h3>Additional Information:</h3>";
    echo "<p><strong>Employed:</strong> $employed</p>";
    echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    
    echo "<h3>Course Time & Payment:</h3>";
    echo "<p><strong>Preferred Course Time:</strong> $course_time</p>";
    echo "<p><strong>Course Fee:</strong> $course_fee</p>";
    echo "<p><strong>Preferred Payment Method:</strong> $payment_method</p>";
    echo "<p><strong>Payment Status:</strong> $payment_status</p>";

    echo "<p>Your account has been created successfully!</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>

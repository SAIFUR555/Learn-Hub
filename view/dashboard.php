
<?php
session_start();
require_once('../Model/studentdb.php');

// Create DB connection
$conn = createConnObj();

// Redirect if not logged in
if (!isset($_SESSION['student_id']) || !isset($_SESSION['password'])) {
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];
$password = $_SESSION['password'];

// Fetch student info using model function
$result = getStudentByIdAndPassword($conn, $student_id, $password);

if (mysqli_num_rows($result) === 1) {
    $student = mysqli_fetch_assoc($result);
} else {
    echo "Invalid student ID or password.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>

    <h2>Welcome, <?php echo htmlspecialchars($student['name']); ?>!</h2>

    <table>
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Student ID</td><td><?php echo htmlspecialchars($student['student_id']); ?></td></tr>
        <tr><td>Name</td><td><?php echo htmlspecialchars($student['name']); ?></td></tr>
        <tr><td>Date of Birth</td><td><?php echo htmlspecialchars($student['dob']); ?></td></tr>
        <tr><td>Gender</td><td><?php echo htmlspecialchars($student['gender']); ?></td></tr>
        <tr><td>Nationality</td><td><?php echo htmlspecialchars($student['nationality']); ?></td></tr>
        <tr><td>Email</td><td><?php echo htmlspecialchars($student['email']); ?></td></tr>
        <tr><td>Phone</td><td><?php echo htmlspecialchars($student['phone']); ?></td></tr>
        <tr><td>Address</td><td><?php echo htmlspecialchars($student['address']); ?></td></tr>
        <tr><td>Emergency Contact</td><td><?php echo htmlspecialchars($student['emergency_contact']); ?></td></tr>
        <tr><td>Department</td><td><?php echo htmlspecialchars($student['department']); ?></td></tr>
        <tr><td>Education</td><td><?php echo htmlspecialchars($student['education']); ?></td></tr>
        <tr><td>Guardian Name</td><td><?php echo htmlspecialchars($student['guardian_name']); ?></td></tr>
        <tr><td>Guardian Phone</td><td><?php echo htmlspecialchars($student['guardian_phone']); ?></td></tr>
        <tr>
            <td>Student Picture</td>
            <td>
                <?php if (!empty($student['student_picture'])): ?>
                    <img src="../uploads/<?php echo htmlspecialchars($student['student_picture']); ?>" alt="Student Picture" width="150">
                <?php else: ?>
                    No picture uploaded.
                <?php endif; ?>
            </td>
        </tr>
    </table>

    <!-- Show Courses Button at the bottom -->
    <div class="btn-container">
        <a href="courses.php" class="btn">Show Courses</a>
        <a href="studentprofile.php" class="btn edit-btn">Edit Info</a>
    </div>

</body>
</html>

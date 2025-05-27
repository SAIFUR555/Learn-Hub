<?php
session_start();

require_once('../model/studentdb.php');

// Create DB connection
$conn = createConnObj();

// Redirect if not logged in
if (!isset($_SESSION['student_id']) || !isset($_SESSION['password'])) {
    header("Location: login.php");
    exit();
}

// Fetch all courses using model function
$result = getAllCourses($conn);

if (!$result) {
    die("Error fetching courses: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>All Courses</title>
    <link rel="stylesheet" href="../css/course.css" />
</head>
<body>

<h2>All Available Courses</h2>

<div style="margin-bottom: 16px;">
    <a href="dashboard.php">
        <button type="button">Back to Dashboard</button>
    </a>
</div>

<table>
    <thead>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Course Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($course = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo htmlspecialchars($course['course_id']); ?></td>
            <td><?php echo htmlspecialchars($course['course_name']); ?></td>
            <td><?php echo htmlspecialchars($course['course_code']); ?></td>
            <td><?php echo htmlspecialchars($course['course_description']); ?></td>
            <td>
                <form action="enroll_course.php" method="POST" style="display:inline;">
                    <input type="hidden" name="course_id" value="<?php echo $course['course_id']; ?>">
                    <button type="submit">Enroll</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>

<?php
mysqli_close($conn);
?>

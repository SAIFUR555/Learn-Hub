<?php
session_start();
include('../model/studentdb.php');
global $conn;

if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];

// Enroll course
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['course_id'])) {
    $course_id = $_POST['course_id'];

    // Fix: getEnrolledCourses returns an array, but isStudentEnrolled expects course_id as string
    if (isStudentEnrolled($conn, $student_id, $course_id)) {
        $message = "<p style='color:red;'>You have already enrolled in this course.</p>";
    } else {
        // enrollStudentInCourse returns true/false, but may not return true on success if using mysqli_query
        if (enrollStudentInCourse($conn, $student_id, $course_id) === true || enrollStudentInCourse($conn, $student_id, $course_id) == 1) {
            $message = "<p style='color:green;'>Successfully enrolled in the course!</p>";
        } else {
            $message = "<p style='color:red;'>Error enrolling: " . mysqli_error($conn) . "</p>";
        }
    }
}

// ✅ Unenroll course
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['unenroll_course_id'])) {
    $unenroll_course_id = $_POST['unenroll_course_id'];

    if (unenrollStudentFromCourse($conn, $student_id, $unenroll_course_id)) {
        $message = "<p style='color:green;'>Successfully unenrolled from the course.</p>";
    } else {
        $message = "<p style='color:red;'>Error unenrolling: " . mysqli_error($conn) . "</p>";
    }
}

// Fetch enrolled courses
$enrolledCourses = getEnrolledCourses($conn, $student_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enrolled Courses</title>
    <link rel="stylesheet" href="../css/course.css">
    <link rel="stylesheet" href="../css/enroll_course.css">
</head>
<body>

<h2>Enrollment Status</h2>
<?php if (isset($message)) echo $message; ?>

<h3>Your Enrolled Courses</h3>
<table>
    <thead>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course Code</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($enrolledCourses as $row): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['course_id']); ?></td>
            <td><?php echo htmlspecialchars($row['course_name']); ?></td>
            <td><?php echo htmlspecialchars($row['course_code']); ?></td>
            <td><?php echo htmlspecialchars($row['course_description']); ?></td>
            <td>
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="unenroll_course_id" value="<?php echo $row['course_id']; ?>">
                    <button type="submit" class="unenroll">Unenroll</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="courses.php">Back to Courses</a>

</body>
</html>

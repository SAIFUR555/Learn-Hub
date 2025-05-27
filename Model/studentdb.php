<?php

$host = "localhost";
$dbname = "LearnHub";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $dbname);
// mysqli_connect is built-in PHP function that attempts to connect to a MySQL database server.

if (!$conn)
{
    die();
    // If the connection fails, it will stop the script.
}

function insertStudent($conn, $table, $student_id, $password, $name, $dob, $gender, $nationality, $email, $phone, $address, $emergency_contact, $department, $education, $guardian_name, $guardian_phone, $picture) 
// the parameters come from the registration form
{
    $qry = "INSERT INTO $table (
        student_id, password, name, dob, gender, nationality, email, phone, address,
        emergency_contact, department, education, guardian_name, guardian_phone, student_picture
    ) VALUES (
        '$student_id', '$password', '$name', '$dob', '$gender', '$nationality', '$email', '$phone', '$address',
        '$emergency_contact', '$department', '$education', '$guardian_name', '$guardian_phone', '$picture'
    )";
    // query is a string that contains an SQL INSERT statement to add a new student to the database.

    $result = mysqli_query($conn, $qry);

    if ($result === false) {
        // Check for duplicate entry (student_id already exists)
        if (mysqli_errno($conn) == 1062) {
            return "You must give a unique ID";
        } else {
            return "Error: " . $conn->error;
        }
    } else {
        return true;
    }
}

function getAllCourses($conn)
// Get all courses
{
    $courses = [];
    $result = mysqli_query($conn, "SELECT * FROM course");
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }
    return $courses;
}

function getStudentByIdAndPassword($conn, $student_id, $password)
// Used for login
{
    $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password'");
    return mysqli_fetch_assoc($result);
}

function closeConn($conn)
{
    mysqli_close($conn);
}

function isStudentEnrolled($conn, $student_id, $course_id) {
    $result = mysqli_query($conn, "SELECT * FROM `student courses` WHERE `student id` = '$student_id' AND `course id` = '$course_id'");
    return mysqli_num_rows($result) > 0;
}

function enrollStudentInCourse($conn, $student_id, $course_id) {
    // Prevent duplicate enrollment
    if (isStudentEnrolled($conn, $student_id, $course_id)) {
        return false;
    }
    $sql = "INSERT INTO `student courses` (`student id`, `course id`) VALUES ('$student_id', '$course_id')";
    return mysqli_query($conn, $sql);
}

function unenrollStudentFromCourse($conn, $student_id, $course_id)
{
    $sql = "DELETE FROM `student courses` WHERE `student id` = '$student_id' AND `course id` = '$course_id'";
    return mysqli_query($conn, $sql);
}

function getEnrolledCourses($conn, $student_id)
{
    $courses = [];
    $result = mysqli_query($conn, "
        SELECT DISTINCT c.course_id, c.course_name, c.course_code, c.course_description 
        FROM course c
        JOIN `student courses` sc ON c.course_id = sc.`course id`
        WHERE sc.`student id` = '$student_id'
    ");
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }
    return $courses;
}

function authenticateStudent($conn, $student_id, $password)
{
    $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id = '$student_id' AND password = '$password'");
    return $result;
}

function getStudentProfileById($conn, $student_id)
{
    $result = mysqli_query($conn, "SELECT * FROM student WHERE student_id = '$student_id'");
    return $result;
}

function updateStudentProfile($conn, $student_id, $name, $dob, $gender, $nationality, $email, $phone, $address, $department, $education, $emergency_contact, $guardian_name, $guardian_phone, $student_picture)
{
    if ($student_picture) {
        $sql = "UPDATE student SET name='$name', dob='$dob', gender='$gender', nationality='$nationality', email='$email', phone='$phone', address='$address', department='$department', education='$education', emergency_contact='$emergency_contact', guardian_name='$guardian_name', guardian_phone='$guardian_phone', student_picture='$student_picture' WHERE student_id='$student_id'";
    } else {
        $sql = "UPDATE student SET name='$name', dob='$dob', gender='$gender', nationality='$nationality', email='$email', phone='$phone', address='$address', department='$department', education='$education', emergency_contact='$emergency_contact', guardian_name='$guardian_name', guardian_phone='$guardian_phone' WHERE student_id='$student_id'";
        $sql = "UPDATE student SET name='$name', dob='$dob', gender='$gender', nationality='$nationality', email='$email', phone='$phone', address='$address', department='$department', education='$education', emergency_contact='$emergency_contact', guardian_name='$guardian_name', guardian_phone='$guardian_phone' WHERE student_id='$student_id'";
    }mysqli_query($conn, $sql);
    mysqli_query($conn, $sql);
}
?>
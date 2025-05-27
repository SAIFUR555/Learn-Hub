<?php

function createConnObj() 

{
    // Connect to MySQL (DB name: LearnHub)
    return mysqli_connect("localhost", "root", "", "LearnHub");
}

function insertStudent($conn, $table, $student_id, $password, $name, $dob, $gender, $nationality, $email, $phone, $address, $emergency_contact, $department, $education, $guardian_name, $guardian_phone, $picture) {
    $qry = "INSERT INTO $table (
        student_id, password, name, dob, gender, nationality, email, phone, address,
        emergency_contact, department, education, guardian_name, guardian_phone, student_picture
    ) VALUES (
        '$student_id', '$password', '$name', '$dob', '$gender', '$nationality', '$email', '$phone', '$address',
        '$emergency_contact', '$department', '$education', '$guardian_name', '$guardian_phone', '$picture'
    )";

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

function getAllCourses($conn) {
    $sql = "SELECT * FROM course";
    return mysqli_query($conn, $sql);
}

function getStudentByIdAndPassword($conn, $student_id, $password) {
    $sql = "SELECT * FROM student WHERE student_id = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $student_id, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}

function closeConn($conn) {
    mysqli_close($conn);
}

function isStudentEnrolled($conn, $student_id, $course_id) {
    $sql = "SELECT * FROM `student courses` WHERE `student id` = ? AND `course id` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $student_id, $course_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return mysqli_num_rows($result) > 0;
}

function enrollStudentInCourse($conn, $student_id, $course_id) {
    $sql = "INSERT INTO `student courses` (`student id`, `course id`) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $student_id, $course_id);
    return mysqli_stmt_execute($stmt);
}

function unenrollStudentFromCourse($conn, $student_id, $course_id) {
    $sql = "DELETE FROM `student courses` WHERE `student id` = ? AND `course id` = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $student_id, $course_id);
    return mysqli_stmt_execute($stmt);
}

function getEnrolledCourses($conn, $student_id) {
    $sql = "
        SELECT c.course_id, c.course_name, c.course_code, c.course_description 
        FROM course c
        JOIN `student courses` sc ON c.course_id = sc.`course id`
        WHERE sc.`student id` = ?
    ";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $student_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}

function authenticateStudent($conn, $student_id, $password) {
    $sql = "SELECT * FROM student WHERE student_id = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $student_id, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}

function getStudentProfileById($conn, $student_id) {
    $sql = "SELECT * FROM student WHERE student_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $student_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    return $result;
}

function updateStudentProfile($conn, $student_id, $name, $dob, $gender, $nationality, $email, $phone, $address, $department, $education, $emergency_contact, $guardian_name, $guardian_phone, $student_picture) {
    if ($student_picture) {
        $sql = "UPDATE student SET name=?, dob=?, gender=?, nationality=?, email=?, phone=?, address=?, department=?, education=?, emergency_contact=?, guardian_name=?, guardian_phone=?, student_picture=? WHERE student_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssssssssssss", $name, $dob, $gender, $nationality, $email, $phone, $address, $department, $education, $emergency_contact, $guardian_name, $guardian_phone, $student_picture, $student_id);
    } else {
        $sql = "UPDATE student SET name=?, dob=?, gender=?, nationality=?, email=?, phone=?, address=?, department=?, education=?, emergency_contact=?, guardian_name=?, guardian_phone=? WHERE student_id=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssssssssssss", $name, $dob, $gender, $nationality, $email, $phone, $address, $department, $education, $emergency_contact, $guardian_name, $guardian_phone, $student_id);
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}



?>

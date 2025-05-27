<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Controller</title>
</head>
<body>

<?php
include('../model/studentdb.php');

$nameError = $studentIdError = $passwordError = $dobError = $genderError = $emailError = $phoneError = $educationError = $addressError = "";
$hasError = false;

if (isset($_POST["Submit"])) {
    if (empty($_POST["student_id"])) {
        $studentIdError = "Student ID is required";
        $hasError = true;
    } else {
        $student_id = $_POST["student_id"];
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
        $hasError = true;
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["name"])) {
        $nameError = "Name is required";
        $hasError = true;
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["dob"])) {
        $dobError = "Date of Birth is required";
        $hasError = true;
    } else {
        $dob = $_POST["dob"];
    }

    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
        $hasError = true;
    } else {
        $gender = $_POST["gender"];
    }

    $nationality = $_POST["nationality"] ?? "";

    if (empty($_POST["email"])) {
        $emailError = "Email is required";
        $hasError = true;
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
        $hasError = true;
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required";
        $hasError = true;
    } else {
        $phone = $_POST["phone"];
        if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
            $phoneError = "Invalid phone number format";
            $hasError = true;
        }
    }

    if (empty($_POST["address"])) {
        $addressError = "Address is required";
        $hasError = true;
    } else {
        $address = $_POST["address"];
    }

    // Optional fields
    $emergency_contact = $_POST["emergency_contact"] ?? "";
    $department = $_POST["department"] ?? "";
    $education = $_POST["education"] ?? "";
    $guardian_name = $_POST["guardian_name"] ?? "";
    $guardian_phone = $_POST["guardian_phone"] ?? "";
    // $student_picture = $_FILES["student_picture"]["name"] ?? ""; // Removed

    // Check if there are no errors
    if (
        empty($nameError) && empty($studentIdError) && empty($dobError) &&
        empty($genderError) && empty($emailError) && empty($phoneError) &&
        empty($passwordError)
    ) {
        $conn = createConnObj();
        $table = "student";

        // Removed image upload logic

        $result = insertStudent(
            $conn,
            $table,
            $student_id,
            $password,
            $name,
            $dob,
            $gender,
            $nationality,
            $email,
            $phone,
            $address,
            $emergency_contact,
            $department,
            $education,
            $guardian_name,
            $guardian_phone,
            "" // Pass empty string for student_picture
        );

        closeConn($conn);

        if ($result === true) {
            header("Location: ../view/success.php");
        
        } else {
            echo "<p>Error inserting student: " . $result . "</p>";
        }
    }
}
?>

</body>
</html>

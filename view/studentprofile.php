<?php
session_start(); // Start the session to track logged-in users

// If student is not logged in, redirect to login page
if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

include('../model/studentdb.php'); // Include database connection and functions
$conn = createConnObj(); // Create a database connection
$student_id = $_SESSION["student_id"]; // Get student ID from session

// If the form was submitted (POST request)
if ($_SERVER["REQUEST_METHOD"] == "POST") 

{
    // Collect and sanitize form inputs
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $nationality = $_POST["nationality"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $department = $_POST["department"];
    $education = $_POST["education"];
    $emergency_contact = $_POST["emergency_contact"];
    $guardian_name = $_POST["guardian_name"];
    $guardian_phone = $_POST["guardian_phone"];

    // Initialize picture filename
    $student_picture = "";

   // Check if file is uploaded without error
if (isset($_FILES["student_picture"]) && $_FILES["student_picture"]["error"] == 0) {

    // Folder to save the picture
    $folder = "../uploads/";

    // Get the file extension (like jpg, png)
    $ext = pathinfo($_FILES["student_picture"]["name"], PATHINFO_EXTENSION);

    // Create a unique file name
    $new_name = "student_" . $student_id . "_" . time() . "." . $ext;

    // Full path of file to save
    $full_path = $folder . $new_name;

    // Move uploaded file to uploads folder
    if (move_uploaded_file($_FILES["student_picture"]["tmp_name"], $full_path)) {
        $student_picture = $new_name; // Save file name for database
    }
}

    // Call model function to update profile
    updateStudentProfile($conn, $student_id, $name, $dob, $gender, $nationality, $email, $phone, $address, $department, $education, $emergency_contact, $guardian_name, $guardian_phone, $student_picture);

    // Fetch updated student data
    $result = getStudentProfileById($conn, $student_id);
    $student = mysqli_fetch_assoc($result);
    $success = "Profile updated successfully!";
} else {
    // If form not submitted, just load student data
    $result = getStudentProfileById($conn, $student_id);
    $student = mysqli_fetch_assoc($result);
}

// Close the database connection
closeConn($conn);

//student data jdi pawa na jay   show error
if (!$student) {
    echo "<p>Student not found.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <link rel="stylesheet" href="../css/studentprofile.css"> <!-- Link to external CSS -->
</head>
<body>
    <div class="profile-container">
        <h2>Edit Your Profile</h2>
        <?php if (!empty($success)) echo "<p style='color:green;'>$success</p>"; ?> <!-- Show success message -->
        <form method="POST" enctype="multipart/form-data"> <!-- Form for updating profile -->
            <table cellpadding="10">
                <tr><th colspan="2">Profile Information</th></tr>
                <tr>
                    <td><strong>Student ID:</strong></td>
                    <td><?php echo htmlspecialchars($student['student_id']); ?></td> <!-- Display student ID -->
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td><input type="text" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required></td>
                </tr>
                <tr>
                    <td><strong>Date of Birth</strong></td>
                    <td><input type="date" name="dob" value="<?php echo htmlspecialchars($student['dob']); ?>" required></td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>
                        <select name="gender" required>
                            <option value="male" <?php if($student['gender']=='male') echo 'selected'; ?>>Male</option>
                            <option value="female" <?php if($student['gender']=='female') echo 'selected'; ?>>Female</option>
                            <option value="other" <?php if($student['gender']=='other') echo 'selected'; ?>>Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><strong>Nationality</strong></td>
                    <td><input type="text" name="nationality" value="<?php echo htmlspecialchars($student['nationality']); ?>"></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td><input type="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required></td>
                </tr>
                <tr>
                    <td><strong>Phone</strong></td>
                    <td><input type="text" name="phone" value="<?php echo htmlspecialchars($student['phone']); ?>" required></td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td><input type="text" name="address" value="<?php echo htmlspecialchars($student['address']); ?>" required></td>
                </tr>
                <tr>
                    <td><strong>Department</strong></td>
                    <td><input type="text" name="department" value="<?php echo htmlspecialchars($student['department']); ?>"></td>
                </tr>
                <tr>
                    <td><strong>Previous Education</strong></td>
                    <td><input type="text" name="education" value="<?php echo htmlspecialchars($student['education']); ?>"></td>
                </tr>
                <tr>
                    <td><strong>Emergency Contact</strong></td>
                    <td><input type="text" name="emergency_contact" value="<?php echo htmlspecialchars($student['emergency_contact']); ?>"></td>
                </tr>
                <tr>
                    <td><strong>Guardian's Name</strong></td>
                    <td><input type="text" name="guardian_name" value="<?php echo htmlspecialchars($student['guardian_name']); ?>"></td>
                </tr>
                <tr>
                    <td><strong>Guardian's Phone</strong></td>
                    <td><input type="text" name="guardian_phone" value="<?php echo htmlspecialchars($student['guardian_phone']); ?>"></td>
                </tr>
                <tr>
                    <td><strong>Picture</strong></td>
                    <td>
                        <?php if ($student['student_picture']): ?>
                            <img src="../uploads/<?php echo htmlspecialchars($student['student_picture']); ?>" width="120" alt="Student Picture"><br>
                        <?php endif; ?>
                        <input type="file" name="student_picture" accept="image/*"> <!-- Upload field -->
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Update Profile"> <!-- Submit button -->
                        <button type="button" class="back-btn" onclick="window.history.back();">Back</button> <!-- Back button -->
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

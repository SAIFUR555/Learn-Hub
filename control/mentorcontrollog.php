<?php

$usernameError = "";
$emailError = "";
$passwordError = "";
$phoneError = "";

require_once '../model/db.php';

if (isset($_REQUEST["Submit"])) {

    // Username validation
    if (empty($_REQUEST["username"])) {
        $usernameError = "Username is required";
    } else {
        $username = $_REQUEST["username"];
    }

    // Email validation
    if (empty($_REQUEST["connected_email"])) {
        $emailError = "Email is required";
    } elseif (!filter_var($_REQUEST["connected_email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    } else {
        $connected_email = $_REQUEST["connected_email"];
    }

    // Password validation
    if (empty($_REQUEST["password"])) {
        $passwordError = "Password is required";
    } elseif (strlen($_REQUEST["password"]) < 5) {
        $passwordError = "Password must be at least 5 characters long";
    } elseif ($_REQUEST["password"] !== $_REQUEST["confirm_password"]) {
        $passwordError = "Passwords do not match";
    } else {
        // Hash the password before storing
        $password = password_hash($_REQUEST["password"], PASSWORD_DEFAULT);
        // password_hash() is a PHP function that hashes a password using a strong one-way hashing algorithm.
        // PASSWORD_DEFAULT is a constant that uses the default algorithm (currently bcrypt).
    }

    // Phone number validation
    if (empty($_REQUEST["phone"])) {
        $phoneError = "Phone number is required";
    } elseif (!preg_match('/^\d{11}$/', $_REQUEST["phone"])) {
        $phoneError = "Invalid phone number. It must be 11 digits.";
    } else {
        $phone = $_REQUEST["phone"];
    }

    if ($usernameError == "" && $emailError == "" && $passwordError == "" && $phoneError == "") {

       
        $photo = $_FILES['photo']['name'];
        $cv = $_FILES['cv']['name'];
        /*$_FILES is a superglobal array in PHP that contains information about files uploaded via HTTP POST method.
        The 'name' attribute contains the original name of the uploaded file.*/

    
        move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/" . $photo);
        move_uploaded_file($_FILES['cv']['tmp_name'], "../uploads/" . $cv);
        /*move_uploaded_file() is a PHP function that moves an uploaded file to a parmanet location on server.
        $_FILES['photo']['tmp_name'] is the temporary name of the uploaded file on the server.
        "...uploads/" . $photo creates a full file path like ../uploads/myphoto.jpg . */

    if (isset($_REQUEST['days'])) {
        $available_days = implode(",", $_REQUEST['days']);
    } 
    else {
    $available_days = "";
    }
    //isset()checks if a variable is set and is not NULL.
    //implode() is a PHP function that joins array elements in a a string.
        

     
        $mentor_id = insert_mentor(
            
            $conn,
            $username,
            $password,
            $connected_email,//already requested above
            $_REQUEST["fname"],
            $_REQUEST["lname"],
            $_REQUEST["dob"],
            $_REQUEST["age"],
            $_REQUEST["gender"],
            $_REQUEST["Paddress"],
            $_REQUEST["P2address"],
            $phone,
            $_REQUEST["email"],
            $_REQUEST["linkedin"],
            $_REQUEST["github"],
            $_REQUEST["subject"],
            $_REQUEST["institute"],
            $_REQUEST["year"],
            $_REQUEST["school"],
            $_REQUEST["college"],
            $_REQUEST["organization"],
            $_REQUEST["designation"],
            $_REQUEST["duration"],
            $available_days,
            $_REQUEST["time_from"],
            $_REQUEST["time_to"],
            $_REQUEST["offline_teaching"],
            $photo,
            $cv
        );

        if (!empty($_REQUEST['course'])) {
            foreach ($_REQUEST['course'] as $courseText) {
                $code = explode(" -", $courseText)[0];
                insert_mentor_course($conn, $mentor_id, $code);
            }
        }
        //exploade() split the course by " - " and take the first part as code.

        $conn->close();
        // close() is a method


       echo "<script>
              alert('Registration successful! Please login.');
              location.href = '../view/mentor_login.php';
             </script>";
     
        //This changes the browser's current page to the specified URL like header() in PHP.

        exit;
        // exit() is a function that terminates the current script.
    }
}
?>

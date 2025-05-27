<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LearnHub Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="../js/login.js" defer></script> <!-- JS file linked -->
</head>
<body>

<div class="login-box">
    <h1>Welcome to LearnHub</h1>
    <h2>Student Login</h2>
    
    <?php
    session_start();
    if (isset($_SESSION['login_error'])) {
        echo "<p style='color:red'>" . $_SESSION['login_error'] . "</p>";
        unset($_SESSION['login_error']); // Clear after showing once
    }
    ?>
    
    <form onsubmit="validateLoginForm(event)" method="POST" action="../control/login_process.php">

        <label for="student_id">Student ID</label>
        <input type="text" id="student_id" name="student_id">
        <span id="studentIdError" style="color:red;"></span>

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <span id="passwordError" style="color:red;"></span>

        <div class="btn-group">
            <button type="submit">Login</button>
            <button type="button" onclick="window.location.href='student.php'">Register</button>
        </div>
    </form>
</div>

</body>
</html>

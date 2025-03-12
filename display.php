<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form Created or Not</title>
</head>
<body>

<h2>Student Registration Status</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Your student registration form has been created successfully.</p>";
} else {
    echo "<p>Registration failed. No data submitted.</p>";
}
?>

</body>
</html>

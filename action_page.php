<!DOCTYPE html>
<html>
<head>
    <title>Action Page</title>
</head>
<body>

<h2>Account Created Successfully</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Your account has been created successfully.</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>
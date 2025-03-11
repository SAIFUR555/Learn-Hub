<!DOCTYPE html>
<html>
<head>
    <title>Action Page</title>
</head>
<body>

<h2>Account Created Successfully</h2>

<?php //Php code block
if ($_SERVER["REQUEST_METHOD"] == "POST") //Check if the form was submitted using POST method
{
    echo "<p>Your account has been created successfully.</p>";
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>
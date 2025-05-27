<?php
include '../control/mentorloginaction.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mentor Login</title>
    <link rel="stylesheet" href="../css/mentor.css">
</head>
<body>

<h1>Mentor Login</h1>

<form method="post" action="">
    <table>
        <tr>
            <td><label for="username">Username:</label></td>
            <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
            <td><label for="password">Password:</label></td>
            <td><input type="password" name="password" id="password" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="login" value="Login">
            </td>
        </tr>
    </table>
    <div style="color:red;">
        <?php if (!empty($loginError)) echo $loginError; ?>
    </div>
</form>

<p>Don't have an account? <a href="mentor.php">Register here</a></p>

</body>
</html>

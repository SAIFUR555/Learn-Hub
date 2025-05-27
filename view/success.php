<!-- File: view/success.php -->
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Registration Successful</title>
    <link rel="stylesheet" href="../css/success.css" />
</head>
<body>
        <h2>
            <?php
            session_start();
            if (isset($_SESSION['success_message'])) {
                echo htmlspecialchars($_SESSION['success_message']);
                unset($_SESSION['success_message']);
            } else {
                echo "Your account has been created successfully!";
            }
            ?>
        </h2>
        <div class="buttons">
            <a href="login.php" class="btn">Go to Login</a>
        
    </>
</body>
</html>

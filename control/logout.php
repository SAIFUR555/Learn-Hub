<?php
session_start();
session_destroy();
header("Location: ../view/mentor_login.php");
exit;
?>

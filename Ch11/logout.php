<?php
    session_start();
    session_destroy();
    $Username = $_GET['usename'];
    echo "User : " . $Username . " now logout.";
    echo "<br><a href='login.php'>คลิก กลับไปหน้า login </a>"
?>
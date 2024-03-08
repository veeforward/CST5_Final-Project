<?php

session_start();

session_unset();

session_destroy();

echo "You are logged out";
header("Location: http://localhost/CST5/FinalProject/index.php");
exit();

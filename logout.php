<?php
date_default_timezone_set("Asia/Jakarta");
session_start();
session_destroy();
header("Location: Login/login.php");
?>
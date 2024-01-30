<?php
session_start();
unset($_SESSION['SID']);
header("Location:index.php");
?>
<?php
session_start();
$_SESSION["isLoggedIn"] = true;
header('Location: http://localhost/TirPassion/tirPassion/indexTirPassion.php');
exit();
?>

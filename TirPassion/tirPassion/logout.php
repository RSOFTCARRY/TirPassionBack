<?php
session_start();
session_destroy();
header('Location: http://localhost/TirPassion/tirPassion/indexTirPassion.php');
exit();
?>

<?php  

session_start();
unset($_SESSION['isAdmin']);
session_destroy();
header("Location: http://{$_SERVER['HTTP_HOST']}/Project4/index.php");

?>

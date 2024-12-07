<?php
session_start();
session_destroy();
header("Location: ../navegacion/login.php");
?>
<?php 
    session_start();
    session_destroy();
    header("Locationn: index.php");
    exit;
?>

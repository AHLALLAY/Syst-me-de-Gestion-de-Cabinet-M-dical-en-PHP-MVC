<?php

if(isset($_POST['logout_btn'])){
    session_start();
    session_unset();
    session_destroy();
    header('location: ../../index.php');
    exit;
}
?>
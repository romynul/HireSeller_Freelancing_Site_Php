<?php

session_start();
session_unset($_SESSION['user_name']);
session_destroy();

header('location:../index.php');

?>
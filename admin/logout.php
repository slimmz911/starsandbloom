<?php

session_start();
unset($_SESSION['valid_user']);
session_destroy();
include("login.php");

?>
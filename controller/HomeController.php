<?php

require_once 'model/User.php';
session_start();

$pageHeader = 'Добро пожаловать';

$username = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

require_once 'view/home.php';
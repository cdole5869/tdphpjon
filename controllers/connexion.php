<?php

session_start();

$name= $_POST['name'];
$password = $_POST['password'];

$user = 'cyril';
$mdp = 'tidus';

if ($name == $user && $password == $mdp) {
    $_SESSION['name'] = $user;
    header ('Location: /index.php');
    exit;
} else {
    header ('Location: /formconnexion.php');
    exit;
}

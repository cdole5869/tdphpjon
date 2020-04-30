<?php

session_start();

$livre1= $_POST['livre1'];
$livre2= $_POST['livre2'];
$livre3= $_POST['livre3'];
$livre4= $_POST['livre4'];

$_SESSION['livre1'] = $livre1;
$_SESSION['livre2'] = $livre2;
$_SESSION['livre3'] = $livre3;
$_SESSION['livre4'] = $livre4;





header ('Location: /infos.php');

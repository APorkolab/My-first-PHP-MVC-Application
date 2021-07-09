<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test task for RabIT Kft. Coded by Porkoláb Ádám</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
        <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>


<?php
// Include Config
require('config.php');

require('classes/bootstrap.php');
require('classes/controller.php');
require('classes/model.php');

require('controllers/advertisementlist.php');
require('controllers/home.php');
require('controllers/userlist.php');

require('models/advertisementlist.php');
require('models/index.php');
require('models/userlist.php');

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}
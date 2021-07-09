<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test task for XXX Kft. Coded by Porkoláb Ádám</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<img src="https://image.freepik.com/free-vector/big-data-processing-concept-server-room-blockchain-technology-token-access_39422-812.jpg"
     class="center">
<h1>List of users and advertisements</h1>
<br>
<br>
On this page, you can see the data of the customers who use the services of our company.
There are currently two types of services available:

<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li><a href="<?php echo ROOT_URL; ?>">User list</a>This page shows the list of the users existing in
            the system.</li>
        <li><a href="<?php echo ROOT_URL; ?>shares">Advertisementlist</a>This page shows the list of the existing
            advertisements in the system (and the related user's name of course).</li>
    </ul>


    <div class="container">

        <div class="row">
            <?php require($view); ?>
        </div>

    </div><!-- /.container -->
<ul>
    <li><a href="userList.php">User list.</a>
    </li>
    <li><a href="advertisementlist.php">Advertisement list.</a>
    </li>
</ul>
<br>
<br>
<footer><small>&copy; Copyright 2021, Example Ltd.</small></footer>
</body>
</html>
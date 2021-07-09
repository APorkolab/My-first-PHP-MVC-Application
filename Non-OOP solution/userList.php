<?php

//Connect to the main database
$mysqli = mysqli_connect("localhost", "root", "", "userdb");

if (!$mysqli) {
    echo 'Error in connection: ' . mysqli_connect_error();
}

$sql = 'SELECT * FROM users';
$result = mysqli_query($mysqli, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
//print_r($users);
mysqli_close($mysqli);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User list for XXX Kft. Coded by Porkoláb Ádám</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<img src="https://image.freepik.com/free-vector/big-data-processing-concept-server-room-blockchain-technology-token-access_39422-812.jpg"
     class="center" alt="titleImage">
<h1>Here is the data of our users</h1>


<div class="container">

    <?php foreach ($users as $user) { ?>

        <table class="tablecenter">
            <tr>
                <th><?php echo htmlspecialchars($user['id']); ?></th>
                <th><?php echo htmlspecialchars($user['name']); ?></th>
            </tr>
        </table>

    <?php } ?>

</div>
<br>
<br>
<br>

<a href="index.php"><img src="https://image.flaticon.com/icons/png/512/1244/1244010.png" width=3% class="center"></a>

</body>
</html>

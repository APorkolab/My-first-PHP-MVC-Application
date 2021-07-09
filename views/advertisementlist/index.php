<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User list for XXX Kft. Coded by Porkoláb Ádám</title>
    <link rel="stylesheet" href="../../assets/css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<img src="https://image.freepik.com/free-vector/big-data-processing-concept-server-room-blockchain-technology-token-access_39422-812.jpg"
     class="center" alt="titleImage">
<h1>Here is our database of our advertisement and our clients</h1>

<div class="container">

    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "userdb");

    if (!$mysqli) {
        echo 'Error in connection: ' . mysqli_connect_error();
    }

    $sql = 'SELECT users.name, advertisements.id, title FROM users INNER JOIN advertisements ON users.id = advertisements.userid';
    $result = mysqli_query($mysqli, $sql);
    $advertisements = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    foreach ($advertisements as $advertisement) { ?>

        <table class="tablecenter">
            <tr>
                <th><?php echo htmlspecialchars($advertisement['id']); ?></th>
                <th><?php echo htmlspecialchars($advertisement['name']); ?></th>
                <th><?php echo htmlspecialchars($advertisement['title']); ?></th>
            </tr>
        </table>

    <?php } ?>

</div>

<a href="../home/main.php"><img src="https://image.flaticon.com/icons/png/512/1244/1244010.png" width=3% class="center"></a>
</ul>
<br>
<br>
<footer><small>&copy; Copyright 2021, Example Ltd.</small></footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Pakartojimas userlist</title>
</head>
<body>

<?php

include('./funkcijos/sqlConnection_paskaita10db.php');

$sql = "SELECT * FROM users";
$results = mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<div class="container">
    <h1>User list</h1>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Username</th>
            <th>Shoe size</th>
            <th>Created at</th>
        </tr>
        </thead>
        <?php
        foreach ($results as $result) {
            echo "<tr>";
            echo "<td>".$result['id']."</td>";
            echo "<td>".$result['name']."</td>";
            echo "<td>".$result['surname']."</td>";
            echo "<td>".$result['phone']."</td>";
            echo "<td>".$result['address']."</td>";
            echo "<td>".$result['username']."</td>";
            echo "<td>".$result['shoe_size']."</td>";
            echo "<td>".$result['reg_date']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Pakartojimas forma</title>
</head>
<body>

<?php
session_start();
include('./funkcijos/sqlConnection_paskaita10db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name']) || empty($_POST['surname'])
        || empty($_POST['phone']) || empty($_POST['address'])
        || empty($_POST['username']) || empty($_POST['shoe_size'])) {
        $error = "Data entered incorrectly";
    }
    else {
        $success = 'Data entered successfully';
        $sql = "INSERT INTO users (name, surname, phone, address, username, shoe_size)
             VALUES ('".$_POST['name']."','".$_POST['surname']."',
             '".$_POST['phone']."','".$_POST['address']."',
             '".$_POST['username']."','".$_POST['shoe_size']."')";

        $result = mysqli_query($conn, $sql);
    }
}

mysqli_close($conn);

?>

<div class="container">
    <h1>Registration form</h1>
    <div class="row">
        <div class="col-4">
            <?php
            if ($error) {
                echo "<div class='alert alert-danger'>".$error."</div>";
            }
            elseif ($success) {
                echo "<div class='alert alert-success'>".$success."</div>";
            }
            ?>
            <form method="POST" action="paskaita-10-pakartojimas-forma.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="surname">Surname</label>
                    <input name="surname" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input name="phone" type="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="shoe_size">Shoe size</label>
                    <input name="shoe_size" type="number" class="form-control">
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
</div>


</body>
</html>
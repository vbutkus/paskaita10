<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-15
 * Time: 14:37
 */


$servername = "localhost";
$username = "root";
$password = "labas";
$dbname = "paskaita10db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


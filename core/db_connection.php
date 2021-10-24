<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name =  "todo";

$conn = mysqli_connect($host, $user, $password, $db_name);
if (!$conn) {
    die("Could not connect to $db_name due to " . mysqli_connect_error());
}

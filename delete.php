<?php

include "core/db_connection.php";
$query = " DELETE FROM `todos` WHERE `todo_id` = " . $_GET['todo_id'];
$result = mysqli_query($conn, $query);
header('location:index.php');

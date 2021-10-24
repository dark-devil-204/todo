<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $todo_content = $_POST['todo_content'];
    include "db_connection.php";

    $query = "INSERT INTO `todos` (`todo_content`, `todo_compeleted`) VALUES ( '$todo_content', '0');";

    $result = mysqli_query($conn, $query);
    header("location:../index.php");
}

<?php

include "includes/header.php"; ?>
<style>
    #addDiv {
        display: none;
    }
</style>
<div class="container">

    <div>
        <button class="btn btn-primary my-4" onclick="showDiv()">Add Todo</button>
    </div>
    <div id="addDiv" class="my-2">
        <form method="post" action="core/add_todo.php">
            <textarea name="todo_content" class="form-control" id="" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary">Add Todo</button>
        </form>
    </div>

    <div class="container my-2">
        <ul class="list-group my-2">
            <?php
            include "core/db_connection.php";
            $query =  "SELECT * FROM `todos` ORDER BY todo_created_at";

            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li class="list-group-item">' . htmlspecialchars($row['todo_content']). '<a class="btn btn-danger m-2" style="float:right;" href="delete.php?todo_id=' . htmlspecialchars($row['todo_id']) . '">Delete</a> 
                    <a href="edit.php?todo_id=' . htmlspecialchars($row['todo_id']). '"  style="float:right;"  class="btn btn-secondary m-2" >Edit</a>';
                }
            }

            ?>


        </ul>

    </div>
</div>
<script>
    console.log("Helllo World")

    function showDiv() {
        let div = document.getElementById("addDiv");
        div.style.display = "block";
    }
</script>

<?php include "includes/footer.php"; ?>

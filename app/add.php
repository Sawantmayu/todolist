<?php

if (isset($_POST['title'])) {
    require '../db_conn.php';  // Ensure the path is correct

    $title = trim($_POST['title']);  // Trim any whitespace around the title

    if (empty($title)) {
        $message = "Error: Title cannot be empty!";
    } else {
        // Correct SQL syntax: use "VALUES" instead of "VALUE"
        $stmt = $conn->prepare("INSERT INTO todos(title) VALUES(?)");
        $res = $stmt->execute([$title]);

        if ($res) {
            $message = "Todo item added successfully!";
        } else {
            $message = "Error: Failed to add todo item.";
        }

        $conn = null;  // Close the database connection
    }
} else {
    $message = "Error: No data received!";
}
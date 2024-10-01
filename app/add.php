<?php

if (isset($_POST['title'])) {
    require '../db_conn.php'; // Make sure this file sets up your $conn variable correctly

    $title = trim($_POST['title']); // Trim whitespace from the input

    if (empty($title)) {
        header("Location: ../index.php?mess=error"); // Redirect if title is empty
        exit();
    } else {
        // Prepare and execute the insert statement with improved syntax
        $stmt = $conn->prepare("INSERT INTO todos(title, date_time) VALUES(?, CURRENT_TIMESTAMP)"); // Use VALUES
        $res = $stmt->execute([$title]); // Execute the statement with the title

        if ($res) {
            header("Location: ../index.php?mess=success"); // Redirect on success
        } else {
            // Capture the error information for debugging
            header("Location: ../index.php?mess=insert_error"); // Redirect on failure
        }
        
        $conn = null; // Close the connection
        exit();
    }
} else {
    header("Location: ../index.php?mess=error"); // Redirect if title is not set
    exit();
}
?>

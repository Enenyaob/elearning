<?php
require_once("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $lecture_id = intval($_POST['lecture_id']);
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $due_date = htmlspecialchars(trim($_POST['due_date']));

    try {
        // Insert data into the exercises table
        $stmt = $pdo->prepare("INSERT INTO exercises (lecture_id, title, description, due_date) VALUES (:lecture_id, :title, :description, :due_date)");
        $stmt->execute([
            ':lecture_id' => $lecture_id,
            ':title' => $title,
            ':description' => $description,
            ':due_date' => $due_date
        ]);

        $msg = "Exercise added successfully!";
    } catch (PDOException $e) {
        $error = "Error: Something wentwrong";
    }
}
?>

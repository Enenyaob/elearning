<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $exercise_id = intval($_POST['exercise_id']);
    $student_id = $_SESSION['user_id'];

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file'];
        $file_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_new_name = uniqid('', true) . '.' . $file_ext;
        $file_dest = __DIR__ . '/../upload/' . $file_new_name;

        if (move_uploaded_file($file_tmp, $file_dest)) {
            $stmt = $pdo->prepare("INSERT INTO exercise_submissions (exercise_id, student_id, file_url) VALUES (:exercise_id, :student_id, :file_url)");
            $stmt->execute(['exercise_id' => $exercise_id, 'student_id' => $student_id, 'file_url' => $file_new_name]);
            $msg = "Exercise submitted successfully!";
        } else {
            $error = "Failed to upload file.";
        }
    } else {
        $error = "No file uploaded or there was an error.";
    }
}
?>

<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $video_url = htmlspecialchars(trim($_POST['video_url']));

    $stmt = $pdo->prepare("INSERT INTO lectures (title, description, video_url) VALUES (:title, :description, :video_url)");
    $stmt->execute(['title' => $title, 'description' => $description, 'video_url' => $video_url]);

    header('Location: ../admin_dashboard.php');
    exit();
}
?>

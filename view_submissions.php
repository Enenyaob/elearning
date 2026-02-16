<?php
require_once 'php/session.php';
require_once 'php/secure.php';
require_once 'php/connection.php';

// Prepare the SQL query with the necessary joins to include matric_number and lecture title
$stmt = $pdo->prepare("
    SELECT es.submission_id, e.title AS exercise_title, u.first_name, u.last_name, u.matric_number, 
           l.title AS lecture_title, es.file_url, es.submitted_at
    FROM exercise_submissions es
    JOIN exercises e ON es.exercise_id = e.exercise_id
    JOIN user u ON es.student_id = u.user_id
    JOIN lectures l ON e.lecture_id = l.lecture_id
");
$stmt->execute();
$submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Submissions</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include("php/layouts/admin_header.php"); ?>
</header>
<div class="container-fluid main-content">
    <div class="row">
        <aside>
            <?php include("php/layouts/aside.php"); ?>
        </aside>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-5 main">
            <h1>Exercise Submissions</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Submission ID</th>
                            <th>Exercise Title</th>
                            <th>Lecture Title</th>
                            <th>Student Name</th>
                            <th>Matric Number</th>
                            <th>Submitted At</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($submissions as $submission): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($submission['submission_id']); ?></td>
                            <td><?php echo htmlspecialchars($submission['exercise_title']); ?></td>
                            <td><?php echo htmlspecialchars($submission['lecture_title']); ?></td>
                            <td><?php echo htmlspecialchars($submission['first_name'] . ' ' . $submission['last_name']); ?></td>
                            <td><?php echo htmlspecialchars($submission['matric_number']); ?></td>
                            <td><?php echo htmlspecialchars($submission['submitted_at']); ?></td>
                            <td><a href="upload/<?php echo htmlspecialchars($submission['file_url']); ?>" target="_blank">View File</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<footer class="fixed-bottom">
    <div class="container-fluid footer2 fixed-bottom">
        <div class="row text-center footer-text2 gx-0">
            <div>©2024 National Open University of Nigeria</div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
 require_once("php/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Lectures | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
            <div class="container">
                <h2>Lectures</h2>
                <?php
                require_once 'php/connection.php';
                $stmt = $pdo->query("SELECT * FROM lectures");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="lecture">';
                    echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                    echo '<p>' . htmlspecialchars($row['description']) . '</p>';
                    if ($row['video_url']) {
                        echo '<a href="' . htmlspecialchars($row['video_url']) . '" target="_blank">Watch Video</a>';
                    }
                    echo '</div>';
                    echo '<hr>'; // Line separator between each lecture
                }
                ?>
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
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

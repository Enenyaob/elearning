<?php
require_once("php/session.php");
require_once("php/secure.php");
require_once("php/add_exercise.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Exercise | NOUN</title>
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
            <?php if(isset($msg)) : ?>
                    <div class="mb-1 alert alert-success" role="alert">
                    <i class="fa fa-check" aria-hidden="true"></i> Perfect! <?php echo $msg; ?>
                    </div>
                <?php elseif(isset($error)) : ?>
                  <div class="mb-1 alert alert-danger" role="alert">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attention! <?php echo $error; ?>
                  </div>
                <?php else : ?>
                <?php endif; ?> 
            <div class="container">
                <h2>Add Exercise</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="form-group">
                        <label for="lecture_id">Lecture</label>
                        <select class="form-control" id="lecture_id" name="lecture_id" required>
                            <?php
                            // Fetch lectures from the database
                            require_once 'php/connection.php';
                            $stmt = $pdo->query("SELECT * FROM lectures");
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $row['lecture_id'] . '">' . htmlspecialchars($row['title']) . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="due_date">Due Date</label>
                        <input type="date" class="form-control" id="due_date" name="due_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Exercise</button>
                </form>
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

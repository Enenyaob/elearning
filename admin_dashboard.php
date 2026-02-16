<?php
 require_once("php/session.php");
 require_once("php/secure.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
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
            <h4>Welcome <?php echo ucfirst($_SESSION['username']); ?></h4>
            <div class="container px-5 text-center">
              <div class="row justify-content-around modules">
                <div class="col-md-5"> 
                  <a class="dash_link" href="add_lecture"> 
                    <div class="p-2 border rounded-circle">
                    <img src="img/lessons.png" alt="" class="img-fluid">
                    <div>Add Lecture</div>
                    </a>
                  </div>
                </div>
                <div class="col-md-5">
                  <a class="dash_link" href="add_exercise">
                   <div class="p-2 border rounded-circle">
                    <img src="img/exercise.png" alt="">
                    <div>Add Exercises</div>
                  </div>
                  </a>
                </div>
                <div class="col-md-5">
                <a class="dash_link" href="create_users"> 
                  <div class="p-2 border rounded-circle">
                    <img src="img/user.png" alt="">
                    <div>Create Users</div>
                  </div>
                </a>
                </div>
                <div class="col-md-5">
                <a class="dash_link" href="view_submissions">  
                  <div class="p-2 border rounded-circle">
                    <img src="img/book.png" alt="">
                    <div>View Submissions</div>
                  </div>
                  </a>
                </div>
              </div>
            </div>
        </main>
    </div>
</div>
<footer class="fixed-bottom">
    <div class="container-fliud footer2 fixed-bottom">
      <div class="row text-center footer-text2 gx-0">
        <div>©2024 National open University of Nigeria</div>
      </div>
    </div>
</footer>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

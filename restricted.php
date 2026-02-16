<?php
 require_once("php/session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resticted | NOUN</title>
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
            <nav id="sidebar" class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" id="home-link" href="#dashboard"><i class="fas fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lessons-link" href="#services"><i class="fas fa-book"></i> Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="exercises-link" href="#exercises"><i class="fas fa-tasks"></i> Exercises</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="students-link" href="#students"><i class="fas fa-users"></i> Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="manage-users-link" href="#manage_users"><i class="fas fa-user"></i> Manage Users</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-2 main">
            <div class="container restricted-main">
              <d class="row">
                <div class="restricted-container">
                  <h1>Restricted Area</h1> 
                  <div><i class="fas fa-exclamation-triangle" aria-hidden="true"></i></div>
                  <p>You do not have permission to access this area.</p>
                  <p>Please contact the system administrator if you believe this is an error.</p>
                  <a href="javascript:history.back()" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Go back </a>
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
   
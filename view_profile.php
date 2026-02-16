<?php
include('php/edit_user.php');
require_once("php/session.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Profile | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>First Name:</strong> <?php echo htmlspecialchars($first_name); ?></p>
                                <p><strong>Middle Name:</strong> <?php echo htmlspecialchars($middle_name); ?></p>
                                <p><strong>Last Name:</strong> <?php echo htmlspecialchars($last_name); ?></p>
                                <p><strong>Sex:</strong> <?php echo htmlspecialchars($gender); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                                <p><strong>Phone:</strong> <?php echo htmlspecialchars($mobile_no); ?></p>
                                <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($dob); ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Matric:</strong> <?php echo htmlspecialchars($matric_number); ?></p>
                                <p><strong>Faculty:</strong> <?php echo $faculty; ?></p>
                                <p><strong>Department:</strong> <?php echo $department; ?></p>
                                <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
                                <p><strong>State of Origin:</strong> <?php echo $state_origin; ?></p>
                                <p><strong>Local Government:</strong> <?php echo $local_government; ?></p>
                            </div>
                        </div>
                        <a href="edit_profile" class="btn btn-secondary">Edit Profile</a>
                    </div>
                </div>
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
<script src="js/script.js"></script>
<script src="js/script2.js"></script>
<script src="js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

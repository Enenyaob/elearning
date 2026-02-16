<?php
require_once('php/add_user.php');
require_once("php/session.php");
require_once("php/secure.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE USER | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
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
            <div class="container px-5">
              <div class="row">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="col-md-7 sign-up-div mx-auto"  method="post">
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
                    <div class="form-group">
                      <div class="mb-3 text-center">Create User</div>
                      <div class="mb-3 user">
                        <input type="text" class="form-control" id="exampleInputUsername" name="user_name" placeholder="Enter User Name"  aria-describedby="usertNameHelp" required>
                      </div>
                      <div class="mb-3 user">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email"  aria-describedby="emailHelp" required>
                      </div>
                      <div class="mb-3 user">
                        <select name="role"  id="role" class="form-control" required>
                            <option value="">Select role</option>
                            <option value="ADMIN">Admin</option>
                            <option value="STUDENT">Student</option>
                        </select>
                      </div>
                      <div class="mb-3 password">
                        <input type="password" class="form-control curve" id="exampleInputPassword1" name="password" placeholder="Enter Password" required>
                      </div>
                      <div class="mb-3 password">
                        <input type="password" class="form-control curve" id="exampleInputPassword1" name="password2" placeholder="Confirm password" required>
                      </div>
                      <div class="mb-4 d-grid gap-7">
                        <button type="submit" class="btn btn-success">Create</button>
                      </div>
                  </div>
                </form>
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
   
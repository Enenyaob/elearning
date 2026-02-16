<?php
require_once'php/portal_login.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NOUN | LOGIN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
     <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="body">
    <div class="container pad my-1">
      <div class="row form-pad  g-3 ">
        <div class="col-md-6 mb-3 barge">
          <img src="img/Logo.png" alt="barge">
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="col-md-4 mb-3 form-div"  method="post">
          <?php if(isset($error)) : ?>
          <div class="mb-1 alert alert-danger" role="alert">
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attention! <?php echo $error; ?>
          </div>
          <?php else : ?>
          <?php endif; ?> 
        <div class="mb-3 text-center">Member Login</div>
          <div class="mb-3 user">
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
            <i class="fa fa-user fa-lg"></i>
          </div>
          <div class="mb-3 password">
            <input type="password" class="form-control curve" name="password" id="exampleInputPassword1" required>
            <i class="fa fa-lock fa-lg"></i>
          </div>
          <div class="mb-4 d-grid gap-2">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
  

<?php
require_once'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $error;

  $stmt = $pdo->prepare('SELECT user_name, secure_pass, email, user_role, user_id FROM user_pass WHERE email = :email');
  $stmt->execute(['email' => $email]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);


  if ($result && password_verify($pass, $result['secure_pass'])) {
    session_start();
    $_SESSION['username'] = $result['user_name'];
    $_SESSION['role'] = $result['user_role'];
    $_SESSION['user_id'] = $result['user_id'];
    if($_SESSION['role'] == 'ADMIN' ){
      header('Location: admin_dashboard.php');
      exit;
    }elseif($_SESSION['role'] == 'STUDENT'){
      header('Location: user_dashboard.php');
      exit;
    }
  }else{
    $error = 'Enter correct email and password';
  }
}

?>
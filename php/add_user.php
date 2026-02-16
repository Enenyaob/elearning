<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars(trim(strtoupper($_POST['user_name'])));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];  htmlspecialchars(trim(strtolower($_POST['password'])));
    $pass2 = $_POST['password2'];
    $role = htmlspecialchars(trim(strtoupper($_POST['role'])));

    // Initialize an empty message variable
    $msg;
    $error;

    // Check if passwords match
    if ($password != $pass2) {
        $error = 'Passwords don\'t match!!';
    } else {
        // Hash the password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Check if username or email already exists
        $stmt = $pdo->prepare('SELECT user_name, email FROM user_pass WHERE user_name = :user_name OR email = :email');
        $stmt->execute(['user_name' => $username, 'email' => $email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $error = 'User details exist in database!!';
        } else {
            // Insert new user into the database
            $stmt = $pdo->prepare("INSERT INTO user_pass (user_name, email, user_role, secure_pass) VALUES (:user_name, :email, :user_role, :secure_pass)");
            $stmt->bindValue(':user_name', $username);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':user_role', $role);
            $stmt->bindValue(':secure_pass', $password);

            if ($stmt->execute()) {
                $stmt = $pdo->prepare("INSERT INTO user (email) VALUES (:email)");
                $stmt->bindValue(':email', $email);
                ($stmt->execute());
                $msg = 'User Added Successfully';
            } else {
                $error = 'Something went wrong!'; 
            }
        }
    }

    // Output the message
    // echo $message;
}
?>

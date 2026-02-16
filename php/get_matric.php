<?php
require_once("php/session.php");

require_once 'connection.php';
// require_once 'function.php'; // Include the function to generate matric number
// require_once 'check_matric_number.php'; // Include the function to check if matric number exists

$user_id = $_SESSION['user_id'];

// Retrieve user data
$sql = "SELECT matric_number FROM user WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($user['matric_number'])){
  $_SESSION['matric_number'] = $user['matric_number'];
}else{
}

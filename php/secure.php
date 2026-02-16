<?php
$user_role = strtoupper($_SESSION['role']);
// Check if the user is logged in and is an admin
if (!isset($user_role) || $user_role  !== 'ADMIN') {
    header("Location: restricted");
    exit();
}
// If the user is an admin, the rest of your code goes here

?>

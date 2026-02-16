<?php
$password= 'opennow';
$password = password_hash($password, PASSWORD_DEFAULT);
echo $password;
?>
<?php

require_once 'src/models/user.php';

$success = false;

$firstName = $_REQUEST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$user->setFirstName($firstName);
$user->setLastName($lastName);
$user->setEmail($email);
$user->setUsername($username);
$user->setPassword($password);

$success = $user->createUser();

echo $success ? "failed to create user" : "user created successfully";


?>
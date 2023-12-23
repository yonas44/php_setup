<?php

use Core\App;
use Core\Validator;
use Core\Database;

$errors = [];

if (!Validator::string($_POST['full_name'], 5, 255)) {
  $errors['full_name'] = 'Please provide a valid full name';
}

if (!Validator::email($_POST['email'])) {
  $errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($_POST['password'], 7, 255)) {
  $errors['password'] = 'Please provide a valid password not less than 7 characters and no more than 255 characters';
}

if (!empty($errors)) {
  // $_SESSION['errors'] = $errors;
  // header('Location: /register');
  return view('/registration/create.view.php', [
    'errors' => $errors
  ]);

}

// Check if we have an account with the provided credentials

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
  'email' => $_POST['email']
])->find();

// If exist, redirect the user to login page

if ($user) {
  header('Location: /login');
  exit();
}

// If not, create the account

$newUser = $db->query("INSERT INTO users(full_name, email, password, admin) VALUES(:full_name, :email, :password, :admin)", [
  'full_name' => $_POST['full_name'],
  'email' => $_POST['email'],
  'password' => $_POST['password'],
  'admin' => 0
]);

$_SESSION['full_name'] = $_POST['full_name'];
header("Location: /");
exit();
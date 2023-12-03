<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 255)) {
  $errors['body'] = 'A body of not more than 255 characters is required.';
}

if (!empty($errors)) {
  return view('/notes/create.view.php', [
    'heading' => 'Create a note',
    'errors' => $errors
  ]);
} else {
  $note = $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 5
  ]);

  header('location: /notes');
  die();
}

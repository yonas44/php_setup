<?php

use Core\Database;
use Core\Validator;

$config = require(base_path('config.php'));

$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  if (!Validator::string($_POST['body'], 1, 255)) {
    $errors['body'] = 'A body of not more than 255 characters is required.';
  }

  if (empty($errors)) {
    $note = $db->query('INSERT INTO notes(body, user_id) VALUES (:body, :user_id)', [
      'body' => $_POST['body'],
      'user_id' => 5
    ]);
  }
}

view('/notes/create.view.php', [
  'heading' => 'Create a note',
  'errors' => $errors
]);
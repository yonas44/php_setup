<?php

$heading = 'New note';

$config = require('config.php');

require 'Validator.php';

$db = new Database($config['database']);

// dd($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $errors = [];

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

require 'views/notes/create.view.php';
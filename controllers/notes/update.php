<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
  'id' => $_POST['id']
])->find();

$currentUserId = 5;

$errors = [];

if (!Validator::string($_POST['body'], 1, 255)) {
  $errors['body'] = 'A body of not more than 255 characters is required.';
}

authorize($note['user_id'] === $currentUserId);

if (!empty($errors)) {
  return view('/notes/create.view.php', [
    'heading' => 'Create a note',
    'errors' => $errors
  ]);
} else {
  $note = $db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
  ]);

  header('location: /notes');
  die();
}

<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

$currentUserId = 5;

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
  'id' => $_POST['id']
]);

header('location: /notes');

exit();
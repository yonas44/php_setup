<?php

use Core\Database;

$config = require(base_path('config.php'));

$db = new Database($config['database']);

$errors = [];

$currentUserId = 5;

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from notes where id = :id', [
  'id' => $_POST['id']
]);

header('location: /notes');

exit();
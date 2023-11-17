<?php

$config = require(base_path('config.php'));

$currentUserId = 5;

$db = new Database($config['database']);

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view('/notes/show.view.php', [
  "heading" => "Note",
  "note" => $note
]);
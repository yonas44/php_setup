<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "select * from notes where user_id = 5";

$notes = $db->query($query)->findAll();

view('/notes/index.view.php', [
  "heading" => "My Notes",
  "notes" => $notes
]);
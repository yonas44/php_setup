<?php

use Core\Database;

$config = require(base_path('config.php'));

$db = new Database($config['database']);

$query = "select * from notes where user_id = 5";

// $id = $_GET['id'];

$notes = $db->query($query)->findAll();

view('/notes/index.view.php', [
  "heading" => "My Notes",
  "notes" => $notes
]);
<?php

$heading = "Notes";

$config = require('config.php');

$db = new Database($config['database']);

$query = "select * from notes where user_id = 5";

// $id = $_GET['id'];

$notes = $db->query($query)->findAll();

require 'views/notes/index.view.php';
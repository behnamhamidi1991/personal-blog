<?php 

use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

// $posts = $db->query('SELECT * FROM posts LIMIT 6')->fetchAll();

$posts = $db->query('SELECT posts.*, users.name AS user_name FROM posts INNER JOIN users ON posts.user_id = users.id LIMIT 6')->fetchAll();

loadView('/blog/index', [
    'posts' => $posts
]);
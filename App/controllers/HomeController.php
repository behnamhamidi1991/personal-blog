<?php 

namespace App\Controllers;

use Framework\Database;

class HomeController {
    
    protected $db;
    
    public function __construct() 
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index() {
        $posts = $this->db->query('SELECT posts.*, users.name AS user_name FROM posts INNER JOIN users ON posts.user_id = users.id LIMIT 6')->fetchAll();

        loadView('home', [
            'posts' => $posts
        ]);

    }
}
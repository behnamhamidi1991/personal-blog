<?php 

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class BlogController {
    
    protected $db;
    
    public function __construct() 
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }

    public function index() 
    {
        $posts = $this->db->query('SELECT posts.*, users.name AS user_name FROM posts INNER JOIN users ON posts.user_id = users.id LIMIT 6')->fetchAll();

        loadView('/blog/index', [
            'posts' => $posts
        ]);

    }

    public function create() 
    {
        loadView('/blog/create');
    }


    public function show($params) 
    {
        
        $id = $params['id'] ?? '';

        $params = [
            'id' => $id
        ];

        $post = $this->db->query('SELECT * FROM posts WHERE id = :id', $params)->fetch();

        // Check if post exists
        if (!$post) {
            ErrorController::notFound('Post not found!');
            return;
        }


        loadView('blog/show', [
            'post' => $post
        ]);

    }

    /**
     * Store data in database
     * 
     * @return void
     */     
    public function store() {
    
    $allowedFields = ['title', 'category', 'body'];
    
        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = 1;

        $newListingData = array_map('sanitize', $newListingData);

        inspectAndDie($newListingData);
    }
}



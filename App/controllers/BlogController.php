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
        $posts = $this->db->query('SELECT posts.*, users.name AS user_name FROM posts INNER JOIN users ON posts.user_id = users.id')->fetchAll();

        loadView('/blog/index', [
            'posts' => $posts
        ]);

    }

    public function create() 
    {
        loadView('/blog/create');
    }

    /**
     * Show a single post
     *
     * @param array $params
     * @return void
     */
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
    
    $allowedFields = ['title', 'category' => null, 'body'];
    
        $newPostData = array_intersect_key($_POST, array_flip($allowedFields));

        $newPostData['user_id'] = 2;

        $newPostData = array_map('sanitize', $newPostData);

        $requiredFields = ['title', 'body'];

        $errors = [];

        foreach($requiredFields as $field) {
            if(empty($newPostData[$field]) || !Validation::string($newPostData[$field])) {
                $errors[$field] = ucfirst($field) . ' is required!';
            }
        }

        if (!empty($errors)) {
            // Reload view with errors
            loadView('blog/create', [
                'errors' => $error
            ]);
        } else {
            // Submit data
            $fields = [];
            foreach($newPostData as $field => $value) {
                $fields[] = $field;
            }

            
            $fields = implode(', ', $fields);

            $values = [];
            foreach ($newPostData as $field => $value) {
                // Convert empty strings to null
                if ($value === '') {
                    $newPostData = null;
                }

                $values[] = ':' . $field;
            }

            $values = implode(', ', $values);

            $query = "INSERT INTO posts ({$fields}) VALUES ({$values})";

            $this->db->query($query, $newPostData);

            header('Location: /blog');
            $_SESSION['success_message'] = 'Post created successfully!';
            exit; 
        }
    }

    /**
     * Delete a listing
     * 
     * @param array $params
     * @return void
     */
    public function destroy($params) 
    {
        $id = $params['id'];

        $params = [
            'id' => $id
        ];

        $posts = $this->db->query('SELECT * FROM posts WHERE id = :id', $params)->fetch();

        if (!$posts) {
            ErrorController::notFound('Post not found!');
            return;
        }

        $this->db->query('DELETE FROM posts WHERE id = :id', $params);
        
        // Set flash message
        $_SESSION['success_message'] = 'Post deleted successfully!';

        redirect('/blog');

    }



    /**
     * Show the listing edit form
     *
     * @param array $params
     * @return void
     */
    public function edit($params) 
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

    

        loadView('blog/edit', [
            'post' => $post,
        ]);

    }

    /**
     * Update a post
     * 
     * @param array $params
     * @return void
     */
    public function update($params) 
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

        $allowedFields = ['title', 'category', 'body'];

        $updateValues = [];

        $updateValues = array_intersect_key($_POST, array_flip($allowedFields));

        $requiredFields = ['title', 'body'];
        
        $errors = [];

        foreach($requiredFields as $field) {
            if(empty($updateValues[$field]) || !Validation::string($updateValues[$field])) {
                $errors[$field] = ucfirst($field) . ' is required';
            }
        }

        if (!empty($errors)) {
            loadView('blog/edit', [
                'post' => $post,
                'errors' => $errors
            ]);
            exit;
        } else {
            // Submit to database
            $updateFields = [];

            foreach(array_keys($updateValues) as $field) {
                $updateFields[] = "{$field} = :{$field}";
            }

            $updateFields = implode(', ', $updateFields);
            
            $updateQuery = "UPDATE posts SET $updateFields WHERE id = :id";

            $updateValues['id'] = $id;
            $this->db->query($updateQuery, $updateValues);

            $_SESSION['success_messate'] = 'Listing Updated';
            redirect('/blog/' . $id);
        }

    }
}
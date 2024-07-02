<?php 

/**
 * Base Path
 * @param string $path
 * @return string $path
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name) {
    $viewPath = basePath("/views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "There is no view with the name of {$name}";
    }
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name) {
    $viewPartial = basePath("/views/partials/{$name}.php");

    if (file_exists($viewPartial)) {
        require $viewPartial;
    } else {
        echo "There is no partial with the name of {$name}";
    }
}


/**
 * Inspect a value
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value) {
    echo "</br>";
    var_dump($value);
    echo "</br>";
}

/**
 * 
 */
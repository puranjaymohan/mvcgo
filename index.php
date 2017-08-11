<?php
require_once 'database.php';

// add new controllers and their methods here
// For eg "pages" is the controller and 'home', 'about', 'contact', 'error' are methods
$controllers = array('pages' => ['home', 'about', 'photos', 'contact', 'error']);



//Don't tweek anything here
if (isset($_GET['url'])) {

    $url = explode("/", rtrim($_GET['url'], "/"));
    if ($url[0] != '') {
        $controller = $url[0];
    } else {
        $controller = 'pages';
    }
    if (isset($url[1])) {
        $action = $url[1];
    } else {
        $action = 'home';
    }
    if ($controller != 'admin') {
        require_once './views/layout.php';
    }
}
<?php
/*Nothing to edit in this file for customizing*/
function call($controller, $action)
{
    require_once "controllers/" . $controller . "_Controller.php";
    $controller = $controller . "Controller";
    $controller = new $controller();
    $controller->{$action}();
}

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}


?>



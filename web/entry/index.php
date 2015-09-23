<?php
/**
 * Created by unkown ide ps.
 * User: deliang
 * DateTime: 9/22/15 4:44 PM
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);

parse_str($_SERVER['QUERY_STRING'], $_GET);

require_once(__DIR__ . '/../core/Controller.php');
require_once(__DIR__ . '/../lib/smarty/Smarty.class.php');


if (isset($_GET['c']) && isset($_GET['m'])) {

    $class  = $_GET['c'];
    $method = $_GET['m'];
}

$class = str_replace('.', '', trim($class, '/'));

$error_404 = false;

if (file_exists(__DIR__ . '/../controller/' . ucfirst($class) . '.php')) {

    require_once(__DIR__ . '/../controller/' . ucfirst($class) . '.php');

    if (class_exists($class) && method_exists($class, $method)) {

        $class = new $class();
        $class->smarty = new Smarty();
        $class->$method();

    } else {
        $error_404 = true;
    }

} else {
    $error_404 = true;
}

if ($error_404) {
    echo '<h2>page not found!</h2>';
    header('HTTP/1.0 404 Not Found');
    exit;
}
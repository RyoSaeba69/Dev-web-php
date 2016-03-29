<?php
// Import des services, controller et model
require_once 'services/CartsService.php';
require_once 'controllers/CartsController.php';
require_once 'models/Product.php';

//Initialisation des produits
$json_file = file_get_contents(getcwd().'/ressources/data/products.json');
$products_json = json_decode($json_file, true);
$products = array();

foreach ($products_json as $json_product) {
    $new_product = new Product(0, 0, ' ');

    foreach ($json_product as $key => $value) {
        $p_method = new ReflectionMethod('Product', 'set_'.$key);
        $p_method->invoke($new_product, $value);
    }
    array_push($products, $new_product);
}

$GLOBALS['products'] = $products;


//Création de la session
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


// Routage
$page = $_GET['page'];
$controller = $_GET['ctrl'];
$action = $_GET['action'];
$params_string = $_GET['params'];
$params = array();

if (isset($params_string)) {
    $params_string = preg_replace('/\s+/', '', $params_string);
    $params = explode(',', $params_string);
}

if (isset($controller) && isset($action)) {
    try {
        $reflectionMethod = new ReflectionMethod(ucfirst($controller).'Controller', $action);
        echo $reflectionMethod->invokeArgs(null, $params);
    } catch (Exception $e) {
        echo $e;
    }
    if (!isset($page)) {
        return;
    }
}

//Définition de l'host et de l'addresse de l'application
//En cas de Déploiement PENSER A VERIFIER LE CHEMIN
$host = $_SERVER['HTTP_HOST'];
$app_url = "http://$host/shop/";

if (!isset($page)) {
    $home_page = 'list';
    header("Location: $app_url?page=$home_page");

    return;
}

$page .= '.php';

//INclusion de la bonne page
include_once "$page";


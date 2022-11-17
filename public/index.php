<?php
require_once '../vendor/autoload.php';
require_once "../controllers/MainController.php";
require_once "../controllers/NAVIController.php";
require_once "../controllers/NAVIImageController.php";
require_once "../controllers/NAVIDescriptionController.php";
require_once "../controllers/GambitController.php";
require_once "../controllers/GambitImageController.php";
require_once "../controllers/GambitDescriptionController.php";
require_once "../controllers/VPController.php";
require_once "../controllers/VPImageController.php";
require_once "../controllers/VPDescriptionController.php";
require_once "../controllers/Controller404.php";

$loader = new \Twig\Loader\FilesystemLoader('../views');

$twig = new \Twig\Environment($loader);

$url = $_SERVER["REQUEST_URI"];

$controller = new Controller404($twig);;

if ($url == "/") {
    $controller = new MainController($twig);
} elseif (preg_match("#^/navi/image#", $url)) {
    $controller = new NAVIImageController($twig);
} elseif (preg_match("#^/navi/description#", $url)) {
    $controller = new NAVIDescriptionController($twig);
} elseif (preg_match("#^/navi#", $url)) {
    $controller = new NAVIController($twig);
} elseif (preg_match("#^/gambit/image#", $url)) {
    $controller = new GambitImageController($twig);
} elseif (preg_match("#^/gambit/description#", $url)) {
    $controller = new GambitDescriptionController($twig);
} elseif (preg_match("#^/gambit#", $url)) {
    $controller = new GambitController($twig);
} elseif (preg_match("#^/vp/image#", $url)) {
    $controller = new VPImageController($twig);
} elseif (preg_match("#^/vp/description#", $url)) {
    $controller = new VPDescriptionController($twig);
} elseif (preg_match("#^/vp#", $url)) {
    $controller = new VPController($twig);
}

if ($controller) {
    $controller->get();
}

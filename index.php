<?php

require_once 'data.php';
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'debug' => 'true',
    'cache' => 'cache/Twig',
));

echo $twig->render('index.twig', $data);

?>
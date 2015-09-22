<?php


// include composer
require_once($settings['vendor']['directory'].$settings['vendor']['loader']);
require_once($settings['app']['directory'].'System/Utils.php');

$app        = new \App\System\App();
$runtime    = new \App\System\Runtime\NodeList();
$router     = new \App\System\Router();

require_once($settings['app']['directory'].'Routes/Routes.php');


$routerNode = new \App\System\Runtime\Node();
$routerNode->write($router->getRunTime());

$runtime->push($routerNode);


$app->load($runtime);
$app->run();

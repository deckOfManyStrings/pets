<?php
//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//set debug level
$f3 ->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function(){
    $view = new View;
    echo $view->render('Views/home.html');
});

//Define a page1 route
$f3->route('GET /page1', function(){
    echo '<h1> This is page 1</h1>';
});

$f3->run();
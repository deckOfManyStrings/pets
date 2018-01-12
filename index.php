<?php
//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//set debug level
$f3 ->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function(){
    echo '<h1> Pet home </h1>';
});

//Define a page1 route
$f3->route('GET /page1', function(){
    echo '<h1> This is page 1</h1>';
});

$f3->run();
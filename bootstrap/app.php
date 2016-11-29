<?php

// If we have composer vendor directory inside theme directory,
// that means Assely was installed manually or directly as
// composer package. We need to autoload this ourself.
if (is_dir(__DIR__.'/../vendor')) {
    require __DIR__.'/../vendor/autoload.php';
}

// Create and run Assely application.
$app = new Assely\Foundation\Application(dirname(__DIR__));

$app->run();

// Return instance of created application.
// It will be used inside functions.php file.
return $app;

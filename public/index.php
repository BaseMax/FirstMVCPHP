<?php

use Core\Router;

require __DIR__.'/../vendor/autoload.php';

include __DIR__.'/../app/routes.php';

return Router::dispatch(isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/');

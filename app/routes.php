<?php

namespace App;

use Core\Router;

Router::addRoute('/', [Controllers\HomeController::class, 'index']);

<?php

declare(strict_types=1);

use App\{
    Controller\PageNotFoundController,
    Controller\WelcomeController,
    Controller\VehicleController,
    Router
};

$router = new Router();
$router->get('/welcome', WelcomeController::class, 'index');
$router->get('/error404', PageNotFoundController::class, 'pageNotFound');
$router->get('/vehicles', VehicleController::class, 'list');

try {
    $router->dispatch();
} catch (Exception $e) {
    header("Location: /error404");
}

<?php

declare(strict_types=1);

use App\{
    Controller\PageNotFoundController,
    Controller\WelcomeController,
    Router
};

$router = new Router();
$router->get('/welcome', WelcomeController::class, 'index');
$router->get('/error404', PageNotFoundController::class, 'pageNotFound');
try {
    $router->dispatch();
} catch (Exception $e) {
    header("Location: /error404");
}

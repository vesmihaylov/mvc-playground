<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller;

class WelcomeController extends Controller
{
    public function index(): void
    {
        $this->render('welcome/index', ['name' => 'MVC enjoyer']);
    }
}

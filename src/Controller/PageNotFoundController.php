<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller;

class PageNotFoundController extends Controller
{
    public function pageNotFound(): void
    {
        $this->render('page_not_found');
    }
}

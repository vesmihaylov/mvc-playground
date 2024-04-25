<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller;
use App\Model\Vehicle;

class VehicleController extends Controller
{
    public function list(): void
    {
        $vehicles = [
            (array) new Vehicle('Mercedes-Benz', 'CLK W209 270 CDI', 2004, 'Coupe', 'Diesel', 10800),
            (array) new Vehicle('BMW', 'E63 645', 2004, 'Coupe', 'Petrol', 22500),
            (array) new Vehicle('Toyota', 'Avensis 2.2 D4D', 2007, 'Sedan', 'Diesel', 6500),
            (array) new Vehicle('Kia', 'Sorento', 2005, 'SUV', 'Diesel', 8600)
        ];

        $this->render('vehicles/list', ['vehicles' => $vehicles]);
    }
}

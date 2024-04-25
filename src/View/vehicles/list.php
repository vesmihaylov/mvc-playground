<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Vehicles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            border-radius: 8px;
            margin-bottom: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .vehicle-name {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .vehicle-info {
            color: #666;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>List of Vehicles</h1>
    <ul>
        <?php foreach ($vehicles as $vehicle): ?>
            <li>
                <div class="vehicle-name"><?php echo $vehicle['brand']; ?></div>
                <div class="vehicle-info">Model: <?php echo "<b>" . $vehicle['model'] . "</b>" ?></div>
                <div class="vehicle-info">Year of
                    manufacturing: <?php echo "<b>" . $vehicle['manufactureYear'] . "</b>" ?></div>
                <div class="vehicle-info">Coupe type: <?php echo "<b>" . $vehicle['coupeType'] . "</b>" ?></div>
                <div class="vehicle-info">Fuel type: <?php echo "<b>" . $vehicle['fuelType'] . "</b>" ?></div>
                <div class="vehicle-info">Price: <?php echo "<b>" . $vehicle['price'] . "</b>" ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>

<?php
// Variables
$name = "Mason's Cafe";
$currency = "₱"; 

// Item Array
$menu = [
    "Espresso" => 95.00,
    "Latte" => 120.00,
    "Cappuccino" => 120.00,
    "Americano" => 110.00,
    "Decaf Coffee" => 200.00, 
    "Chocolate Coffee" => 135.00,
    "Blueberry Muffin" => 75.00,
    "Chocolate Croissant" => 80.00
];

// Discount (Type Juggling)
$discount = "10.00"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
    
    <style>
        body { 
            font-family: Arial, sans-serif; 
            color: #f5f5dc;
            padding: 20px; 
            text-align: center;
            
            background-image: url('Cafe pics/img.jpg'); 
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center center; 
            background-repeat: no-repeat; 
        }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            background-color: rgba(68, 68, 68, 0.85); 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.7); 
        }
        h1, h2, h3 { 
            color: #e0b48c; 
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5); 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
        }
        th, td { 
            border: 1px solid #7a5e4d;
            padding: 10px; 
            text-align: left; 
        }
        th { 
            background-color: #5c4033; 
            color: #f5f5dc; 
        }
        .price { 
            text-align: right; 
            font-weight: bold;
            color: #f5f5dc;
        }
        hr {
            border-color: #7a5e4d;
            margin: 30px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <h1><?= $name ?> Menu</h1>
        <h2>Mabuhay! Your Daily Coffee</h2>

        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price (<?= $currency ?>)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($menu as $item => $price) { 
                    // Expressions & Variables
                    $displayPrice = $price; 
                    $note = "";

                    if ($item == "Latte") {
                        // Type Juggling & Subtraction
                        $displayPrice = $price - $discount; 
                        $note = " (₱" . $discount . " off!)";
                    } 
                    ?>
                    <tr>
                        <td><?= $item . $note ?></td>
                        <td class="price"><?= $currency ?><?= number_format($displayPrice, 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <hr>

        <h3>Steaming up some good vibes at the cafe.</h3>
        

    </div>
</body>
</html>
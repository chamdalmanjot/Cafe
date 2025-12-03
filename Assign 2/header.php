<?php
//Manjot Chamdal WD-201 
// PHP Setup: Variables and Arrays
$name = "Mason's Cafe"; // The  name of the store
$currency = "₱";       // Currency symbol which is the peso sign 

// Array: The Menu items and their prices 
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

// Variables: 
$discount = "10.00"; // Discount amount
$surcharge = 5.00;   // Surcharge amount
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
    
    <style>
        /*this is CSS Styling */
        body { 
            font-family: Arial, sans-serif; 
            color: #f5f5dc;
            padding: 20px; 
            text-align: center;
            
            /* Background Image used for the cafe menu */
            background-image: url('Cafe pics/img.jpg'); 
            background-size: cover; 
            background-attachment: fixed; 
            background-position: center center; 
            background-repeat: no-repeat; 
        }
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            background-color: rgba(68, 68, 68, 0.85); 
            padding: 20px; 
            border-radius: 8px; 
        }
        h1, h2, h3 { 
            color: #e0b48c; 
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
        hr {
            border-color: #7a5e4d;
        }
        /* this is Navigation Styling */
        .nav { margin-bottom: 20px; }
        .nav a {
            color: #e0b48c; 
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <div class="nav">
            <a href="cafe.php">MENU</a>
            <a href="stock.php">STOCKS</a>
        </div>

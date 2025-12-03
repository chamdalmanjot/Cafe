<?php
//Manjot Chamdal WD-201
//  Strict types 
declare(strict_types = 1); 
// The header include
include 'header.php';


//  Global variable for tax rate 
$taxRate = 12;

// Multidimensional Array: the Product list with their price and their stocks
$cafeProducts = [
    'Espresso'           => ['price' => 95.00, 'stock' => 12],
    'Latte'              => ['price' => 120.00, 'stock' => 8],
    'Cappuccino'         => ['price' => 120.00, 'stock' => 3],
    'Americano'          => ['price' => 110.00, 'stock' => 15],
    'Decaf Coffee'       => ['price' => 200.00, 'stock' => 2],
    'Chocolate Coffee'   => ['price' => 135.00, 'stock' => 10],
    'Blueberry Muffin'   => ['price' => 75.00, 'stock' => 1],
    'Chocolate Croissant'=> ['price' => 80.00, 'stock' => 5],
    'Caramel Macchiato'  => ['price' => 150.00, 'stock' => 18], 
    'Iced Tea'           => ['price' => 50.00, 'stock' => 9],     
    'Banana Bread'       => ['price' => 85.00, 'stock' => 11]    
];

//  Checks if we need to order more stock
function get_reorder_message(int $stockLevel): string
{
    // If stock is less than 10, return Yes, otherwise return No
    return ($stockLevel < 10) ? 'Yes' : 'No';
}

//  Calculates the total money value of the remaining stock
function get_total_value(float $price, int $quantity): float
{
    // Calculates total value (price * quantity)
    $totalValue = $price * $quantity;
    return $totalValue;
}

// Calculates how much tax we owe when we sell everything
function get_tax_due(float $price, int $quantity, int $taxRate = 0): float
{
    //  Getting the base value
    $totalValue = $price * $quantity;
    
    // Calculating the tax amount 
    $taxDue = $totalValue * ($taxRate / 100);
    
    return $taxDue;
}

global $taxRate; 
$prod_name = "product_name"; 
?>

<h1><?= $name ?> Stocks</h1>
<h2>Stocks Status (Tax Rate: <?= $taxRate ?>%)</h2>

<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Stock Level</th>
            <th>Reorder?</th>
            <th>Total Value (<?= $currency ?>)</th>
            <th>Tax Due (<?= $currency ?>)</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        // FOREACH LOOP:
        foreach ($cafeProducts as $prod_name => $data) {
            $price = $data['price'];
            $stock = $data['stock'];
        ?>
        <tr>
            <td><?= $prod_name ?></td> 
            <td><?= $stock ?></td>
            
            <td><?= get_reorder_message($stock) ?></td>
            <td><?= $currency ?><?= number_format(get_total_value($price, $stock), 2) ?></td>
            <td><?= $currency ?><?= number_format(get_tax_due($price, $stock, $taxRate), 2) ?></td>
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>

<?php
// the footer include
include 'footer.php';
?>
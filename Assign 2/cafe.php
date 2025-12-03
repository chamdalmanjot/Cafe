<?php
//Manjot Chamdal WD-201
// The header include
include 'header.php';
?>

<h3>Today's Promotion Codes</h3>
<p>Use these codes for special offers:</p>
<p style='font-family:monospace; color:#e0b48c;'>
<?php
for ($i = 1; $i <= 3; $i++) {
?>
    CODE-<?= $i ?> | 
<?php
}
?>
</p>

<table>
    <thead>
        <tr>
            <th>Item</th>
            <th>Price (<?= $currency ?>)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menu as $item => $price) {
            $displayPrice = $price; 
            $note = "";

            // IF ELSE 
            if ($item == "Latte") {
                // Applying discount
                $displayPrice = $price - $discount;
                $note = " (₱" . $discount . " off!)";
            } elseif ($item == "Decaf Coffee") {
                //  Applying surcharge
                $displayPrice = $price + $surcharge;
                $note = " (Surcharge: ₱" . $surcharge . ")";
            } else {
                // price which is not changed
                $displayPrice = $price;
                $note = "";
            }
            ?>
            <tr>
                <td><?= $item . $note ?></td>
                <td class="price"><?= $currency ?><?= number_format($displayPrice, 2) ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// footer include
include 'footer.php';
?>

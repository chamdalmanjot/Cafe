<?php
// INCLUDE FILES
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
            <th>Price (<?= $peso ?>)</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($foodList as $item => $price) {
            $displayPrice = $price; 
            $note = "";

            // IF...ELSE logic
            if ($item == "Latte") {
                // Apply discount
                $displayPrice = $price - $off;
                $note = " (₱" . $off . " off!)";
            } elseif ($item == "Decaf Coffee") {
                // Apply surcharge
                $displayPrice = $price + $extra;
                $note = " (Surcharge: ₱" . $extra . ")";
            } else {
                // Default price
                $displayPrice = $price;
                $note = "";
            }
            ?>
            <tr>
                <td><?= $item . $note ?></td>
                <td class="price"><?= $peso ?><?= number_format($displayPrice, 2) ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// INCLUDE FILES
include 'footer.php';
?>
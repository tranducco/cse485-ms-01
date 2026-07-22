<?php
require 'data.php';

    $categoryMap = [];
    
    foreach ($categories as $category){
        $categoryMap[$category['id']] = $category['name'];
    }
    $totalInventory = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MiniShop - Catalog (Buoi 1)</title>
    </head>
    <body>
        <h2>MiniShop - Catalog (Buoi 1)</h2>
        <table border = "1">
            <tr>
                <th>SKU</th>
                <th>Ten</th>
                <th>Danh muc</th>
                <th>Gia</th>
                <th>So Luong</th>
                <th>Thanh tien</th>
            </tr>
            <?php foreach($products as $product): ?>
            <?php
                $lineTotal = $product['price'] * $product['qty'];
                $totalInventory += $lineTotal;
            ?>
            <tr>
                <td><?= htmlspecialchars($product['sku'])?></td>
                <td><?= htmlspecialchars($product['name'])?></td>
                <td><?= htmlspecialchars($categoryMap[$product['category_id']])?></td>
                <td><?= number_format($product['price'])?></td>
                <td><?= $product['qty']?></td>
                <td><?= number_format($lineTotal)?></td>
            </tr>
            <?php endforeach; ?>            
        </table> 
        <br>
        <h3>Tong gia tri kho = <?= number_format($totalInventory) ?></h3>
        <h3>So san pham = <?= count($products) ?></h3>  
        <h3>Debug</h3>
        <pre>
            <?php
            var_dump($products);
            ?>
        </pre>
        <!-- MS_EXPECT product_count= 8 inventory_value = 41380000 -->
    </body>
</html>
<?php
require 'data.php';
$categoryMap = [];
foreach ($categories as $cat) {
    $categoryMap[$cat['id']] = $cat['name'];
}
$totalInventoryValue = 0;
$productCount = count($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop - Catalog (Buoi 1)</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 900px;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        td:nth-child(1), td:nth-child(4), td:nth-child(5), td:nth-child(6) {
            text-align: right;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>MiniShop - Catalog (Buoi 1)</h1>
    <table>
        <thead>
            <tr>
                <th>sku</th>
                <th>name</th>
                <th>category name</th>
                <th>price</th>
                <th>qty</th>
                <th>line_total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <?php
                    $lineTotal = $product['price'] * $product['qty'];
                    $totalInventoryValue += $lineTotal;
                ?>
                <tr>
                    <td><?= htmlspecialchars($product['sku']) ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($categoryMap[$product['category_id']]) ?></td>
                    <td><?= number_format($product['price'], 0, ',', '.') ?> đ</td>
                    <td><?= $product['qty'] ?></td>
                    <td><?= $lineTotal ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>So san pham =<?=$productCount ?></p>
    <p>Tong gia tri kho = <?= $totalInventoryValue ?> </p>
    <hr>
    <pre><?php var_dump($products);?></pre>
    <!--MS_EXPECT  products_count=8 inventory_value=41380000 -->
</body>
</html>
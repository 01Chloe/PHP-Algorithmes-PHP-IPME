<?php
$produits = [
    ['nom' => 'Chaise', 'stock' => 5],
    ['nom' => 'Table', 'stock' => 0],
    ['nom' => 'Lampe', 'stock' => 3]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach($produits as $key => $produit) : ?>
                <?php if(!$produit['stock']) : ?>
                    <li><?= $produit['nom']?> : Rupture de stock</li>
                <?php else : ?>
                    <li><?= $produit['nom']?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
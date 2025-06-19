<?php
$fruits = ['Pomme', 'Banane', 'Cerise'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    <div>
        <ul>
        <?php foreach($fruits as $fruit) : ?>
            <li><?= $fruit?></li>
        <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
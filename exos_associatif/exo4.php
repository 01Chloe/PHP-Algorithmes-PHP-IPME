<?php
$notes = [
    'maths' => 15,
    'francais' => 18,
    'histoire' => 16
];

$max = $notes['maths'];

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
        <?php foreach($notes as $key => $note) : ?>
            <?php if($note > $max) : ?>
                <?php $max = $note ?>
                <p>La meilleure note est en <?= $key ?> : <?= $note ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
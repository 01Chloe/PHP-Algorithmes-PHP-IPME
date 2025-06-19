<?php
$notes = [
    'maths' => 15,
    'francais' => 18,
    'histoire' => 16
];

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
    <div>
        <?php foreach($notes as $key => $note) : ?>
            <p>La note en <?= $key?> est : <?= $note?></p>
        <?php endforeach; ?>
    </div>
    
</body>
</html>
<?php
$menu = [
    'Google' => 'https://google.fr',
    'Amazon' => 'https://www.amazon.fr/',
    'Spotify' => 'https://open.spotify.com/intl-fr',
    'Youtube' => 'https://www.youtube.com/'
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
</head>
<body>
    <nav>
        <ul>
            <?php foreach($menu as $key => $value) : ?>
                <li>
                    <a href=<?= $value?>><?= $key?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</body>
</html>
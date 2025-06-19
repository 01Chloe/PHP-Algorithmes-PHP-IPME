<?php
$personne = [
    'Nom' => 'Dupont',
    'Prénom' => 'Alice',
    'Âge' => 25,
    'Ville' => 'Paris'
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
    <table>
        <tbody>
        <?php foreach($personne as $key => $personne) : ?>
            <tr>
                <td><?= $key?></td>
                <td><?= $personne?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
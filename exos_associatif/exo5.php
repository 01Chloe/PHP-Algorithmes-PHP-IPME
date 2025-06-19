<?php
$couleurs = [
    'rouge' => 'FF0000',
    'bleu' => '00FF00',
    'vert' => '0000FF'
];
$newArray = [];

foreach($couleurs as $key => $couleur) {
   $newArray[$couleur] = $key;
}
var_dump($newArray);
?>

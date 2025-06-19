<?php
$decodRes = json_decode(file_get_contents('https://hp-api.onrender.com/api/characters'), true);
// var_dump($decodRes);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($decodRes as $value) : ?>
                <?php if($value['image']) : ?>
                    <div class="col-md-4">
                        <div class="card my-4" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-img-top">
                                    <img src="<?= $value['image'] ?>" alt="" class="w-100">
                                </div>
                                <div class="card-title">
                                    <h2><?= $value['name'] ?></h2>
                                </div>
                                <div class="card-text">
                                    <p><?= $value['house'] ?></p>
                                    <p><?= $value['dateOfBirth'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
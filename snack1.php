<?php

$day_one = [
    [
        'home' => 'Miami Heat',
        'away' => 'Boston Celtics',
        'hpoints' => '123',
        'apoints' => '109',
    ],
    [
        'home' => 'Milwaukee Bucks',
        'away' => 'Philadelphia 76ers',
        'hpoints' => '98',
        'apoints' => '149',
    ],
    [
        'home' => 'Toronto Raptors',
        'away' => 'Chicago Bulls',
        'hpoints' => '131',
        'apoints' => '129',
    ],
    [
        'home' => 'Brooklyn Nets',
        'away' => 'Atlanta Hawks',
        'hpoints' => '113',
        'apoints' => '119',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>NBA Day One Results</h2>
<hr>
<ul>
    <?php for ($i = 0; $i < count($day_one); $i++) : ?>
    <li><?= $day_one[$i]['home'] ?> - <?= $day_one[$i]['away'] ?> | <?= $day_one[$i]['hpoints'] ?>-<?= $day_one[$i]['apoints'] ?></li>
    <?php endfor; ?>
</ul>
</body>
</html>
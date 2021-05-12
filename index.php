<?php 

include_once __DIR__. '/class/prodotto.class.php';
include_once __DIR__ . '/class/ps4.class.php';

$game1 = new Ps4('Red dead redemption', 'ps4',10,0);



var_dump($game1);

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
    <h1><?php echo $game1 -> getNome() ?></h1>

    <p>il prezzo è : <?php echo $game1 -> getPrezzo()  ?></p>
</body>

</html>
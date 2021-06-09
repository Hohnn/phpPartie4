<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Exo1</p>
    <?php
        $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
    ?>

    <p>Exo2</p>
    <?php
        echo $months[2];
    ?>

    <p>Exo3</p>
    <?php
        echo $months[5];
    ?>
    
    <p>Exo4</p>
    <?php
        $key = array_search('aout', $months);
        $months[$key] = 'août';
        echo $months[$key];
    ?>

    <p>Exo5</p>
    <?php
        $hautDeFrance = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
    ?>

    <p>Exo6</p>
    <?php
        echo $hautDeFrance[59];
    ?>
    
    <p>Exo7</p>
    <?php
        $hautDeFrance[51] = 'Marne';
        echo $hautDeFrance[51];
    ?>

    <p>Exo8</p>
    <?php
        echo $hautDeFrance[59];
    ?>

    <p>Exo8</p>
    <ul>
    <?php for ($i=0; $i < sizeof($months); $i++) { ?>
        <li><?= $months[$i] ?></li>
        <?php  } ?>
        
    </ul>

    <p>Exo9</p>
    <ul>
    <?php
        foreach ($hautDeFrance as $value) { ?>
            <li><?= $value ?></li>
            <?php
        }
    ?>
    </ul>

    <p>Exo10</p>
    <ul>
    <?php
        foreach ($hautDeFrance as $key => $value) { ?>
            <li>Le département <?= $value ?> a le numéro <?= $key ?></li>
            <?php
        }
    ?>
    </ul>


</body>
</html>
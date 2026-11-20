
<?php
$nom = "Amine";
$age = 20;
$ville = "Agadir";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Présentation</title>
</head>

<body>

    
    <h1>Mon profil</h1>

    
    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>

    
    <p>
        Vous êtes à
        <?php echo $ville; ?>
    </p>

</body>

</html>

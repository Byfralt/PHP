<?php 
    $nom = "GANDALF";
    $pv = "100";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vue.css">
    <title>Vue</title>
</head>
<body>
    <!-- Formulaire -->
    <div class="form">
        <ul>
            <li>Nom :<input id="inputNom" type="text" placeholder="Nom"></li>
            <li>Pv:<input id="inputPv" type="text" placeholder="Pv"></li>
            <button id="Valider">Valider</button>
        </ul>
    </div>
    <!-- Personnage -->
    <div class="container">
        <div class="nom">
            <h1><?php echo $nom ?></h1>
        </div>
        <div class="pv">
            <p>Nombre de PV :<?php echo $pv ?> </p>
        </div>
        <div class="bouton">
            <button id="B1">Afficher</button>
            <button id="B2">Ajouter</button>
        </div>
    </div>
</body>
</html>



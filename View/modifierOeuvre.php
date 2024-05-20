<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Modifier ou supprimer une œuvre</title>
</head>
<body>
<?php
include 'header.php';
?>

<main>
    <div class="edit-work-container">
        <h2>Modifier ou Supprimer une œuvre</h2>
        <form action="../View/modifierOeuvre.php" method="post">
            <select name="filmmodif" size="1">
                <?php foreach ($nomoeuvre as $oeuvremodifiable): ?>
                    <option value="<?php echo $oeuvremodifiable['codifOC']; ?>"><?php echo $oeuvremodifiable['titreOriginal']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <br>
            <input type="text" name="titre" placeholder="Titre de l'œuvre orginial" required>
            <input type="text" name="titrefr" placeholder="Titre de l'œuvre en Francais" required>
            <h4>Année de parution</h4>
            <?php
            // Variable qui ajoutera l'attribut selected de la liste déroulante
            $selected = '';

            // Parcours du tableau
            echo '<select name="annees">',"\n";
            for($i=1950; $i<=2030; $i++)
            {
                // L'année est-elle l'année courante ?
                if($i == date('Y'))
                {
                    $selected = ' selected="selected"';
                }
                // Affichage de la ligne
                echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
                // Remise à zéro de $selected
                $selected='';
            }
            echo '</select>',"\n";
            ?>
            <br>
            <br>
            <textarea name="resume" placeholder="Résumé de l'œuvre" required></textarea>
            <input type="number" name="nombre_episodes" placeholder="Nombre d'épisodes" min ="0" required>
            <h4>Nom de la categorie</h4>
            <select type = "number" name="libelle_categorie" size="1">
                <?php foreach ($data as $catego): ?>
                    <option value="<?php echo $catego['classOC']; ?>"><?php echo $catego['libclaOC']; ?></option>
                <?php endforeach; ?>
            </select>
            <h4>Nom du genre</h4>
            <select type = "number" name="libelle_genre" size="1">
                <?php foreach ($data2 as $genre): ?>
                    <option value="<?php echo $genre['codGenre']; ?>"><?php echo $genre['libgOC']; ?></option>
                <?php endforeach; ?>
            </select>
            <h4>Nom de l'acteur</h4>
            <select type = "number" name="nom_acteur" size="1">
                <?php foreach ($data3 as $acteur): ?>
                    <option value="<?php echo $acteur['codeAct']; ?>"><?php echo $acteur['nomAct'] . ' ' . $acteur['preAct']; ?></option>
                <?php endforeach; ?>
            </select>
            <h4>Nom du realisateur</h4>
            <select type = "number" name="nom_realisateur" size="1">
                <?php foreach ($data4 as $real): ?>
                    <option value="<?php echo $real['codRea']; ?>"><?php echo $real['nomRea'] . ' ' . $real['prenomRea']; ?></option>
                <?php endforeach; ?>
            </select>

            <br>
            <br>
            <input type="submit" name = "edit" value="Modifier Œuvre">
            <br>
            <br>
            <input type="submit" name = "delete" value="Supprimer Œuvre">
        </form>
    </div>

</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>

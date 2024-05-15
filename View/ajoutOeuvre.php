<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ajouter une œuvre</title>
</head>
<body>
<?php
    include 'header.php';
    include '../Controler/Controler.php';
?>

    <main>
        <div class="add-work-container">
            <h2>Ajouter une œuvre</h2>
            <form action="ajouter_oeuvre.php" method="post">
                <input type="text" name="titre" placeholder="Titre de l'œuvre orginial" required>
                <input type="text" name="titrefr" placeholder="Titre de l'œuvre en Francais" required>
                <h4>Année de parution</h4>
                <select name="sortie" size="1">
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                </select>
                <br>
                <br>
                <textarea name="resume" placeholder="Résumé de l'œuvre" required></textarea>
                <input type="number" name="nombre_episodes" placeholder="Nombre d'épisodes" required>
                <h4>Nom de la categorie</h4>
                <select name="libelle_categorie" size="1">
                    <?php foreach ($data as $row): ?>
                        <option value="<?php echo $row['classOC']; ?>"><?php echo $row['libclaOC']; ?></option>
                    <?php endforeach; ?>
                </select>
                <h4>Nom du genre</h4>
                <select name="libelle_genre" size="1">
                    <?php foreach ($data2 as $row): ?>
                        <option value="<?php echo $row['codGenre']; ?>"><?php echo $row['libgOC']; ?></option>
                    <?php endforeach; ?>
                </select>
                <h4>Nom de l'acteur</h4>
                <select name="nom_acteur" size="1">
                    <?php foreach ($data3 as $row): ?>
                        <option value="<?php echo $row['codeAct']; ?>"><?php echo $row['nomAct'] . ' ' . $row['preAct']; ?></option>
                    <?php endforeach; ?>
                </select>
                <h4>Nom du realisateur</h4>
                <select name="nom_realisateur" size="1">
                    <?php foreach ($data4 as $row): ?>
                        <option value="<?php echo $row['codRea']; ?>"><?php echo $row['nomRea'] . ' ' . $row['prenomRea']; ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <input type="submit" name="ajout" value="Ajouter Oeuvre">
            </form>
        </div>
    </main>

    <?php
    include 'footer.php';
    ?>
</body>
</html>

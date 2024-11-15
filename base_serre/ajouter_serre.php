<html>
<body>

    <?php
    if (!isset($_POST['btnAjouterSerre'])) { /* L'entrée btnSeConnecter est vide = le formulaire n'a pas été submit=posté, on affiche le formulaire */

        echo '
    
        <form action="ajouter_serre.php" method="post">
            Numero : <input type="text" name="noregion"></br></br>
            Nom Region : <input type="text" name="nomregion"></br></br>
            <input type="submit" name="btnAjouterSerre" value="Ajouter region">
        </form>';
    
    } else {
    require_once('connexion_serre.php');
    $stmt = $connexion->prepare("INSERT INTO region (noregion, nomregion) VALUES (:noregion, :nomregion)");
    $noregion = $_POST["noregion"];
    $nomregion = $_POST["nomregion"];
    $stmt->bindValue(':noregion', $noregion, PDO::PARAM_STR);
    $stmt->bindValue(':nomregion', $nomregion, PDO::PARAM_STR);
    $stmt->execute();
    $nb_ligne_affectees = $stmt->rowCount();
    echo $nb_ligne_affectees." ligne(s) insérée(s).<BR>";
    }?>

</body>
</html>
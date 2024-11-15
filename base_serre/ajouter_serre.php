<html>
<body>

    <?php
    require_once('connexion_serre.php');
    $stmt = $connexion->prepare("INSERT INTO region (noregion, nomregion) VALUES (:noregion, :nomregion)");
    $noregion = $_POST["noregion"];
    $nomregion = $_POST["nomregion"];
    $stmt->bindValue(':noregion', $noregion, PDO::PARAM_STR);
    $stmt->bindValue(':nomregion', $nomregion, PDO::PARAM_STR);
    $stmt->execute();
    $nb_ligne_affectees = $stmt->rowCount();
    echo $nb_ligne_affectees." ligne(s) insérée(s).<BR>";
    ?>

</body>
</html>
<?php

require_once('connexion_serre.php');

$stmt = $connexion->prepare("SELECT * FROM region");

$stmt->setFetchMode(PDO::FETCH_OBJ);

// Les résultats retournés par la requête seront traités en 'mode' objet

$stmt->execute();

 

// Parcours des enregistrements retournés par la requête : premier, deuxième…

echo "<table border=2>";

while($enregistrement = $stmt->fetch())

{
    echo "<tr>";
  // Affichage des champs noregion et nomregion de la table 'region'
    echo '<td>', $enregistrement->noregion, '</td>';
    echo '<td>', $enregistrement->nomregion,'</td>';
    echo "</tr>";

}

echo "</table>";

?>
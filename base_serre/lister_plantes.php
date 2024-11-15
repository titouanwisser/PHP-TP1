<?php

require_once('connexion_serre.php');

$stmt = $connexion->prepare("SELECT * FROM plante WHERE noregion=:noregion");

$noregion = $_GET['noregion'];
$stmt->bindValue(":noregion", $noregion);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();

echo "<table border=2>";
echo "<tr>";
echo '<td>', "N° Plante", '</td>';
echo '<td>', "Nom Plante", '</td>';
echo "</tr>";

while($enregistrement = $stmt->fetch())

{

  echo "<tr>";
  // Affichage des champs de la table plante en fonction de la region
  echo '<td>', $enregistrement->noplante, '</td>';
  echo '<td>', $enregistrement->nomplante, '</td>';
  echo "</tr>";

}

echo "</table>";

?>

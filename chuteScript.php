<html>
<body>
    <?php $champPesanteur = $_POST["champPesanteur"];
    $instant = $_POST["instant"];
    $y = ($champPesanteur * $instant * $instant) / 2;
    $v = $champPesanteur * $instant;
    echo "<table border=2>";
    echo "<tr>";
    echo "<td> Distance parcourue après 100 secondes = $y mètres.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Vitesse acquise après 100 secondes = $v mètres/secondes.</td>";
    echo "</tr>";
    echo "</table>"."</br>"."</br>";
    echo "BONUS";
    echo "<table border=2>";
    echo "<tr>";
    echo "<td> Temps écoulé (s)</td>";
    echo "<td> Vitesse acquise (m/s)</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> 0 </td>";
    echo "<td> 0 </td>";
    echo "</tr>";
    $vitesseProgressive = $v/100; # 52
    for ($i = 1; $i <= 100; $i++) {
        echo "<tr>";
        echo "<td> $i </td>";
        echo "<td> $vitesseProgressive </td>";
        echo "</tr>";
        $vitesseProgressive = $vitesseProgressive + $v/100;
    }
    echo "</table>";
    ?>
</body>
</html>
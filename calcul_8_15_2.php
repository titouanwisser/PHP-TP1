<html>
<body>
    <?php $vitesseFusee = $_POST["vitesseFusee"]; ?>
    <?php $dureeDansFusee = $_POST["dureeDansFusee"]; ?>
    Durée écoulée sur la Terre = <?php echo $dureeDansFusee/(sqrt(1-(($vitesseFusee**2)/(300000**2)))); ?><br>
</body>
</html>
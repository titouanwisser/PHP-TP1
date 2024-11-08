<html>
<body>
    <?php $rangTerme = $_POST["rangTerme"];?>
    <?php $valeurDepart = $_POST["valeurDepart"];?>
    Valeur pour le rang 0 : <?php print 2 ."</br>"; ?>
    <?php $somme = $valeurDepart;?>
    <?php for ($i = 0; $i <= $rangTerme; $i++) {
        $somme = $somme/4+2
        echo 'Valeur pour le '. $i .'ème rang : '. $somme ."</br>";
    }?>
</body>
</html>
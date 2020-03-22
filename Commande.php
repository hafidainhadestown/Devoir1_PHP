<?php
$file=fopen("commande.txt","r+");
while(!feof($file)) {
    $ligne = fgets($file, 255);
    if (!empty($ligne)) {

        $tabligne = explode("|", $ligne);

    }
    print_r($tabligne);
    echo "<br>";
    echo "Champs 1: $tabligne[0]<br>";
    echo "Champs 2: $tabligne[1]<br>";
    echo "Champs 3: $tabligne[2]<br>";
    echo "Champs 4: $tabligne[3]<br>";
    echo "Champs 5:$tabligne[4]<br>";
    echo "Champs 6:$tabligne[5]<br>";

}
   fclose($file);
    ?>

<?php
$commandes=file('C:\Users\hp\PhpstormProjects\untitled\Centrale.txt');
//Pour compter le nombre de commandes dans lr tableau
$nbre=count($commandes);
if($nbre==0){
    echo 'Aucune commande';
}

echo "<table border=\"2\"> <br>";
echo "<tr width='20'>
        <th bgcolor=\'#6495ed\' height='20' width='15'>numero commande</th>
        <th bgcolor=\'#6495ed\' height='20'  width='15'>Numéro client</th>
        <th bgcolor=\'#6495ed\' height='20' width='15' >Date commande</th>
        <th bgcolor=\'#6495ed\' height='20' width='15'> Designation article</th>
        <th bgcolor=\'#6495ed\' height='20' width='15'>Quantite</th>
        <th  bgcolor=\'#6495ed\' height='20' width='15'>Prix unitaire</th>
        <th  bgcolor=\'#6495ed\' height='20' width='15'>Date de livraison</th>
         <th  bgcolor=\'#6495ed\' height='20' width='15'>Adresse du client</th>


        </tr>";
echo "<h1> Centrale d\'achats</h1><br>";
echo "<h2> Commandes clients</h2>";
for($i=0; $i<$nbre;$i++){
    //Decoupage de chaque ligne
    $ligne=explode("|",$commandes[$i]);


    //Affichage des commandes
    echo"<tr> 
        <td>".$ligne[0]."</td>
        <td align=\"right\">" .$ligne[1]."</td>
        <td align=\"right\">" .$ligne[2]."</td>
        <td align=\"right\">" .$ligne[3]."</td>
        <td align=\"right\">" .$ligne[4]."</td>
        <td align=\"right\">" .$ligne[5]."</td>
        <td align=\"right\">" .$ligne[6]."</td>
        <td align=\"right\">" .$ligne[7]."</td>
        </tr>";

}
    echo "</table>";



?>
</body>
</html>



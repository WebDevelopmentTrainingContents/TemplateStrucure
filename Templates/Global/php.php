<?php

//-------------------------------- Global :

function boucleLiens($a){
    
    foreach($a as $b){
        echo "<li><a href=\"\">" . $b . "</a></li>";
    }
}


// exemple de non utilisation d'un ou plusieurs arguments :
/* function fonctionTest($test, $test2, $test3) {
    if($test < 5) {
        echo $test2;
    }
    else {
        echo $test3;
    }
}
 */

function boucleCartesProduits($a){
    
    foreach($a as $b){
        echo "<div class=\"carteBoutique\">
        <h2>" . $b ."</h2>
        <p></p>
    </div>";
    }
}

//-------------------------------- Header :

$liens = ['Accueil' , 'Boutique' , 'Contacts' , 'A propos' ];

//-------------------------------- Accueil :

//-------------------------------- Boutique :

$titresProduits = ['Ceinture' , 'Casquette' , 'Bonnet' , 'Pantalon'];

//-------------------------------- Contact :

//-------------------------------- Footer :

$chiffre = "3";
$couleur = "";
$classe = "";

var_dump($couleur);

if($chiffre < 5) {
    $couleur = "brown";
    $classe = "classe1" ;
}
else {
    $couleur = "grey";
    $classe = "class2";
}
var_dump($couleur);















$liensFooter = ['Contactez-Nous' , 'Formulaire' , 'Telephone' , 'Réseaux Sociaux', 'Mentions légales'];

?>
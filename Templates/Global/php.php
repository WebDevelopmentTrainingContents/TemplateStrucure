<?php

//-------------------------------- Global :

function boucleLiens($a){
    
    foreach($a as $b){
        echo "<li><a href=\"\">" . $b . "</a></li>";
    }
}

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

$liensFooter = ['Contactez-Nous' , 'Formulaire' , 'Telephone' , 'Réseaux Sociaux'];

?>
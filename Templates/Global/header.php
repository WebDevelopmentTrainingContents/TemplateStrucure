<?php
require('php.php');
require('head.php');
?>

<header>
    <div id=divLogo class="container">
        <img src="../../Images/sql.png" alt="">
    </div>
    <div id="divNav" class="container">
        <ul>
         <?= boucleLiens($liens) ?>
        </ul>
<!-- Le code ci-dessus revient à écrire le code ci-dessous :
 -->
<!-- <ul>
<li><a href=\"\">" xxx "</a></li>
<li><a href=\"\">" xxx "</a></li>
<li><a href=\"\">" xxx "</a></li>
<li><a href=\"\">" xxx "</a></li>
<li><a href=\"\">" xxx "</a></li>
</ul> -->
    </div>
</header>
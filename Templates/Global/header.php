<?php
require('php.php');
require('head.php');
?>

<header>
    <div id="divLogo" class="container">
        <img src="../../Images/imgDev.jpg" alt="">
    </div>
    <div id="divNav" class="container">
        <ul>
         <?= boucleLiens($liens) ?>

        </ul>
    </div>
</header>
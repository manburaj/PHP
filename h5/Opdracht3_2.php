<?php

//echo $_POST['apen'];

//print_r($_POST);

//echo "<img src = 'img/".$_POST['apen'].".jpg'>";

foreach ($_POST['apen'] as $aap) {
    echo "<img src = 'img/".$aap.".jpg'>";
};


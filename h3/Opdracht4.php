<?php

$leeftijd1=66;
$leeftijd2=12;
$leeftijd3=3;

$bedrag1 = 10;
$bedrag2 = 10;
$bedrag3 = 10;


if ($leeftijd1 > 65){
    $bedrag1 = $bedrag1*0.5;
}

if ($leeftijd2 <= 12){
    $bedrag2 = $bedrag2*0.5;
}

if ($leeftijd3 <= 3){
    $bedrag3 = 0;

}
echo $bedrag3;

?>

<br><a href="../index.php">Hoofd Pagina</a>

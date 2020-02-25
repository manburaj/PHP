<?php

$clubs = array(
    "De Spartelkuikens" => 25,
    "De Waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
);

foreach($clubs as $club => $value) {
    echo "$club heeft $value leden <br>";

    $roundValue = floor($value / 5);

    for($i = 0; $i < $roundValue; $i++) {
        echo "<img src=\"img/swim.png\" width='100px' height='200px'>";
    }
    echo "<br>";


}

?>

<br><a href="../index.php">Hoofd Pagina</a>

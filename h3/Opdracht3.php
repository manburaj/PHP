<?php

for($i = 1; $i <= 9; $i++) {

    if ($i % 2 == 0 ) {
        echo "<img style=\"border: 5px solid red;\" src='img/aap".$i.".jpg'>";
    }

    else {
        echo "<img style=\"border: 5px solid green;\" src='img/aap".$i.".jpg'>";
    }
}

?>

<br><a href="../index.php">Hoofd Pagina</a>

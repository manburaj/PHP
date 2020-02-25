
<?php
function check($str){

$n = strlen($str);
$digitSum = 0;
for ($i = 0; $i < $n; $i++)
$digitSum += ($str[$i] - '0');

return ($digitSum % 3 == 0);
}

$str = "1332";
$x = check($str) ? "Yes" : "No ";
echo($x);

?>

<br><a href="../index.php">Hoofd Pagina</a>

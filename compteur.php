<?php
$file = 'compteur.txt';
$visites = (int)file_get_contents($file);
$visites++;
file_put_contents($file, $visites);
echo $visites;
?>

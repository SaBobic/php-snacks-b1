<!--
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
-->

<?php 

$random_numbers = [];

do {
    $random_number = rand(1, 15);
    if (!in_array($random_number, $random_numbers)) $random_numbers[] = $random_number;
} while (count($random_numbers) < 15);

var_dump($random_numbers);

?>
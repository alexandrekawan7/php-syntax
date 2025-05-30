<?php

// include 'exercicio45.php';
// include 'exercicio45.php';
// Causa erro de duplicação

require_once 'exercicio45.php'; // Inclui apenas uma vez, evitando duplicação

echo "Funcionou! " . media([10, 20, 30, 60]) . "<br>";

?>
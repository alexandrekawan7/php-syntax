<?php

include_once 'exercicio45.php'; // Supondo que seja os dados do banco

// Após uso carregamos novamente sem querer

include_once 'exercicio45.php';

echo "Funcionou! " . media([10, 20, 30]) . "<br>";
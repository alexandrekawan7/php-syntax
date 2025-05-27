<?php

$n1 = 9.3;
$n2 = 8.4;

$media = ($n1 + $n2) / 2;

if ($media >= 7.0) {
    echo "Aprovado";
} else if ($media >= 5.0 && $media <= 6.9) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
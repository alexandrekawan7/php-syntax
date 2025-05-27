<?php

$temperatura = 16;

if ($temperatura < 0) {
    echo "Alerta de Gelo!";
} else if ($temperatura >= 0 && $temperatura <= 15) {
    echo "Clima Ameno";
} else if ($temperatura > 15 && $temperatura <= 25) {
    echo "Clima Agradável";
} else {
    echo "Atenção: Calor Extremo!";
}
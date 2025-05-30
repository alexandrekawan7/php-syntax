<?php

function media($valores) {
    $soma = 0;
    $quantidade = count($valores);
    
    foreach ($valores as $valor) {
        $soma += $valor;
    }
    
    return $quantidade > 0 ? $soma / $quantidade : 0;
}

function formataPreco($preco) {
    return 'R$' . number_format($preco, 2, ',', '.');
}

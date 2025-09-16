<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
    25168486-2- João Pedro Ferreira Oliveira
Data: 16 de Setembro de 2025
Descritivo: Escreva um script que determine se um número é par ou ímpar, usando diferentes métodos e com validação
**************************/


$numero = 17;        
$usarEntradaGET = false;  


if ($usarEntradaGET && isset($_GET['numero'])) {
    $numero = $_GET['numero'];
}


if (!is_numeric($numero)) {
    echo "Erro: insira um valor numérico válido.<br>";
    exit;
}

$numeroFloat = (float) $numero;
$numeroInt = (int) floor($numeroFloat);


// Método 1: usando módulo %
$resto = $numeroInt % 2;
if ($resto == 0) {
    $resultado_mod = "Par";
} else {
    $resultado_mod = "Ímpar";
}

// Método 2: usando operador bitwise & (o bit menos significativo)
if (($numeroInt & 1) == 0) {
    $resultado_bitwise = "Par";
} else {
    $resultado_bitwise = "Ímpar";
}

// --- Saída completa ---
echo "Número informado: {$numero} <br>";
echo "Parte inteira usada para verificação: {$numeroInt} <br>";
echo "Método módulo (%): {$resultado_mod} <br>";
echo "Método bitwise (&): {$resultado_bitwise} <br>";

// --- Comparativo / consistência ---
if ($resultado_mod !== $resultado_bitwise) {
    echo "<span style='color:red;'>Atenção: métodos discordantes — revise a entrada.</span><br>";
} else {
    echo "<em>Métodos de verificação concordam.</em><br>";
}

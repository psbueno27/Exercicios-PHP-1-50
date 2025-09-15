/******************************************************************************
    Curso: Engenharia de Software
    Disciplina: Linguagem e Técnicas de Programacão
    Professor: Flores
    Turma: ESOFT-2A
    Componentes:
                Alef Luciano (RA: 25004652-2)
                Daniel de Souza (RA: 25143755-2)
                João Pedro (RA: 25168486-2)
                Juan Pablo (RA: 25181903-2)
                Pedro Bueno (RA: 25181992-2)
                Carlos Eduardo Galdino Sousa (RA: 25148436-2)
    Data: 14 de Setembro de 2025
    Descritivo: Crie uma condição que converta  a temperatura entre Celsius e Fahrenheit baseado em uma escolha
    *******************************************************************************/


    <?php
$escolha = 1; // 1 = Celsius para Fahrenheit | 2 = Fahrenheit para Celsius
$temp = 30;

if ($escolha == 1) {
    $f = ($temp * 9/5) + 32;
    echo "$temp °C em Fahrenheit = $f °F";
} elseif ($escolha == 2) {
    $c = ($temp - 32) * 5/9;
    echo "$temp °F em Celsius = $c °C";
} else {
    echo "Opção inválida";
}
?>

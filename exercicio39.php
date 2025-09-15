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
    Descritivo: Crie uma condição que determine o maior entre três numeros
    *******************************************************************************/


    <?php
$n1 = 15;
$n2 = 22;
$n3 = 7;

$maior = $n1;

if ($n2 > $maior) {
    $maior = $n2;
}
if ($n3 > $maior) {
    $maior = $n3;
}

echo "O maior número é: $maior";
?>

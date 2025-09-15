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
    Descritivo: Crie uma calculadora simples com switch case
    *******************************************************************************/

    <?php
$n1 = 10;
$n2 = 5;
$operacao = "+"; //voce pode escolher entre = + - * /

switch ($operacao) {
    case "+":
        echo "$n1 + $n2 = " . ($n1 + $n2);
        break;
    case "-":
        echo "$n1 - $n2 = " . ($n1 - $n2);
        break;
    case "*":
        echo "$n1 * $n2 = " . ($n1 * $n2);
        break;
    case "/":
        if ($n2 != 0) {
            echo "$n1 / $n2 = " . ($n1 / $n2);
        } else {
            echo "Erro: divisão por zero";
        }
        break;
    default:
        echo "Operação inválida";
}
?>

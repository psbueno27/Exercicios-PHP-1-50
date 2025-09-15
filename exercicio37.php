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
    Descritivo: Crie uma condição que verifique se um triangulo é valido
    *******************************************************************************/


    <?php
$a = 7;
$b = 10;
$c = 5;

if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "É um triângulo válido";
} else {
    echo "Não é um triângulo válido";
}
?>

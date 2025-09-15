<?php 
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
    Descritivo: Verifique se um número é par E positivo
    *******************************************************************************/

    $var = 0;

    if ($var % 2 == 0 && $var > 0) {
        echo "O número é par e positivo";
    } else if ($var % 2 == 0 && $var < 0) {
        echo "O número é par e negativo";
    } else if ($var % 2 != 0 && $var > 0) {
        echo "O número é ímpar e positivo";
    } else if ($var % 2 != 0 && $var < 0) {
        echo "O número é ímpar e negativo";
    } else {
        echo "O número é zero";
    }
?>
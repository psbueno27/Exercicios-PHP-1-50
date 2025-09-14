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

Data: 11 de Setembro de 2025
Descritivo: Crie uma expressão ternária que verifique se um ano é bissexto.
*******************************************************************************/

$ano = 2025;
echo ((($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) ? "Ele é Bissexto" : "Ele não é bissexto");
?>
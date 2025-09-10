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
Data: 10 de Setembro de 2025
Descritivo: Verifique se duas variáveis são idênticas em valor e tipo.
*******************************************************************************/

$numb1 = 30;
$numb2 = "30";

echo"$numb1 é do mesmo valor e tipo que o $numb2? ";
echo"Resposta: ";
var_dump($numb1===$numb2); //Iguais em valor mas não em tipo.

?>
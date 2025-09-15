<?php 
    /******************************************************************************
    Curso: Engenharia de Software
    Disciplina: Linguagem e Técnicas de Programacão
    Professor: Flores
    Turma: ESOFT-2A
    Componentes:
                    João Pedro (RA: 25168486-2)
                    Juan Pablo (RA: 25181903-2)
                    Pedro Bueno (RA: 25181992-2)
                    Carlos Eduardo Galdino Sousa (RA: 25148436-2)
    Data: 14 de Setembro de 2025
    Descritivo: Crie uma condição que verifique se uma pessoa é maior de idade
    *******************************************************************************/

   
    $idade = 18;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } elseif ($idade > 0) {
        echo "Você é menor de idade.";
    } else {
        echo "Idade inválida.";
    }

?>
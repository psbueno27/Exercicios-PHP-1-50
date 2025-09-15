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
    Descritivo: Teste se uma string não está vazia E tem mais de 3 caracteres
    *******************************************************************************/

   
    $var = "";

    if(!empty($var) && strlen($var) >= 3) {
        echo "A string '$var' não está vazia e tem mais de 3 caracteres";
    } else if(!empty($var) && strlen($var) < 3) {
        echo "A string '$var' não está vazia e tem menos de 3 caracteres";
    } else {
        echo "A string está vazia";
    }

?>
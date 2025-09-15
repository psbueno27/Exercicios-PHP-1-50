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
    Descritivo: Verifique se NÃO é fim de semana (usando operador lógico NOT)
    *******************************************************************************/

   
    $dia = "quarta"; 

    if (!($dia == "sábado" || $dia == "domingo")) {
        echo "Hoje NÃO é fim de semana.";
    } else {
        echo "Hoje é fim de semana!";
    }

?>
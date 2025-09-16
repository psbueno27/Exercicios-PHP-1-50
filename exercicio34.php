<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
                Alef Luciano (RA: 25004652-2)
                Daniel de Souza (RA: 25143755-2)
                João Pedro (RA: 25168486-2)
                Juan Pablo (RA: 25181903-2)
                Pedro Bueno (RA: 25181992-2)
                Carlos Eduardo Galdino Sousa (RA: 25148436-2)        
    
Data: 16 de Setembro de 2025
Descritivo: Crie uma condição que verifique se um ano é bissexto e mostre o calendário do ano
**************************/

$ano = 2025;

// Função que verifica se é bissexto
function ehBissexto(int $ano): bool {
    return ($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0);
}

// ----------------------
// Estilo CSS para deixar o calendário mais bonito
// ----------------------
echo "
<style>
    body { font-family: Arial, sans-serif; background: #f5f5f5; }
    h2 { margin: 20px 0 10px; color: #333; }
    table { border-collapse: collapse; margin: 10px; display: inline-block; 
            background: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: center; width: 40px; height: 40px; }
    th { background: #4CAF50; color: white; }
    .domingo { color: red; font-weight: bold; }
    .sabado { color: blue; font-weight: bold; }
    .vazio { background: #eee; }
</style>
";

// ----------------------
// Cabeçalho com info do ano
// ----------------------
$bissexto = ehBissexto($ano);
$resultado = $bissexto ? "SIM" : "NÃO";
echo "<h1>Calendário de {$ano}</h1>";
echo "<p>Ano bissexto? <strong>{$resultado}</strong></p>";

// ----------------------
// Gerar os meses
// ----------------------
$nomesMeses = [
    1 => "Janeiro", "Fevereiro", "Março", "Abril",
    "Maio", "Junho", "Julho", "Agosto",
    "Setembro", "Outubro", "Novembro", "Dezembro"
];

$diasSemana = ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"];

for ($mes = 1; $mes <= 12; $mes++) {
    echo "<h2>{$nomesMeses[$mes]}</h2>";
    echo "<table>";
    echo "<tr>";
    foreach ($diasSemana as $i => $dia) {
        $classe = ($i == 0) ? "domingo" : (($i == 6) ? "sabado" : "");
        echo "<th class='{$classe}'>{$dia}</th>";
    }
    echo "</tr><tr>";

    // Quantos dias tem este mês
    $diasNoMes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

    // Dia da semana do primeiro dia (0=domingo, 6=sábado)
    $primeiroDiaSemana = date("w", strtotime("{$ano}-{$mes}-01"));

    // Espaços vazios antes do primeiro dia
    for ($i = 0; $i < $primeiroDiaSemana; $i++) {
        echo "<td class='vazio'></td>";
    }

    // Imprime os dias
    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
        $diaSemana = date("w", strtotime("{$ano}-{$mes}-{$dia}"));
        $classe = ($diaSemana == 0) ? "domingo" : (($diaSemana == 6) ? "sabado" : "");
        echo "<td class='{$classe}'>{$dia}</td>";

        // Quebra de linha no sábado
        if ($diaSemana == 6 && $dia != $diasNoMes) {
            echo "</tr><tr>";
        }
    }

    echo "</tr></table>";
}


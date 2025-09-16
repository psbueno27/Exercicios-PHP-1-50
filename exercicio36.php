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
Descritivo: Calcula o IMC e mostra se o peso está dentro do ideal ou excessivo
**************************/

// Altura fixa de exemplo (poderia vir de input também)
$altura = 1.75;

// Faixa de peso considerada saudável (IMC entre 18.5 e 24.9)
$pesoMin = 18.5 * ($altura * $altura);
$pesoMax = 24.9 * ($altura * $altura);

// Captura o peso informado via formulário
$peso = isset($_POST['peso']) ? (float) $_POST['peso'] : null;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        h1 { color: #333; }
        form { margin-bottom: 20px; }
        input[type=number] { padding: 5px; width: 100px; }
        input[type=submit] { padding: 6px 12px; margin: 5px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type=submit]:hover { background: #45a049; }
        .resultado { padding: 10px; background: #fff; border-radius: 5px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); margin-top: 10px; }
        .ok { color: green; font-weight: bold; }
        .excessivo { color: red; font-weight: bold; }
    </style>
</head>
<body>

<h1>Calculadora de IMC</h1>
<p>Altura fixa usada no exemplo: <strong><?php echo $altura; ?> m</strong></p>
<p>Faixa de peso saudável: <strong><?php echo round($pesoMin,1); ?> kg – <?php echo round($pesoMax,1); ?> kg</strong></p>

<form method="post">
    <label>Informe seu peso (kg):</label><br>
    <input type="number" step="0.1" name="peso" required>
    <br><br>
    <input type="submit" value="Calcular IMC">
</form>

<?php
if ($peso !== null) {
    // Validação
    if ($peso <= 0) {
        echo "<div class='resultado'><span class='excessivo'>Erro: insira um peso válido maior que zero.</span></div>";
    } else {
        // Calcula IMC
        $imc = $peso / ($altura * $altura);
        $imcFormatado = number_format($imc, 2);

        // Verifica se está na faixa saudável
        if ($peso >= $pesoMin && $peso <= $pesoMax) {
            $status = "<span class='ok'>Peso dentro da faixa saudável ✅</span>";
        } else {
            $status = "<span class='excessivo'>Peso excessivo ❌</span>";
        }

        // Saída
        echo "<div class='resultado'>";
        echo "Peso informado: {$peso} kg<br>";
        echo "Altura: {$altura} m<br>";
        echo "IMC calculado: {$imcFormatado}<br>";
        echo "Situação: {$status}";
        echo "</div>";
    }
}
?>

</body>
</html>


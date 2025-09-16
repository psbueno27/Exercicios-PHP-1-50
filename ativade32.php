<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
    RA - Nome do Aluno
Data: 16 de Setembro de 2025
Descritivo: Classifique notas (A, B, C, D, F) e divida em Aprovado ou Reprovado, com entrada de usuário
**************************/

// Inicializa variáveis
$nota = null;
$conceito = null;
$status = null;
$classe = null;

// Se o formulário foi enviado
if (isset($_POST['nota'])) {
    $nota = (float) $_POST['nota'];

    // Validação
    if ($nota < 0 || $nota > 100) {
        $erro = "Erro: insira uma nota válida entre 0 e 100.";
    } else {
        // Classificação em conceito
        if ($nota >= 90) {
            $conceito = "A";
        } elseif ($nota >= 80) {
            $conceito = "B";
        } elseif ($nota >= 70) {
            $conceito = "C";
        } elseif ($nota >= 60) {
            $conceito = "D";
        } else {
            $conceito = "F";
        }

        // Aprovado ou Reprovado
        if (in_array($conceito, ["A","B","C"])) {
            $status = "Aprovado";
            $classe = "aprovado";
        } else {
            $status = "Reprovado";
            $classe = "reprovado";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Classificação de Notas</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        h1 { color: #333; }
        form { margin-bottom: 20px; }
        input[type=number] { padding: 5px; width: 120px; }
        input[type=submit] { padding: 6px 12px; margin-top: 8px;
                             background: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type=submit]:hover { background: #45a049; }
        .resultado { padding: 15px; border-radius: 6px; width: 320px;
                     box-shadow: 0 2px 6px rgba(0,0,0,0.1); margin-top: 10px; background: #fff; }
        .aprovado { color: green; font-weight: bold; }
        .reprovado { color: red; font-weight: bold; }
        .erro { color: darkred; font-weight: bold; }
    </style>
</head>
<body>

<h1>Classificação da Nota</h1>
<p>Digite uma nota de 0 a 100 para ver o conceito e se foi aprovado.</p>

<form method="post">
    <label>Nota:</label><br>
    <input type="number" name="nota" step="0.1" required>
    <br>
    <input type="submit" value="Calcular">
</form>

<?php if (isset($erro)) : ?>
    <div class="resultado erro"><?php echo $erro; ?></div>
<?php elseif ($nota !== null) : ?>
    <div class="resultado">
        Nota informada: <strong><?php echo $nota; ?></strong><br>
        Conceito: <strong><?php echo $conceito; ?></strong><br>
        Situação: <span class="<?php echo $classe; ?>"><?php echo $status; ?></span>
    </div>
<?php endif; ?>

</body>
</html>

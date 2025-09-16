<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
    RA - Nome do Aluno
Data: 16 de Setembro de 2025
Descritivo: Use o operador ternário para verificar se um número é positivo ou negativo
**************************/

// Inicializa variáveis
$numero = null;
$resultadoSimples = null;
$resultadoDetalhado = null;

// Se o formulário foi enviado
if (isset($_POST['numero'])) {
    $numero = (float) $_POST['numero'];

    // Versão simples: considera zero como positivo
    $resultadoSimples = ($numero >= 0) ? "Positivo (ou zero)" : "Negativo";

    // Versão detalhada: diferencia zero
    $resultadoDetalhado = ($numero > 0) 
        ? "Positivo" 
        : (($numero < 0) ? "Negativo" : "Zero");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 41 - Positivo ou Negativo</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; padding: 20px; }
        h1 { color: #333; }
        form { margin-bottom: 20px; }
        input[type=number] { padding: 5px; width: 120px; }
        input[type=submit] { padding: 6px 12px; margin-top: 8px;
                             background: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type=submit]:hover { background: #45a049; }
        .resultado { padding: 15px; border-radius: 6px; width: 350px;
                     box-shadow: 0 2px 6px rgba(0,0,0,0.1); margin-top: 10px; background: #fff; }
        .positivo { color: green; font-weight: bold; }
        .negativo { color: red; font-weight: bold; }
        .zero { color: blue; font-weight: bold; }
    </style>
</head>
<body>

<h1>Exercício 41 - Positivo ou Negativo</h1>
<p>Digite um número para verificar se é positivo, negativo ou zero.</p>

<form method="post">
    <label>Número:</label><br>
    <input type="number" name="numero" step="0.1" required>
    <br>
    <input type="submit" value="Verificar">
</form>

<?php if ($numero !== null) : ?>
    <div class="resultado">
        Número informado: <strong><?php echo $numero; ?></strong><br><br>

        <!-- Saída da versão simples -->
        Resultado (simples): 
        <span class="<?php echo ($numero >= 0) ? 'positivo' : 'negativo'; ?>">
            <?php echo $resultadoSimples; ?>
        </span><br>

        <!-- Saída da versão detalhada -->
        Resultado (detalhado): 
        <span class="<?php 
            echo ($numero > 0) ? 'positivo' : (($numero < 0) ? 'negativo' : 'zero'); 
        ?>">
            <?php echo $resultadoDetalhado; ?>
        </span>
    </div>
<?php endif; ?>

</body>
</html>

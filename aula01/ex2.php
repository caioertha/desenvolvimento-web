<?php
    include('../funcoes.php'); // Incluir funções auxiliares
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Aula do dia 05/11</h1>
        <h3>Exercício 2</h3>
    </header>

    <section>
        <!-- Inclusão do arquivo de divs -->
        <?php include('../div.php'); ?>
    </section>
    <section>
        <h3>TOP</h3>
        <?php
            // Função para gerar a tabela
            $montarTabela = function (array $dados): string {
                $retorno = "<table><thead><tr><th>Nome</th><th>Idade</th><th>Cidade</th></tr></thead><tbody>";

                foreach ($dados as $funcionario) {
                    $retorno .= "<tr>";
                    $retorno .= "<td>" . htmlspecialchars($funcionario['nome']) . "</td>";
                    $retorno .= "<td>" . htmlspecialchars($funcionario['idade']) . "</td>";
                    $retorno .= "<td>" . htmlspecialchars($funcionario['cidade']) . "</td>";
                    $retorno .= "</tr>";
                }

                $retorno .= "</tbody></table>";
                return $retorno;
            };

            echo $montarTabela($dadosFuncionarios);
        ?>
    </section>

</body>
</html>

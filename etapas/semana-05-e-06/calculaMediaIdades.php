<?php
function calcularMediaIdades($idades)
{
    $soma = 0;

    foreach ($idades as $idade) {
        $soma = $soma + $idade;
    }

    $quantidadeIdades = count($idades);
    $media = $soma / $quantidadeIdades;

    return $media;
}

$idades = [
    $_POST['idade1'],
    $_POST['idade2'],
    $_POST['idade3'],
];

$media = calcularMediaIdades($idades);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da Média</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <p><strong>Média das idades: <?php echo number_format($media, 2, ',', '.'); ?></strong></p>

        <a href="index.html">Cadastrar novas idades</a>
    </main>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <h1>Show do Bilhão</h1>
    <?php
    $perguntas = [
        "Qual é o sabor que felinos são incapazes de sentir?",
        "Qual é o maior planeta do Sistema Solar?",
        "Qual é o elemento achado em todos os seres vivos?",
        "Qual é o animal mais mortal do mundo?",
        "Qual é o maior número de vezes que alguém conseguiu dobrar um pedaço de papel ao meio?"
    ];

    $alternativas = [
        ["Salgado", "Doce", "Amargo", "Umami"],
        ["Terra", "Marte", "Saturno", "Júpiter"],
        ["Carbono", "Hidrogênio", "Oxigênio", "Ferro"],
        ["Cobra", "Mosquito", "Tubarão", "Tigre"],
        ["7", "10", "12", "14"]
    ];

    $respostasCorretas = [1, 3, 0, 1, 2];

    for ($i = 0; $i < count($perguntas); $i++) {
        echo "<h3>Pergunta " . ($i + 1) . ": " . $perguntas[$i] . "</h3>";
        echo "<ul>";
        for ($j = 0; $j < count($alternativas[$i]); $j++) {
            echo "<li>" . $alternativas[$i][$j] . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>

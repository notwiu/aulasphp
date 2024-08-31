<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = htmlspecialchars(trim($_POST['nome']));
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    
    $media = ($nota1 + $nota2) / 2;

    echo "<h1>Resultado</h1>";
    echo "<p>Aluno(a) $nome ficou com " . number_format($media, 1, ',', '.') . " de média.</p>";
} else {
    echo "<p> Dados não estão corretos, por favor tente novamente.</p>";
}


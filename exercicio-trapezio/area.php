<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $basemaior = floatval($_POST['basemaior']);
    $basemenor = floatval($_POST['basemenor']);
    $altura = floatval($_POST['altura']);

    $area = ($basemaior + $basemenor)* ($altura) / 2;

    echo "<h1>Resultado</h1>";
    echo "<p>A área do trapezio é " . number_format($area, 1, ',', '.') . " cm²</p>";
} else {
    echo "<p> Dados não estão corretos, por favor tente novamente.</p>";
}


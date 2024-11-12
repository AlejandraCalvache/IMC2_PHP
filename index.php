<?php
// Variables para los resultados
$imc = null;
$clasificacion = null;

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de peso y altura
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Validar los datos
    if (is_numeric($peso) && is_numeric($altura) && $peso > 0 && $altura > 0) {
        // Calcular el IMC
        $imc = $peso / ($altura * $altura);

        // Clasificación del IMC
        if ($imc < 18.5) {
            $clasificacion = "Bajo peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $clasificacion = "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            $clasificacion = "Sobrepeso";
        } else {
            $clasificacion = "Obesidad";
        }
    } else {
        $error = "Por favor, ingresa valores válidos para peso y altura.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        
        <!-- Formulario para ingresar peso y altura -->
        <form method="POST" action="">
            <label for="peso">Peso (kg):</label>
            <input type="number" step="0.1" id="peso" name="peso" placeholder="Introduce tu peso" required>
            
            <label for="altura">Altura (m):</label>
            <input type="number" step="0.01" id="altura" name="altura" placeholder="Introduce tu altura" required>
            
            <button type="submit">Calcular IMC</button>
        </form>

        <!-- Mostrar el resultado del cálculo del IMC -->
        <?php if (isset($imc)): ?>
        <div class="resultado">
            <p><strong>Tu IMC es:</strong> <?php echo number_format($imc, 2); ?></p>
            <p><strong>Clasificación:</strong> <?php echo $clasificacion; ?></p>
        </div>
        <?php elseif (isset($error)): ?>
        <div class="error">
            <p><?php echo $error; ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
// Si se ha enviado el formulario, procesamos los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Validar que el peso y la altura sean números válidos
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
    <title>Cálculo del IMC</title>
</head>
<body>
    <h1>Cálculo del Índice de Masa Corporal (IMC)</h1>

    <!-- Formulario para ingresar peso y altura -->
    <form action="index.php" method="POST">
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso" required>
        <br><br>

        <label for="altura">Altura (m):</label>
        <input type="text" id="altura" name="altura" required>
        <br><br>

        <input type="submit" value="Calcular IMC">
    </form>

    <?php if (isset($imc)): ?>
        <h2>Resultado</h2>
        <p>Tu IMC es: <?php echo round($imc, 2); ?></p>
        <p>Clasificación: <?php echo $clasificacion; ?></p>
    <?php endif; ?>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

</body>
</html>

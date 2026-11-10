<?php
$listaAscendente = [];
$listaDescendente = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroLimite = intval($_POST['limite']);
    
    if ($numeroLimite > 0) {
        for ($i = 1; $i <= $numeroLimite; $i++) {
            $listaAscendente[] = $i;
        }
        for ($i = $numeroLimite; $i >= 1; $i--) {
            $listaDescendente[] = $i;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Números</title>
</head>
<body style="background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%); font-family: sans-serif; padding: 20px;">

    <h2>Imprimir números Ascendentes y Descendentes</h2>
    <form method="post" action="">
        <label>Introduce un número límite:</label>
        <input type="number" name="limite" required min="1">
        <button type="submit">Generar</button>
    </form>

    <?php if (!empty($listaAscendente)): ?>
        <h3>Ascendente:</h3>
        <p><?php echo implode(", ", $listaAscendente); ?></p>
        
        <h3>Descendente:</h3>
        <p><?php echo implode(", ", $listaDescendente); ?></p>
    <?php endif; ?>

    <br>
    <a href="index.php" style="display:inline-block; padding:10px 20px; background:white; color:#333; text-decoration:none; border-radius:8px; font-weight:bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">← Volver al menú</a>
</body>
</html>
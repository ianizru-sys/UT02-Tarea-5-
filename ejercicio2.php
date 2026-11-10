<?php
$mensaje = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = intval($_POST['edad']);
    
    if ($edad < 0) {
        $error = "Error: La edad no puede ser negativa.";
    } elseif ($edad > 120) {
        $error = "Error: Esa edad no es realista.";
    } elseif ($edad >= 18) {
        $mensaje = "Eres mayor de edad.";
    } else {
        $mensaje = "Eres menor de edad.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Edad</title>
</head>
<body style="background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%); font-family: sans-serif; padding: 20px;">

    <h2>Introduce tu edad</h2>
    <form method="post" action="">
        <label>Edad:</label>
        <input type="number" name="edad" required>
        <button type="submit">Comprobar</button>
    </form>

    <?php if ($error != ""): ?>
        <h3 style="color:red;"><?php echo $error; ?></h3>
    <?php endif; ?>

    <?php if ($mensaje != ""): ?>
        <h3 style="color:green;"><?php echo $mensaje; ?></h3>
    <?php endif; ?>

    <br>
    <a href="index.php" style="display:inline-block; padding:10px 20px; background:white; color:#333; text-decoration:none; border-radius:8px; font-weight:bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">← Volver al menú</a>
</body>
</html>
<?php
class Calculadora {
    public function sumar($a, $b) { return $a + $b; }
    public function restar($a, $b) { return $a - $b; }
    public function multiplicar($a, $b) { return $a * $b; }
    public function dividir($a, $b) {
        if ($b == 0) throw new Exception("Error: No se puede dividir por cero.");
        return $a / $b;
    }
}
class CalculadoraCientifica extends Calculadora {
    public function potencia($base, $exponente) { return pow($base, $exponente); }
    public function raiz($numero) {
        if ($numero < 0) throw new Exception("Error: No se puede calcular la raíz de un negativo.");
        return sqrt($numero);
    }
}

$resultado = null;
$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operacion = $_POST['operacion'];
    $calc = new CalculadoraCientifica();

    try {
        switch ($operacion) {
            case 'sumar': $resultado = $calc->sumar($num1, $num2); break;
            case 'restar': $resultado = $calc->restar($num1, $num2); break;
            case 'multiplicar': $resultado = $calc->multiplicar($num1, $num2); break;
            case 'dividir': $resultado = $calc->dividir($num1, $num2); break;
            case 'potencia': $resultado = $calc->potencia($num1, $num2); break;
            case 'raiz': $resultado = $calc->raiz($num1); break;
        }
    } catch (Exception $e) { $error = $e->getMessage(); }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Científica</title>
</head>
<body style="background-color: #d1e8ff; font-family: Arial, sans-serif; padding: 20px;">

    <h2>Calculadora Científica</h2>
    <form method="post" action="">
        <label>Número 1:</label>
        <input type="number" step="any" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" step="any" name="num2"><br><br>
        <label>Operación:</label>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="potencia">Potencia</option>
            <option value="raiz">Raíz Cuadrada</option>
        </select><br><br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <h3>Resultado: <?php echo $resultado; ?></h3>
    <?php endif; ?>

    <?php if ($error !== null): ?>
        <h3 style="color:red;"><?php echo $error; ?></h3>
    <?php endif; ?>

    <br>
    <a href="index.php" style="display:inline-block; padding:10px 20px; background:white; color:#333; text-decoration:none; border-radius:8px; font-weight:bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">← Volver al menú</a>
</body>
</html>
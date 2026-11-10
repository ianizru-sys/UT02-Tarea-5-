<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Tarea 3</title>
    <!-- Importamos una fuente moderna de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        /* Estilos generales */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        /* Contenedor principal */
        .dashboard {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 900px;
            text-align: center;
        }

        /* Encabezado */
        .header {
            margin-bottom: 40px;
        }

        .header h1 {
            color: #2d3748;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .header p {
            color: #718096;
            font-size: 16px;
        }

        /* Cuadrícula de tarjetas (Responsiva) */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        /* Estilo de cada tarjeta */
        .card {
            background: #f7fafc;
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            padding: 30px 20px;
            text-decoration: none;
            color: #2d3748;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Efecto al pasar el ratón por la tarjeta */
        .card:hover {
            transform: translateY(-8px);
            border-color: #667eea;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
            background: #ffffff;
        }

        /* Iconos */
        .icon {
            font-size: 45px;
            margin-bottom: 15px;
            /* Efecto de rebote en el icono al pasar el ratón */
            transition: transform 0.3s ease;
        }

        .card:hover .icon {
            transform: scale(1.2) rotate(5deg);
        }

        /* Textos de la tarjeta */
        .card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #1a202c;
        }

        .card span {
            font-size: 13px;
            color: #718096;
            font-weight: 300;
        }

    </style>
</head>
<body>

    <div class="dashboard">
        
        <div class="header">
            <h1>🚀 Panel de Control</h1>
            <p>Evolución de ejercicios - Tarea 3 (PHP POO)</p>
        </div>

        <div class="grid">
            
            <!-- Tarjeta 1: Calculadora -->
            <a href="ejercicio1.php" class="card">
                <div class="icon">🧮</div>
                <h3>Calculadora Científica</h3>
                <span>Clases, herencia y excepciones</span>
            </a>

            <!-- Tarjeta 2: Edad -->
            <a href="ejercicio2.php" class="card">
                <div class="icon">🎂</div>
                <h3>Comprobar Edad</h3>
                <span>Uso de formularios ($_POST)</span>
            </a>

            <!-- Tarjeta 3: Números -->
            <a href="ejercicio3.php" class="card">
                <div class="icon">🔢</div>
                <h3>Listas de Números</h3>
                <span>Bucles for dinámicos</span>
            </a>

        </div>

    </div>

</body>
</html>
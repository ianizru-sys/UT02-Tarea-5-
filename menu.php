<?php
// Detectamos en qué página estamos para resaltar el botón
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>

<style>
    /* Importamos fuente moderna */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    /* Barra de navegación superior */
    .navbar-custom {
        font-family: 'Poppins', sans-serif;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px); /* Efecto cristal */
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
        border-bottom: 1px solid #eaeaea;
    }

    /* Logo / Título de la izquierda */
    .navbar-brand {
        font-size: 20px;
        font-weight: 600;
        color: #2d3748;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Contenedor de los enlaces */
    .navbar-links {
        display: flex;
        gap: 15px;
    }

    /* Botones del menú */
    .nav-btn {
        text-decoration: none;
        color: #4a5568;
        font-weight: 400;
        font-size: 15px;
        padding: 8px 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    /* Efecto al pasar el ratón */
    .nav-btn:hover {
        background-color: #edf2f7;
        color: #1a202c;
    }

    /* Estilo para el botón de la página actual */
    .nav-btn.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(102, 126, 234, 0.4);
    }

    /* Ajuste para móviles */
    @media (max-width: 768px) {
        .navbar-custom {
            flex-direction: column;
            padding: 15px;
            gap: 15px;
        }
        .navbar-links {
            flex-wrap: wrap;
            justify-content: center;
        }
    }
</style>

<!-- HTML de la barra de navegación -->
<nav class="navbar-custom">
    <a href="index.php" class="navbar-brand">
        <span>🚀</span> Tarea 3
    </a>
    
    <div class="navbar-links">
        <!-- Botón Home -->
        <a href="index.php" class="nav-btn <?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>">
            Inicio
        </a>
        
        <!-- Botón Calculadora -->
        <a href="ejercicio1.php" class="nav-btn <?php echo ($pagina_actual == 'ejercicio1.php') ? 'active' : ''; ?>">
            Calculadora
        </a>
        
        <!-- Botón Edad -->
        <a href="ejercicio2.php" class="nav-btn <?php echo ($pagina_actual == 'ejercicio2.php') ? 'active' : ''; ?>">
            Edad
        </a>
        
        <!-- Botón Números -->
        <a href="ejercicio3.php" class="nav-btn <?php echo ($pagina_actual == 'ejercicio3.php') ? 'active' : ''; ?>">
            Números
        </a>
    </div>
</nav>
<?php
    require __DIR__ . '/includes/funciones.php';
    if ($_POST) {
        insertar_usuario($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="build/css/styles.css">
</head>
<body>
    <nav>
        <a href="index.php">Inicio</a>
    </nav>
    <div class="container">
        <form method="POST" id='miFormulario'>
            <input name="nombre" id="nombre" placeholder="Nombre" required>
            <input name="apellido" placeholder="Apellido" required>
            <input name="email" id="email" placeholder="Email" required>
            <input name="telefono" placeholder="Teléfono">
            <input name="direccion" placeholder="Dirección">
            <input name="ciudad" placeholder="Ciudad">
            <input name="pais" placeholder="País">
            <input type="date" name="fecha">
            <select name="genero">
                <option>Masculino</option>
                <option>Femenino</option>
            </select>
            <button>Guardar</button>
        </form>
    </div>
    <script src="js/validar.js"></script>
</body>

</html>
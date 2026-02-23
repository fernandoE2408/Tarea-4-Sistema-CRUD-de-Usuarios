<?php
require __DIR__ . '/includes/funciones.php';
$id = $_GET['id'];
$usuario = obtener_usuario_por_id($id);
    if ($_POST) {
        $_POST['id'] = $id;
        editar_usuario($_POST);
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Usuario</title>
<link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
<a href="index.php">Inicio</a>
</nav>

<div class="container">
        <form method="POST" id="miFormulario">
            <input name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" placeholder="Nombre">
            <input name="email" id="email" value="<?php echo $usuario['email']; ?>" placeholder="Email">
            <input name="apellido" value="<?php echo $usuario['apellido']; ?>" placeholder="Apellido">
            <input name="telefono" value="<?php echo $usuario['telefono']; ?>" placeholder="Teléfono">
            <input name="direccion" value="<?php echo $usuario['direccion']; ?>" placeholder="Dirección">
            <input name="ciudad" value="<?php echo $usuario['ciudad']; ?>" placeholder="Ciudad">
            <input name="pais" value="<?php echo $usuario['pais']; ?>" placeholder="País">
            <input type="date" name="fecha" value="<?php echo $usuario['fecha_nacimiento']; ?>">
            <select name="genero">
                <option>Masculino</option>
                <option>Femenino</option>
            </select>
            <button type="submit">Guardar Cambios</button>
        </form>
</div>
<script src="js/validar.js"></script>
</body>
</html>
<?php
require __DIR__ . '/includes/funciones.php';
    if ($_POST) {
        $id = $_POST['id'];
        eliminar_usuario($id);
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>Eliminar Usuario</title>
<link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
<a href="index.php">Inicio</a>
</nav>

<div class="container">


</div>

</body>
</html>
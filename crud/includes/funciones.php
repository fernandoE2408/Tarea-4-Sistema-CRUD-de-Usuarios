<?php

/*
* Funcion de Obtener Usuarios
*/
function obtener_usuarios() {
    try {
        // Importar las credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "SELECT * FROM usuarios;";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        return $consulta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

function obtener_usuario_por_id($id) {
    try {
        require 'database.php';
        $sql = "SELECT * FROM usuarios WHERE id = $id;";
        $consulta = mysqli_query($db, $sql);
        return mysqli_fetch_assoc($consulta);
    } catch (\Throwable $th) {
        var_dump($th);
    }
}
/*
* Funcion de Insertar Usuario
*/
function insertar_usuario($datos) {
    try {
        // Importar las credenciales
        require 'database.php';

        // Consulta SQL
        $sql = "INSERT INTO usuarios(nombre, apellido, email, telefono, direccion, ciudad, pais, fecha_nacimiento, genero)
                VALUES
                ('$datos[nombre]','$datos[apellido]','$datos[email]','$datos[telefono]','$datos[direccion]','$datos[ciudad]','$datos[pais]','$datos[fecha]','$datos[genero]');";

        // Realizar la consulta
        mysqli_query($db, $sql);
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

/*
* Funcion de Editar Usuario
*
function editar_usuario($datos) {

}
*/
function editar_usuario($datos) {
    try {
        require 'database.php';
        $sql = "UPDATE usuarios SET nombre = '$datos[nombre]', apellido = '$datos[apellido]', email = '$datos[email]', telefono = '$datos[telefono]', 
                direccion = '$datos[direccion]', ciudad = '$datos[ciudad]', pais = '$datos[pais]', fecha_nacimiento = '$datos[fecha]', genero = '$datos[genero]' 
                WHERE id = $datos[id];";
        mysqli_query($db, $sql);
    } catch (\Throwable $th) {
        var_dump($th);
    }
}
/*
* Funcion de Eliminar Usuario
*
function eliminar_usuario($id) {

}
*/
function eliminar_usuario($id) {
    try {
        require 'database.php';
        $sql = "DELETE FROM usuarios WHERE id = $id;";
        mysqli_query($db, $sql);
    } catch (\Throwable $th) {
        var_dump($th);
    }
}
?>
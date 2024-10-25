<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'portafolio';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
    if (!$coneccion) {
        throw new Exception("Error de conexion: ".mysqli_connect_error());
    }
    echo "Conectado correctamente";

} catch (\Throwable $th) {
    var_dump($th);
}
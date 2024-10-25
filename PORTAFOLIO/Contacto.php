<?php
include './includes/header.php'
?>
        <h1>CONTACTOS</h1>

        <main>
            <form class="formulario" method="POST">
                <fieldset>
                    <legend>Dijite Todos Sus Datos</legend>
                    <div class="campos">

                        <div class="campo">
                            <label for="Nombre">Nombre</label>
                            <input type="text" id="Nombre"
                              name="Nombre"  placeholder="Digite El Nombre Completo" require
                                autofocus>
                        </div>
                        <div class="campo">
                            <label for="Telefono">Telefono</label>
                            <input type="text" id="Telefono"
                               name="Telefono" placeholder="+57 3xxxxxxxx">
                        </div>
                        <div class="campo">
                            <label for="Email">Email</label>
                            <input type="text" id="Email"
                               name="Email" placeholder="Digite tu Email">
                        </div>
                        <div class="campo">
                            <label for="Mensaje">Mensaje</label>
                            <textarea name="Mensaje" id="Mensaje"></textarea>
                        </div>
                        <input type="submit" class="btn">
                    </div>
                </fieldset>
            </form>

        </main>

        <?php   

$Nombre = $_POST['Nombre'] ?? '';
$Telefono = $_POST['Telefono'] ?? '';
$Email = $_POST['Email'] ?? '';
$Mensaje = $_POST['Mensaje'] ?? '';


        try {
            require __DIR__.('/includes/conexion_bd.php');
            $sql = "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES ('$Nombre', '$Telefono', '$Email', '$Mensaje');";
            $query = mysqli_query($coneccion, $sql);
            echo "Registro exitoso";


        } catch (\Throwable $th) {
            var_dump($th);
        }

        include './includes/footer.php';
        ?>
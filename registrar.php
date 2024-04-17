<?php
include("conexion.php");

if (isset($_POST['enviar'])) {
    if(strlen($_POST["nombre"]) >=1 &&
     strlen($_POST["telefono"]) >=1 &&
     strlen($_POST["correo"]) >=1 &&
     strlen($_POST["asunto"]) >=1 &&
     strlen($_POST["mensaje"]) >=1
    ){
        $nombre = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $asunto = trim($_POST['asunto']);
        $mensaje = trim($_POST['mensaje']);
        $consulta = "INSERT INTO clientes(nombre,telefono,correo,asunto,mensaje)
            VALUES ('$nombre', '$telefono', '$correo', '$asunto', '$mensaje')";

        $resultado = mysqli_query($conex, $consulta);
        if ($resultado){
         ?>
         <h3 class = "success" > Registro exitoso </h3>
         <?php
        } else {
            ?>
            <h3 class = "error" > Error </h3>
            <?php
        }
    } else {
        ?>
        <h3 class = "error" > Llena todo los campos </h3>
        <?php
    }
}
?>

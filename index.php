<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
    <link rel="stylesheet" href="estilos.css">
    <!-- Los modulos solo funcionan en http asi que tuve que acomodarlo aqui -->
    <script>
        // Cambia el color del texto dependiendo del mensaje obtenido
        function ColorMsj() {
            var TextoMsj = document.getElementById("Msj_final").textContent;

            // Si el texto existe y es correcto
            if (TextoMsj.includes("correctamente")) {
                document.getElementById("Msj_final").style.color = "#204e15";
            } else {
               document.getElementById("Msj_final").style.color = " #6b0000";
            }
        }

        // Borra el mensaje que viene por el server
        function BorrarMsj() {
            var Mensaje = document.getElementById("Msj_final");

            if (Mensaje) {
                Mensaje.remove();
            }
        }

    </script>
</head>

<body>
    <div id="Contenedor">
        <!-- Encabezado -->
        <div id="Titulo">
            <h1>
                     Registrate
            </h1>
            <img src="Imagenes/logo.png" alt="Logo">
        </div>

        <!-- Entrada de datos por el usuario -->
        <form method="post">
            <fieldset style="width:fit-content;">
                <label for="Nombre_usuario">
                    Nombre
                    <input type="text" name="Nombre" id="Nombre_usuario" placeholder="Introduce tu nombre">
                </label> <br>

                <label for="Apellidos_usuario">
                    Apellidos
                    <input type="text" name="Apellidos" id="Apellidos_usuario" placeholder="Introduce tus apellidos">
                </label> <br>

                <label for="Correo_usuario">
                    Correo
                    <input type="text" name="Correo" id="Correo_usuario" placeholder="Introduce tu correo">
                </label> <br>

                <label for="Telefono_usuario">
                    Telefono
                    <input type="text" name="Telefono" id="Telefono_usuario" placeholder="Introduce tu telefono">
                </label>
            </fieldset>

            <div id="Botones">
                <input type="reset" value="Borrar" onclick="BorrarMsj()">
                <input type="submit" value="Enviar">
            </div>
        </form>

        <!-- Mensaje servidor -->
        <?php include("Base/Validar.php"); ?>
    </div>
</body>

</html>
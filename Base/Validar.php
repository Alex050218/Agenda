<?php

include("conexion.php");

// Si todas las variables existen en el sistema
$Var_declaradas = isset($_POST["Nombre"]) && isset($_POST["Apellidos"]) && isset($_POST["Correo"]) && isset($_POST["Telefono"]);

if ($Var_declaradas) {

    $Nombre = trim($_POST["Nombre"]);
    $Apellidos = trim($_POST["Apellidos"]);
    $Correo  = trim($_POST["Correo"]);
    $Telefono = trim($_POST["Telefono"]);

    // La longitud mas baja es 0, es decir, falso y cualquier otro numero es verdadero
    $Long_aceptable = strlen($Nombre) && strlen($Apellidos) && strlen($Correo) && strlen($Telefono);

    if ($Long_aceptable) {

        $Consulta = "INSERT INTO `datos_personales`(`nombre`, `apellidos`, `correo`, `telefono`) VALUES ('$Nombre','$Apellidos','$Correo','$Telefono')";

        $Resultado = mysqli_query($conexion, $Consulta);
        
        echo "<h2 id='Msj_final'>";
        echo $Resultado 
            ? "Registrado correctamente" 
            : "No ha podido ser registrado";
        echo "</h2>";
    } else {
        echo "<h2 id='Msj_final'> Llene todos los campos </h2>";
    }    

    // Para cambiar el color del mensaje que se selecciono
    echo "<script> ColorMsj(); </script>";
}

?>

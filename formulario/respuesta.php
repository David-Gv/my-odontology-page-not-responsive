<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta del formulario</title>
</head>
<body>

    <?php
        $conexion = mysqli_connect("localhost", "root", "", "odontologia") or die("Problemas con la conexión");

        mysqli_query($conexion, "insert into Citas(PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Telefono,CorreoElectronico,FechaNacimiento,Genero) values
            ('$_REQUEST[Nombre1]','$_REQUEST[Nombre2]','$_REQUEST[Apellido1]','$_REQUEST[Apellido2]',$_REQUEST[Telefono],'$_REQUEST[Correo]','$_REQUEST[Fecha]','$_REQUEST[Genero]')"
        )
        or die("Problemas en el select" . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "Usted Pidio Su Cita Exitosamente";
    ?>


</body>
</html>
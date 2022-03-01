<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta de consulta</title>
</head>
<body>
    
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "odontologia") or die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select CodigoCita,PrimerNombre,PrimerApellido,Telefono,CorreoElectronico,FechaNacimiento,Genero from citas where PrimerNombre ='$_REQUEST[Nombre1]' and PrimerApellido= '$_REQUEST[Apellido1]' and CorreoElectronico = '$_REQUEST[Correo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));




  if ($reg = mysqli_fetch_array($registros)) {
    echo "<h1>Datos del solicitante</h1><br>";
    echo "<strong>Numero de cita:</strong>  " . $reg['CodigoCita'] . "<br>";
    echo "<br>";
    echo "<strong>Nombre:</strong>  " . $reg['PrimerNombre'] . "<br>";
    echo "<br>";
    echo "<strong>Apellido:</strong>  " . $reg['PrimerApellido'] . "<br>";
    echo "<br>";
    echo "<strong>Telefono:</strong>  " . $reg['Telefono'] . "<br>";
    echo "<br>";
    echo "<strong>Correo:</strong>  " . $reg['CorreoElectronico'] . "<br>";
    echo "<br>";
    echo "<strong>Fecha De Nacimiento:</strong>  " . $reg['FechaNacimiento'] . "<br>";
    echo "<br>";
    echo "<strong>Genero:</strong>  ";
    switch ($reg['Genero']) {
        case "Indefinido":
            echo "Indefinido";
        break;
        case "Masculino":
            echo "Masculino";
        break;
        case "Femenino":
            echo "Femenino";
        break;
        case "Otro";
            echo "Otro";
        break;
        case "No Especificar";
            echo "No Especificar";
    }
  } else {
    echo "No existe ninguna cita con la siguiente informacion: <strong>$_REQUEST[Nombre1]</strong>, <strong>$_REQUEST[Apellido1]</strong>
    , <strong>$_REQUEST[Correo]</strong> Por favor verificar que la informacion este bien escrita";
  }
  mysqli_close($conexion);
  ?>


</body>
</html>
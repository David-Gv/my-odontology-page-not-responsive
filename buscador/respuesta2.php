<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="consulta.css">
    <title>Respuesta de consulta</title>
</head>
<body>
    <main>
        <header>
            <img id="logo" src="../logo.png" alt="">
        </header>
        <br>
        <article>
            <div id="respuesta">
                <?php
                    $conexion = mysqli_connect("localhost", "id18494132_odontologo123", "odontologoGD123'", "id18494132_odontologia") or die("Problemas con la conexión");

                    $registros = mysqli_query($conexion, "select CodigoCita,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Telefono,CorreoElectronico,FechaNacimiento,Genero from Citas where PrimerNombre ='$_REQUEST[Nombre1]' and PrimerApellido= '$_REQUEST[Apellido1]' and CorreoElectronico = '$_REQUEST[Correo]'") or
                    die("Problemas en el select:" . mysqli_error($conexion));

                    if ($reg = mysqli_fetch_array($registros)) {
                        echo "<h2><center>Datos del solicitante</center></h2><br>";
                        echo "<strong>Numero de cita:</strong>  " . $reg['CodigoCita'] . "<br>";
                        echo "<br>";
                        echo "<strong>Primer Nombre:</strong>  " . $reg['PrimerNombre'] . "<br>";
                        echo "<br>";
                        echo "<strong>Segundo Nombre:</strong>  " . $reg['SegundoNombre'] . "<br>";
                        echo "<br>";
                        echo "<strong>Primer Apellido:</strong>  " . $reg['PrimerApellido'] . "<br>";
                        echo "<br>";
                        echo "<strong>Segundo Apellido:</strong>  " . $reg['SegundoApellido'] . "<br>";
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
                <br>
                <br>
                <center><a href="/consulta/consulta.html"><input type="button" value="Volver"></a></center>
                
            </div>
        </article>
        
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
</body>
</html>
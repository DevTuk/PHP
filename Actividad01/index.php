<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
  

<div class="recuadro">
<h2> Actividad Práctica Obligatoria </h2>

    <?php


            $nombre = "Diego";
            $apellido = "Barros";
            $edad = 36;
            $hobbie = "Video Juegos y tocar el Bajo";
            $editor = "Visual Estudio Code";
            $sistemaOperativo = "Windows 11";

            echo "Nombre y Apellido: $nombre $apellido <br>";
            echo "Edad:   $edad <br>";
            echo "Hobbie:   $hobbie <br>";
            echo "Editor Preferido:   $editor <br>";
            echo "Sistema Operativo:   $sistemaOperativo <br>";
            

        echo "<h2> Llamando al Array </h2>";

        $usuario = [

            'nombre' => 'Diego',
            'apellido' => 'Barros',
            'edad' => 36,
            'hobbie' => 'Video Juegos y tocar el Bajo',
            'editor' => 'Visual Estudio Code',
            'sistemaOperativo' => 'Windows 11',


        ];
                
        echo "<pre>";
        var_dump($usuario);
        echo "</pre>";

        echo "<h2> Llamando por item </h2>";

        echo "Nombre:  {$usuario ['nombre']}";
        echo "<br>";
        echo "Apellido: {$usuario ['apellido']}";
        echo "<br>";
        echo "Edad: {$usuario ['edad']}";
        echo "<br>";
        echo "Hobbie: {$usuario ['hobbie']}";
        echo "<br>";
        echo "Editor Preferido: {$usuario ['editor']}";
        echo "<br>";
        echo "Sistema Operativo: {$usuario ['sistemaOperativo']}";
        echo "<br>";

        echo "<br>";


    ?>
</div>


</body>
</html>




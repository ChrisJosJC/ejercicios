<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzz | Answers </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    // 1+1 es igual a
    $P1=$_POST["P1"]== 1;
    // Lenguaje de este año
    $P2=$_POST["P2"]== "PHP";
    // ¿Cuantos hay en el curso?
    $P3=$_POST["P3"]== 20;
    // Maestra con la que más nos toca
    $P4=$_POST["P4"]== "Dionicia";
    // Viviremos?
    $P5=$_POST["P5"]== "Quizas";
    // Como se escribe?
    $P6=$_POST["P6"]== "Xampp";

    # Contador de respuestas correctas e incorrectas
    $correctas=0;
    $incorrectas=0;

    if ($P1) {
        $correctas++;
    }else{
        $incorrectas++;
    } 
    if ($P2) {
        $correctas++;
    }else{
        $incorrectas++;
    } 
    if($P3) {
        $correctas++;
    }else{
        $incorrectas++;
    }
    if ($P4) {
        $correctas++;
    } else{
        $incorrectas++;
    }
    if ($P5) {
        $correctas++;
    } else{
        $incorrectas++;
    }
    if($P6) {
        $correctas++;
    }else{
        $incorrectas++;
    }
    
    echo "<main><h1 class='text green'>Has completado el formulario con exito!!<br>🎉🎉🎉<br> Tuviste $correctas respuestas correctas y $incorrectas incorrectas</h1></main>";
    ?>
</body>
</html>
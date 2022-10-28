<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BIGGER NUMBER </title>
</head>
<body>
    <?php
        $N1=$_POST["N1"];

        // if ($N1) {
        //    echo "<h1 class='text green'>Has aprobado, felicidades!!<br> Tu promedio es: <i>".$NF."</i> 🎉</h1>";
        // } else {
        //     echo "<h1 class='text red'>Lo siento, has reprobado. 🤕💔<br> Tu promedio es: <i>".$NF."</i> 💔</h1>";
        // }
        
        if ($N1>0) {
            echo "<h1 class='text green'> El <i>".$N1."</i> es un numero positivo🎉</h1>";
        } else if($N1<0){
            echo "<h1 class='text green'>El <i>".$N1."</i> es un numero negativo 🎉</h1>";
        } else {
            echo "<h1 class='text'>Es igual a cero</h1>";
        }
        
        
    ?>
</body>
</html>
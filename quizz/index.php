<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resuelve el siguiente quizz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="answers.php" method="post">
        <main class="boxs">
        <div class="box_q">
            <label for="P1">1+1 es igual a...</label>
        <select name="P1" id="P1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="11">11</option>
        </select>
        <button type="button" id="P1">Continuar</button>
        </div>
        <div class="box_q">
            <label for="P2">¿Cual es el lenguaje de programación de este año?</label>
        <select name="P2" id="P2">
            <option value="Javascript">Javascript</option>
            <option value="CSS">CSS</option>
            <option value="PHP">PHP</option>
        </select>
        <button type="button" id="P2">Continuar</button>
        </div>
        <div class="box_q">
            <label for="P3">¿Cuantos hay en el curso?</label>
        <select name="P3" id="P3">
            <option value="21">21</option>
            <option value="18">18</option>
            <option value="20">20</option>
        </select>
        <button type="button" id="P3">Continuar</button>
        </div>
        <div class="box_q">
            <label for="P4">¿Cual es la maestra con la que más nos toca?</label>
        <select name="P4" id="P4">
            <option value="George">George</option>
            <option value="Dionicia">Dionicia</option>
            <option value="Niurkary">11</option>
        </select>
        <button type="button" id="P4">Continuar</button>
        </div>
       <div class="box_q">
         <label for="P5">¿Sobreviviremos este año escolar?</label>
        <select name="P5" id="P5">
            <option value="No">No, ojala</option>
            <option value="Si">Si, vamos alla que se puede!</option>
            <option value="Quizas">Quizas, Dios es la vuelta!</option>
        </select>
        <button type="button" id="P5">Continuar</button>
       </div>
        <div class="box_q">
            <label for="P6">¿Quien es el/la mas viej@?</label>
        <<select name="P6" id="P6">
            <option value="Xammp">Xammp</option>
            <option value="Zampp">Zampp</option>
            <option value="Xampp">Xampp</option>
        </select>
        <button id="P6">Continuar</button>
        </div>
    </form>

    <script>
        const boxs = document.querySelectorAll(".box_q")
        boxs.forEach((e,i) => {
            e.style = "display: none;"
            e.children[2].addEventListener("click", ()=>{
                e.style =
                `visibility: hidden;
                height:0;
                opacity:0;
                transform: translate(0, 10px);`
                boxs[i+1].style = `visibility: visible;
                height:auto;
                opacity:1;
                transform: translate(0, -10px);`
            })
        });
        boxs[0].style = `visibility: visible;
                height:auto;
                opacity:1;
                transform: translate(0, -10px);`
    </script>
</body>
</html>
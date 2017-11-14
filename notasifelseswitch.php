<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div id='ifswitch'> 
    <h2>MENU</h2>
    <p>Seleccione el numero de la operacion a realizar</p>
    <ol class='listaordenada'>
        <li>Mostrar nota de Matematica</li>
        <li>Mostrar nota de Ciencias</li>
        <li>Mostrar nota de Sociales</li>
        <li>Mostrar nota de Lenguaje</li>
    </ol> 
    <form id='formulario' action='' method='post'>
            <input type='text' placeholder='Ingresa la opcion' id='opcion2' name='opcion2'>
            <input type='submit' value='Aceptar' id='enviando' name='enviando'>
    </form>
    <?php
        if(isset($_POST["enviando"])){

            $opcion2 = $_POST["opcion2"];

            echo "<h4>Usando if/else</h4>";

            if($opcion2==1){
                echo "<p class='exito'>Tu nota de Matematica es 100. </p>";

            }
            else if($opcion2==2){
                echo "<p class='exito'>Tu nota de Ciencias es 100. </p>";
            }
            else if($opcion2==3){
                echo "<p class='exito'>Tu nota de Sociales es 100. </p>";
            }
            else if($opcion2==4){
                echo "<p class='exito'>Tu nota de Lenguaje es 100. </p>";
            }
            else{
                echo "<p class='fracaso'>Opcion incorrecta</p>";
            }
            echo "<h4>Usando switch</h4>";
            switch($opcion2){
                case 1: echo "<p class='exito'>Tu nota de Matematica es 100. </p>";
                    Break;
                case 2: echo "<p class='exito'>Tu nota de Ciencias es 100. </p>";
                    Break;
                case 3: echo "<p class='exito'>Tu nota de Sociales es 100. </p>";
                    Break;
                case 4: echo "<p class='exito'>Tu nota de Lenguaje es 100. </p>";
                    Break;
                default: echo "<p class='fracaso'>Opcion incorrecta</p>";
                    Break;

        }
        }
    ?> 
    </div>
</body>
</html> 
  
   
     
   
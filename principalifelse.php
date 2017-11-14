<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <div class='principal'>
       <h2>Selecciona la opcion que deseas verificar</h2>
       <ol>
           <li>Notas con if/else y switch</li>
           <li>Tablas de multiplicar con bucle for y while</li>
       </ol>
       <form id='formulario' action='' method='post'>
                <input type='text' placeholder='Ingresa la opcion' id='opcion' name='opcion'>
                <input type='submit' value='Aceptar' id='aceptar' name='aceptar'>
        </form>
        <?php
            if(isset($_POST["aceptar"])){
                $opcion = $_POST["opcion"];
                if($opcion==1){
                    include("notasifelseswitch.php");
                }
                else if($opcion==2){
                   include("calculadoraforwhile.php"); 
                }
                else{
                    echo "<p class='fracaso'>Opcion incorrecta</p>";
                }
            }
           ?>
     </div> 
</body>
</html>
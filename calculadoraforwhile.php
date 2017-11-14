<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div id="forwhile">
        <h2>Tabla de multiplicar</h2>
        <p>Ingresa que tabla quieres y hasta que numero</p>
        <form id='formulario' action='' method='post'>
            <input type='text' placeholder='Ingresa la tabla que quieres' id='opcion3' name='opcion3'>
            <input type='text' placeholder='Ingresa hasta que numero' id='opcion4' name='opcion4'>
            <input type='submit' value='Calcular' id='calculando' name="calculando" class='calculando'>
        </form>
        <?php
        if(isset($_POST["calculando"])){
            $opcion3 = $_POST["opcion3"];
            $opcion4 = $_POST["opcion4"];
            
            if($opcion3==""||$opcion4==""){
            }else{
                echo "<h4>Usando ciclo for</h4>";
                for($contador = 1 ; $contador <= $opcion4 ; $contador++){
                        $resultado = $opcion3 * $contador;
                        echo "<p> $opcion3 x $contador = $resultado</p>";
                }   
                echo "<h4>Usando while</h4>";
                $contador2 = 1;
                while($contador2 <= $opcion4){
                    $resultado = $opcion3 * $contador2;
                    echo " <p>$opcion3 x $contador2 = $resultado </p>";
                    $contador2++;
                }
        }
        }
        ?>     
    </div>
</body>
</html>

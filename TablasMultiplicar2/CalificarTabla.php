<!DOCTYPE html>
<html>  
<head>
<title>Resultado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body style="background-color:rgb(165, 255, 153)";>
    <center>
    <?php
    $tabla=$_GET["tabla"];
    $rango1=$_GET["rango1"];
    $rango2=$_GET["rango2"];
    $color = "danger";
    $puntos=0;
    $total=0;
    $op=75;
    echo' <h2>Tabla de multiplicar del '.$tabla.'.</h2>';
    
    if($rango1<=$rango2)
    {
        $total=$rango2-$rango1+1;
    for ($i=$rango1; $i <= $rango2; $i++) 
    { 
        $op=75;
        if ($i % 2 == 0)
        {
            $op=50;
        }
        //echo "<h3><br>".$tabla.'x'.$i;
        $arreglo=$_GET["arreglo".$i];
        $operacion=($tabla*$i);
        //echo "<h4>Tu respuesta: $arreglo Respuesta: $operacion.</h4>";
        //echo '<table class="table table-striped">';
        if ($operacion==$arreglo) 
        {
            $puntos++;
            echo '
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-2 bg-primary bg-opacity-'.$op.' border-0 rounded-start-3">'.$tabla.' x '.$i.'</div>
                    <div class="col-2 bg-primary bg-opacity-'.$op.' bg-warning border-0">Respuesta: '.$operacion.'</div>
                    <div class="col-2 bg-primary bg-opacity-'.$op.' bg-light border-0 ">Su respuesta: '.$arreglo.'</div>
                    <div class="col-4 bg-primary bg-opacity-'.$op.' bg-success border-0 rounded-end-3">Correcto<i class="bi bi-check-circle-fill"></i></div>
                </div>

            </div>';
            
        } 
        else {
            echo '
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-2 bg-primary bg-opacity-'.$op.' border-0 rounded-start-3">'.$tabla.' x '.$i.'</div>
                    <div class="col-2 bg-primary bg-opacity-'.$op.' bg-warning border-0">Respuesta: '.$operacion.'</div>
                    <div class="col-2 bg-light border-0 ">Su respuesta: '.$arreglo.'</div>
                    <div class="col-4 bg-danger border-0 rounded-end-3">Incorrecto<i class="bi bi-x-circle-fill"></i></div>
                </div>
            </div>';
        } 
        }
    }
else
{
    $total=$rango1-$rango2+1;
    for ($i=$rango2; $i <= $rango1; $i++) 
    { 
        //echo "<h3><br>".$tabla.'x'.$i;
        $arreglo=$_GET["arreglo".$i];
        $operacion=($tabla*$i);
        //echo "<h4>Tu respuesta: $arreglo Respuesta: $operacion.</h4>";
        if ($operacion==$arreglo) 
        {
            $puntos++;
            echo '
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-2 bg-primary bg-opacity-'.$op.' border-0 rounded-start-3">'.$tabla.' x '.$i.'</div>
                    <div class="col-2 bg-warning bg-opacity-'.$op.' border-0">Respuesta: '.$operacion.'</div>
                    <div class="col-2 bg-light bg-opacity-'.$op.' border-0 ">Su respuesta: '.$arreglo.'</div>
                    <div class="col-4 bg-success bg-opacity-'.$op.' border-0 rounded-end-3">Correcto</div>
                </div>
            </div>';
        } 
        else {
            echo '
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-2 bg-primary bg-opacity-'.$op.' border-0 rounded-start-3">'.$tabla.' x '.$i.'</div>
                    <div class="col-2 bg-primary bg-opacity-'.$op.' bg-warning border-0">Respuesta: '.$operacion.'</div>
                    <div class="col-2 bg-primary bg-opacity-'.$op.' bg-light border-0 ">Su respuesta: '.$arreglo.'</div>
                    <div class="col-4 bg-primary bg-opacity-'.$op.' bg-danger border-0 rounded-end-3">Incorrecto</div>
                </div>
            </div>';
        }
    }
}
    echo ' 
    Puntuacion: '.$puntos.' de '.$total;
    ?>
    </center>
</body>
</html>
<!DOCTYPE html>
<html>  
<head>
<title>Ingresar datos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color:rgb(106, 195, 250);">
    <center>
    <form action="CalificarTabla.php" method="get">
        <?php
        $tabla=$_GET["tabla"];
        echo '
        <h2>Tabla de multiplicar del '.$tabla.'.</h2>
        <input type ="hidden" id="tabla" name="tabla"
        value="'.$tabla.'">
        ';
        $rango1=$_GET["rango1"];
        echo'
        <input type ="hidden" id="rango1" name="rango1"
        value="'.$rango1.'">
        ';
        $rango2=$_GET["rango2"];
        echo'
        <input type ="hidden" id="rango2" name="rango2"
        value="'.$rango2.'">
        ';
        if($rango2<=$rango1)
        {
            for ($i=$rango1; $i >= $rango2; $i--) { 
                echo'
                <div class="col-3">
                <h4><label for=fname">'.$tabla.'x'.$i.':</label></h4>
                <input type="text" class="form-control" style="text-align: center id="arreglo'.$i.'" name="arreglo'.$i.'"
                value=""><br></div>
                ';
            }
        }
        else
        {
            for ($i=$rango1; $i <=$rango2; $i++) { 
                echo'
                <div class="col-3">
                <h4><label for=fname">'.$tabla.'x'.$i.':</label></h4>
                <input type="text" class="form-control" id="arreglo'.$i.'" name="arreglo'.$i.'"
                value=""><br></div>
                ';
        }
    }
        ?>
        <div class="position-absolute top-50 start-0 translate-middle-y" >
            <img src="https://i.pinimg.com/564x/be/9e/4d/be9e4d631e35d766e8049351f38feeeb.jpg">
        </div>
        <div class="position-absolute top-50 end-0 translate-middle-y" >
            <img src="https://i.pinimg.com/564x/be/9e/4d/be9e4d631e35d766e8049351f38feeeb.jpg" >
        </div>

        <input type="submit" class="btn btn-primary" value="Calcular">
    </form>
    </center>
</body>
</html>
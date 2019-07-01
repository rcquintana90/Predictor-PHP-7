<?php
require_once("../controller/Vehiculo.php"); 
$vehiculo = new Vehiculo(); 

error_reporting(E_ALL ^ E_NOTICE);
$response = $vehiculo->predecir($_POST["numPlaca"], $_POST["fecha"], $_POST["hora"]); 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Predictor">
        
        <script type="text/javascript" src="../model/jquery.validate.js"></script>
        <script type="text/javascript" src="../model/jquery.js"></script>
        <title>Peak and Plate Predictor</title>
        
    </head>
    <body>
        <div class="container active">
            <h1 class="text-center">Peak and Plate Predictor</h1>
            <div class="well">
                <div class="row">
                    <div class="col-md-1">
                        <a href="/views/index.php"type="button" class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-md-11">
                        <?php
                        if ($response['restriccion'] == "No") {
                            ?>
                            <p> 
                            The vehicle with the sheet number: <?php echo $response['numPlaca']; ?>, can circulate freely in the city.
                            </p>
                            <?php
                        } else {
                            ?>
                            <p >
                            The vehicle with the sheet number: <?php echo $response['numPlaca']; ?>,can't circulate in the city.
                            </p>
                        <?php } ?>
                    </div>                    
                </div>
            </div>
    </body>
</html>